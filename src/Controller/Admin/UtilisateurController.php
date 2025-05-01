<?php

namespace App\Controller\Admin;
use App\Entity\Utilisateur;
use App\Entity\Adresse;
use App\Enum\Role;
use App\Form\UtilisateurType;
use App\Repository\AdresseRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use SebastianBergmann\Environment\Console;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Form\LoginType;
use App\Form\ProfileUpdateType;
use App\Service\EmailService;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormInterface;   
class UtilisateurController extends AbstractController
{
    private UserPasswordHasherInterface $passwordHasher;

    // Inject the password encoder into the controller constructor
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function getCustomUser(EntityManagerInterface $em, SessionInterface $session){
        $userId = $session->get('user_id');
        return $userId ? $em->getRepository(Utilisateur::class)->find($userId) : null;
    }

    #[Route('/admin/utilisateur', name: 'admin_utilisateur',methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository, Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getCustomUser($em, $request->getSession());
        $utilisateurs = $utilisateurRepository->findAll();

        return $this->render('/Admin/GestionUsers/users.html.twig', [
            'users' => $utilisateurs,
        ]);
    }

    #[Route('/admin/Create_utilisateur', name: 'admin_Create_utilisateur')]
    public function createUtilisateur(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        SluggerInterface $slugger
    ): Response {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur, ['is_creation' => true]);
        $user = $this->getCustomUser($entityManager, $request->getSession());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode password
            $encodedPassword = $passwordHasher->hashPassword(
                $utilisateur, 
                $utilisateur->getMotdepasse()
            );
            $utilisateur->setMotdepasse($encodedPassword);

            // Handle address
            $adresse = $utilisateur->getAdresse();
            if ($adresse) {
                $entityManager->persist($adresse); // Persist the address
            }

            // Handle image upload
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageurl')->getData(); // Assuming you have a field named 'image' in the form

            if ($imageFile) {
                // Define the destination directory (relative to public folder)
                $destinationDir = $this->getParameter('kernel.project_dir') . '/public/utilisateur_images';

                // Ensure the destination directory exists
                $filesystem = new Filesystem();
                if (!$filesystem->exists($destinationDir)) {
                    $filesystem->mkdir($destinationDir); // Create the directory if it doesn't exist
                }

                // Create a unique filename for the image
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                // Define the destination file path
                $destinationFilePath = $destinationDir . '/' . $newFilename;
                try {
                    // Move the uploaded image to the destination directory
                    $imageFile->move($destinationDir, $newFilename);

                    // Set the new image URL for the database (relative URL for web access)
                    $utilisateur->setImageUrl('utilisateur_images/' . $newFilename);
                } catch (FileException $e) {
                    // Handle file upload error
                    $this->addFlash('error', 'Error while uploading the image.');
                }
            }

            // Persist the user
            $entityManager->persist($utilisateur);
            $entityManager->flush(); // Flush all changes to the database

            $this->addFlash('success', 'User created successfully!');
            return $this->redirectToRoute('admin_utilisateur');
        }

        return $this->render('Admin/GestionUsers/createuser.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/update_utilisateur/{id}', name: 'admin_update_utilisateur')]
    public function updateUtilisateur(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        UtilisateurRepository $utilisateurRepository,
        SluggerInterface $slugger
    ) {
        // Retrieve the user to be updated
        $utilisateur = $utilisateurRepository->find($id);
    
        if (!$utilisateur) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }
        $user = $this->getCustomUser($entityManager, $request->getSession());
    
        // Create form for updating user
        $form = $this->createForm(UtilisateurType::class, $utilisateur, ['is_creation' => false]);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Rehash password only if a new password is provided
            $plainPassword = $form->get('motdepasse')->getData();
            if (!empty($plainPassword)) {
                $encodedPassword = $passwordHasher->hashPassword($utilisateur, $plainPassword);
                $utilisateur->setMotdepasse($encodedPassword);
            }
    
            // Handle image upload
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageurl')->getData();
    
            if ($imageFile) {
                // Define the destination directory (relative to public folder)
                $destinationDir = $this->getParameter('kernel.project_dir') . '/public/utilisateur_images';
    
                // Ensure the destination directory exists
                $filesystem = new Filesystem();
                if (!$filesystem->exists($destinationDir)) {
                    $filesystem->mkdir($destinationDir); // Create the directory if it doesn't exist
                }
    
                // Create a unique filename for the image
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
    
                // Define the destination file path
                $destinationFilePath = $destinationDir . '/' . $newFilename;
                try {
                    // Move the uploaded image to the destination directory
                    $imageFile->move($destinationDir, $newFilename);
    
                    // Set the new image URL for the database (relative URL for web access)
                    $utilisateur->setImageurl('utilisateur_images/' . $newFilename);
                } catch (FileException $e) {
                    // Handle file upload error
                    $this->addFlash('error', 'Error while uploading the image.');
                }
            }
    
            // Handle address update
            $adresse = $utilisateur->getAdresse();
            if ($adresse) {
                $entityManager->persist($adresse); // Persist address if updated
            }
    
            // Persist the updated utilisateur entity
            $entityManager->persist($utilisateur);
            $entityManager->flush(); // Flush all changes to the database
    
            $this->addFlash('success', 'Utilisateur mis à jour avec succès!');
            return $this->redirectToRoute('admin_utilisateur');
        }
    
    }
    
    #[Route('/utilisateur/updateProfile', name: 'update_profile')]
    public function updateProfile(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        UtilisateurRepository $utilisateurRepository,
        SluggerInterface $slugger
    ): Response {
        // Retrieve the user to be updated
        $user = $this->getCustomUser($entityManager, $request->getSession());
        $utilisateur = $utilisateurRepository->find($user->getId());
    
        if (!$utilisateur) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }
    
        $form = $this->createForm(ProfileUpdateType::class, $utilisateur);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Rehash password only if a new password is provided
            $plainPassword = $form->get('motdepasse')->getData();
            if (!empty($plainPassword)) {
                $encodedPassword = $passwordHasher->hashPassword($utilisateur, $plainPassword);
                $utilisateur->setMotdepasse($encodedPassword);
            }
    
            // Handle image upload
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageurl')->getData();
    
            if ($imageFile) {
                // Define the destination directory (relative to public folder)
                $destinationDir = $this->getParameter('kernel.project_dir') . '/public/utilisateur_images';
    
                // Ensure the destination directory exists
                $filesystem = new Filesystem();
                if (!$filesystem->exists($destinationDir)) {
                    $filesystem->mkdir($destinationDir); // Create the directory if it doesn't exist
                }
    
                // Create a unique filename for the image
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
    
                try {
                    // Move the uploaded image to the destination directory
                    $imageFile->move($destinationDir, $newFilename);
    
                    // Set the new image URL for the database (relative URL for web access)
                    $utilisateur->setImageurl('utilisateur_images/' . $newFilename);
                } catch (FileException $e) {
                    // Handle file upload error
                    $this->addFlash('error', 'Error while uploading the image.');
                }
            } else {
                // Ensure the existing image URL is retained if no new image is uploaded
                if (!$utilisateur->getImageurl()) {
                    $utilisateur->setImageurl('images/default-profile.png'); // Set a default image if none exists
                }
            }
    
            // Handle address update
            $adresse = $utilisateur->getAdresse();
            if ($adresse) {
                $entityManager->persist($adresse); // Persist address if updated
            }
    
            // Persist the updated utilisateur entity
            $entityManager->persist($utilisateur);
            $entityManager->flush(); // Flush all changes to the database
    
            $this->addFlash('success', 'Utilisateur mis à jour avec succès!');
            return $this->redirectToRoute('admin_utilisateur');
        }
    
        // Render the form view
        return $this->render('Front/editProfile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }


#[Route('/admin/utilisateur/delete/{id}', name: 'admin_delete_utilisateur', methods: ['POST'])]
public function deleteUtilisateur(
    Utilisateur $utilisateur,
    Request $request,
    EntityManagerInterface $em
): Response {
    $token = $request->request->get('_token');

    if ($this->isCsrfTokenValid("delete-user-{$utilisateur->getId()}", $token)) {
        $em->remove($utilisateur);
        $em->flush();
        $this->addFlash('success', 'Utilisateur supprimé avec succès.');
    } else {
        $this->addFlash('danger', 'Jeton CSRF invalide.');
    }

    return $this->redirectToRoute('admin_utilisateur');
}
#[Route('/signup', name: 'app_signup')]
public function signup(
    Request $request,
    EmailService $emailService,
    EmailService $emailVerificationService,
    UtilisateurRepository $utilisateurRepository,
    SessionInterface $session
): Response {
    $user = new Utilisateur();

    $form = $this->createForm(UtilisateurType::class, $user, [
        'is_signup' => true,
    ]);

    $form->handleRequest($request);

    // Validate reCAPTCHA
   
    if ($form->isSubmitted() && $form->isValid()) {
        // Check if reCAPTCHA validation is successful
        
            $email = $user->getEmail();

            // 1. Check if the email already exists in the database
            if ($utilisateurRepository->findOneBy(['email' => $email])) {
                $form->get('email')->addError(new FormError('This email is already registered.'));
            } else {
                // 2. Use Abstract API to check if the email is real
                $isValid = $emailVerificationService->isDeliverable($email);

                if (!$isValid) {
                    $form->get('email')->addError(new FormError('This email appears to be invalid.'));
                } else {
                    // Store user in session
                    $session->set('pending_user', serialize($user));

                    // Send verification token
                    $emailService->sendVerificationToken($email);

                    return $this->redirectToRoute('verify_token');
                }
            }
        }
    

    return $this->render('front/signup.html.twig', [
        'form' => $form->createView(),
        'google_recaptcha_site_key' => $_ENV['RECAPTCHA_SITE_KEY'],
    ]);
}

#[Route('/verify-token', name: 'verify_token')]
public function verifyToken(
    Request $request,
    SessionInterface $session,
    EntityManagerInterface $em,
    UserPasswordHasherInterface $hasher,
    EmailService $emailService
): Response {
    $message = null; // Initialize the message variable

    if ($request->isMethod('POST')) {
        $inputToken = $request->request->get('token');

        if ($emailService->isTokenValid($inputToken)) {
            $serializedUser = $session->get('pending_user');

            if ($serializedUser) {
                /** @var Utilisateur $user */
                $user = unserialize($serializedUser);

                // Hash the password again
                $user->setMotdepasse(
                    $hasher->hashPassword($user, $user->getMotdepasse())
                );

                // Set default role
                $user->setRole(Role::PARTICIPANT);

                // Persist address if set
                if ($user->getAdresse()) {
                    $em->persist($user->getAdresse());
                }

                // Persist user
                $em->persist($user);
                $em->flush();

                // Clear session/token
                $emailService->clearToken();
                $session->remove('pending_user');

                $message = 'Your email has been verified. You can now log in.';
            }
        } else {
            $message = 'Invalid or expired verification token.';
        }
    }

    return $this->render('front/verifemail.html.twig', [
        'message' => $message,  // Pass the message to the template
    ]);
}



    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->clear();
        return $this->redirectToRoute('app_login');
    }
    #[Route('/login', name: 'app_login')]
    public function login(
        Request $request,
        SessionInterface $session,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $hasher
    ): Response {
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
    
            $user = $em->getRepository(Utilisateur::class)->findOneBy(['email' => $data['email']]);
    
            if ($user && $hasher->isPasswordValid($user, $data['motdepasse'])) {
                $session->set('user_id', $user->getId());
    
                $role = $user->getRole()->value; 
    
                switch ($role) {
                    case 'ADMIN':
                        return $this->redirectToRoute('admin_utilisateur');
    
                    case 'PARTICIPANT':
                          return $this->render('front/home.html.twig', [
                            'user' => $user,
                        ]);
    
                    default:
                        return $this->render('front/home.html.twig', [
                            'user' => $user,
                        ]);
                }
            }
    
            $this->addFlash('error', 'Invalid email or password.');
        }
    
        return $this->render('front/login.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/forgot-password', name: 'forgot_password')]
