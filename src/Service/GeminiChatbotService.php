<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class GeminiChatbotService
{
    private const API_KEY = 'AIzaSyAkRZjNUAfLVHPBKmTHy5BycCOdf02Ishs';
    private const API_URL = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=';

    public function __construct(private HttpClientInterface $httpClient) {}

    public function getResponse(string $userMessage): ?string
    {
        $systemPrompt = "You are a friendly and helpful assistant for a platform called Eventopia. Only talk about events: their types, places, schedules, registrations, or other related information. Never talk about anything else.";

        $payload = [
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        ['text' => "$systemPrompt\n\nUser: $userMessage"]
                    ]
                ]
            ]
        ];

        try {
            $response = $this->httpClient->request('POST', self::API_URL . self::API_KEY, [
                'json' => $payload,
            ]);

            $data = $response->toArray(false);
            return trim($data['candidates'][0]['content']['parts'][0]['text'] ?? '');
        } catch (TransportExceptionInterface $e) {
            return "Sorry, I’m having trouble responding right now.";
        }
    }
}
