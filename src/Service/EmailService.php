<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;  // Add this import
use Symfony\Contracts\HttpClient\HttpClientInterface;

class EmailService
{
    private $mailer;
    private $twig;
    private $logger;
    private $requestStack;  // Add RequestStack
    private $client;
    private $apiKey;

    public function __construct(
        MailerInterface $mailer, 
        LoggerInterface $logger,
        RequestStack $requestStack,  // Inject RequestStack
        Environment $twig,
        HttpClientInterface $client, 
        string $abstractApiKey
    ) {
        $this->logger = $logger;
        $this->requestStack = $requestStack;
        $this->twig = $twig;
        $this->client = $client;
        $this->apiKey = $abstractApiKey;
        $this->mailer = $mailer;
    }

    // Access the session via the RequestStack
    public function getSession()
    {
        return $this->requestStack->getCurrentRequest()->getSession();
    }

    public function sendReservationConfirmation(
        string $to, 
        string $eventName,
        string $eventDate,
        string $eventLocation,
        int $places,
        float $totalPrice
    ): bool {
        try {
            $email = (new Email())
                ->from('no-reply@eventopia.com')
                ->to($to)
                ->subject('Confirmation de réservation - ' . $eventName)
                ->html($this->twig->render('Front/reservation_confirmation.html.twig', [
                    'eventName' => $eventName,
                    'eventDate' => $eventDate,
                    'eventLocation' => $eventLocation,
                    'places' => $places,
                    'totalPrice' => $totalPrice
                ]));

            $this->mailer->send($email);
            return true;
        } catch (TransportExceptionInterface $e) {
            $this->logger->error('Email sending failed: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Generate 8-digit token, store it in session, and send via email.
     */
    public function sendVerificationToken(string $email): void
    {
        $token = random_int(10000000, 99999999);  // Secure 8-digit token

        // Save token to session with expiration
        $this->getSession()->set('email_verification_token', [
            'email' => $email,
            'token' => $token,
            'expires' => time() + 3600  // Token expires in 1 hour
        ]);

        // Send HTML email with token
        $message = (new Email())
            ->from('no-reply@eventopia.com')
            ->to($email)
            ->subject('Email Verification Code')
            ->html($this->generateVerificationEmail($token));

        $this->mailer->send($message);
    }

    /**
     * Generate the HTML content for the email verification.
     */
    private function generateVerificationEmail($token): string
    {
        return "
            <html>
                <head>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f4;
                            margin: 0;
                            padding: 0;
                        }
                        .email-container {
                            max-width: 600px;
                            margin: 20px auto;
                            padding: 20px;
                            background-color: #ffffff;
                            border-radius: 8px;
                            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        }
                        .email-header {
                            text-align: center;
                            color: #007bff;
                        }
                        .email-header h1 {
                            margin: 0;
                        }
                        .email-content {
                            color: #555;
                            font-size: 1.1em;
                            margin-bottom: 20px;
                        }
                        .email-footer {
                            font-size: 0.9em;
                            color: #777;
                            text-align: center;
                            margin-top: 20px;
                        }
                        .button {
                            display: inline-block;
                            padding: 12px 20px;
                            background-color: #007bff;
                            color: white;
                            text-decoration: none;
                            border-radius: 4px;
                            font-size: 1.1em;
                        }
                        .button:hover {
                            background-color: #0056b3;
                        }
                    </style>
                </head>
                <body>
                    <div class='email-container'>
                        <div class='email-header'>
                            <h1>Email Verification</h1>
                        </div>
                        <div class='email-content'>
                            <p>Hello,</p>
                            <p>Thank you for registering with us. To complete the registration process, please use the following verification code:</p>
                            <h2 style='color: #007bff;'>$token</h2>
                            <p>Enter this code on the verification page to verify your email.</p>
                            <p>If you did not request this email, please ignore it.</p>
                        </div>
                        <div class='email-footer'>
                            <p>&copy; " . date('Y') . " Your Company Name. All rights reserved.</p>
                        </div>
                    </div>
                </body>
            </html>
        ";
    }
    public function sendPasswordResetToken(string $email, string $token): void
{
    // Send HTML email with token
    $message = (new Email())
        ->from('no-reply@eventopia.com')
        ->to($email)
        ->subject('Password Reset Code')
        ->html($this->generatePasswordResetEmail($token));

    $this->mailer->send($message);
}

/**
 * Generate the HTML content for the password reset email.
 */
private function generatePasswordResetEmail(string $token): string
{
    return "
        <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        margin: 0;
                        padding: 0;
                    }
                    .email-container {
                        max-width: 600px;
                        margin: 20px auto;
                        padding: 20px;
                        background-color: #ffffff;
                        border-radius: 8px;
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    }
                    .email-header {
                        text-align: center;
                        color: #007bff;
                    }
                    .email-header h1 {
                        margin: 0;
                    }
                    .email-content {
                        color: #555;
                        font-size: 1.1em;
                        margin-bottom: 20px;
                    }
                    .email-footer {
                        font-size: 0.9em;
                        color: #777;
                        text-align: center;
                        margin-top: 20px;
                    }
                    .token-box {
                        display: inline-block;
                        padding: 15px 25px;
                        background-color: #f8f9fa;
                        border: 2px dashed #007bff;
                        border-radius: 4px;
                        font-size: 1.5em;
                        letter-spacing: 2px;
                        margin: 20px 0;
                        color: #007bff;
                        font-weight: bold;
                    }
                    .button {
                        display: inline-block;
                        padding: 12px 20px;
                        background-color: #007bff;
                        color: white;
                        text-decoration: none;
                        border-radius: 4px;
                        font-size: 1.1em;
                    }
                    .button:hover {
                        background-color: #0056b3;
                    }
                    .note {
                        font-size: 0.9em;
                        color: #dc3545;
                        font-style: italic;
                    }
                </style>
            </head>
            <body>
                <div class='email-container'>
                    <div class='email-header'>
                        <h1>Password Reset Request</h1>
                    </div>
                    <div class='email-content'>
                        <p>Hello,</p>
                        <p>We received a request to reset your password. Please use the following verification code:</p>
                        <div class='token-box'>$token</div>
                        <p>Enter this code on the password reset page to verify your identity.</p>
                        <p class='note'>This code will expire in 1 hour. If you didn't request a password reset, please ignore this email or contact support.</p>
                    </div>
                    <div class='email-footer'>
                        <p>&copy; " . date('Y') . " Eventopia. All rights reserved.</p>
                    </div>
                </div>
            </body>
        </html>
    ";
}

    /**
     * Validate user input token against stored session token.
     */
    public function isTokenValid(string $inputToken): bool
    {
        $data = $this->getSession()->get('email_verification_token');

        if (!$data || time() > $data['expires']) {
            return false;
        }

        return $inputToken === (string) $data['token'];
    }

    /**
     * Return email linked to stored token.
     */
    public function getTokenEmail(): ?string
    {
        $data = $this->getSession()->get('email_verification_token');
        return $data['email'] ?? null;
    }

    /**
     * Clear the token after successful verification.
     */
    public function clearToken(): void
    {
        $this->getSession()->remove('email_verification_token');
    }

    public function isDeliverable(string $email): bool
    {
        $url = sprintf(
            'https://emailvalidation.abstractapi.com/v1/?api_key=%s&email=%s',
            $this->apiKey,
            urlencode($email)
        );

        $response = $this->client->request('GET', $url);
        $data = $response->toArray();

        // You can log or debug $data if needed

        return isset($data['deliverability']) && $data['deliverability'] === 'DELIVERABLE';
    }
}