public function forgotPassword(
    Request $request,
    UtilisateurRepository $utilisateurRepository,
    EmailService $emailService,
    SessionInterface $session
): Response {
    if ($request->isMethod('POST')) {
        $email = $request->request->get('email');
        $user = $utilisateurRepository->findOneBy(['email' => $email]);

        if (!$user) {
            // Don't reveal if user exists for security
            $this->addFlash('success', 'If an account exists with this email, a token has been sent.');
            return $this->redirectToRoute('forgot_password');
        }

        // Generate 8-digit token
        $token = str_pad(random_int(0, 99999999), 8, '0', STR_PAD_LEFT);
        $expiresAt = new \DateTimeImmutable('+1 hour');

        // Store token hash and expiration in session
        $session->set('reset_token_hash', hash('sha256', $token));
        $session->set('reset_user_id', $user->getId());
        $session->set('reset_token_expires_at', $expiresAt);

        // Send email with the token
        $emailService->sendPasswordResetToken($user->getEmail(), $token);

        $this->addFlash('success', 'An 8-digit password reset token has been sent to your email.');
        return $this->redirectToRoute('verify_reset_token');
    }

    return $this->render('front/forgot_password.html.twig');
}

#[Route('/verify-reset-token', name: 'verify_reset_token')]
public function verifyResetToken(
    Request $request,
    SessionInterface $session,
    UtilisateurRepository $utilisateurRepository
): Response {
    // Check if there's an active reset process
    if (!$session->has('reset_token_hash')) {
        $this->addFlash('error', 'No password reset requested.');
        return $this->redirectToRoute('forgot_password');
    }

    if ($request->isMethod('POST')) {
        $token = $request->request->get('token');  // Get the token from form input
        
        if (!$token || strlen($token) !== 8) {
            $this->addFlash('error', 'Invalid token format. Please enter an 8-digit code.');
            return $this->redirectToRoute('verify_reset_token');
        }

        // Retrieve session token data
        $sessionToken = $session->get('reset_token_hash');
        $expiresAt = $session->get('reset_token_expires_at');

        // Check if the token is expired
        if ($expiresAt && new \DateTimeImmutable() > $expiresAt) {
            $this->clearResetSession($session);
            $this->addFlash('error', 'Token has expired. Please request a new one.');
            return $this->redirectToRoute('forgot_password');
        }

        // Compare the token hash in session with the submitted token
        if (!hash_equals($sessionToken, hash('sha256', $token))) {
            $this->addFlash('error', 'Invalid token.');
            return $this->redirectToRoute('verify_reset_token');
        }

        // Token is valid, proceed to reset password
        return $this->redirectToRoute('reset_password');
    }

    return $this->render('front/verify_reset_token.html.twig');
}





