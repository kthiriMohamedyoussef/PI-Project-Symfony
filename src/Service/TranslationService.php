<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class TranslationService
{
    private const API_URL = 'https://api.mymemory.translated.net/get';

    public function __construct(private HttpClientInterface $httpClient) {}

    public function translate(string $text, string $sourceLang = 'en', string $targetLang = 'ar'): ?string
    {
        $response = $this->httpClient->request('GET', self::API_URL, [
            'query' => [
                'q' => $text,
                'langpair' => "$sourceLang|$targetLang"
            ]
        ]);

        $data = $response->toArray(false);

        if (isset($data['responseData']['translatedText'])) {
            return $data['responseData']['translatedText'];
        }

        return null;
    }
}
