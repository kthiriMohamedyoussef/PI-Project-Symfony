<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeminiModerationService
{
    private const API_KEY = 'AIzaSyAkRZjNUAfLVHPBKmTHy5BycCOdf02Ishs';
    private const API_URL = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=' . self::API_KEY;

    public function __construct(private HttpClientInterface $httpClient) {}

    public function containsObsceneLanguage(string $comment): bool
    {
        $prompt = "Analyze the following sentence to determine if it contains any obscene, inappropriate, or offensive language, OR if it includes any of these specific words: 'test1', 'miboun', 'makech rajel'. Respond with only 'YES' if any of these conditions are met, and 'NO' otherwise:\n\n" . $comment;


        $payload = [
            'contents' => [[
                'parts' => [['text' => $prompt]]
            ]]
        ];

        $response = $this->httpClient->request('POST', self::API_URL, [
            'json' => $payload
        ]);

        $data = $response->toArray(false);
        $answer = strtolower(trim($data['candidates'][0]['content']['parts'][0]['text'] ?? ''));

        return $answer === 'yes';
    }
}