#[Route('/reset-password', name: 'reset_password')]
public function resetPassword(
    Request $request,
    SessionInterface $session,
    UtilisateurRepository $utilisateurRepository,
    EntityManagerInterface $em,
    UserPasswordHasherInterface $passwordHasher
): Response {
    // Verify active reset session
    if (!$session->has('reset_token_hash') || !$session->has('reset_user_id')) {
        $this->addFlash('error', 'Password reset session expired.');
        return $this->redirectToRoute('forgot_password');
    }

    $userId = $session->get('reset_user_id');
    $user = $utilisateurRepository->find($userId);

    if (!$user) {
        $this->clearResetSession($session);
        $this->addFlash('error', 'User not found.');
        return $this->redirectToRoute('forgot_password');
    }

    if ($request->isMethod('POST')) {
        $newPassword = $request->request->get('password');
        $confirmPassword = $request->request->get('confirm_password');

        if ($newPassword !== $confirmPassword) {
            $this->addFlash('error', 'Passwords do not match.');
            return $this->redirectToRoute('reset_password');
        }

        // Update password
        $encodedPassword = $passwordHasher->hashPassword($user, $newPassword);
        $user->setMotdepasse($encodedPassword);
        
        $em->persist($user);
        $em->flush();

        // Clear session
        $this->clearResetSession($session);

        $this->addFlash('success', 'Your password has been reset successfully. You can now login with your new password.');
        return $this->redirectToRoute('app_login');
    }

    return $this->render('front/reset_password.html.twig');
}

private function clearResetSession(SessionInterface $session): void
{
    $session->remove('reset_token_hash');
    $session->remove('reset_user_id');
    $session->remove('reset_token_expires_at');
}
    
}


    



