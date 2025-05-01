<?php

namespace App\Controller\Front;

use App\Service\TranslationService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TranslationController extends AbstractController
{
    #[Route('/translate', name: 'translate', methods: ['POST'])]
    public function translate(Request $request, TranslationService $translator): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $text = $data['text'] ?? '';
        $source = $data['source'] ?? 'en';
        $target = $data['target'] ?? 'ar';

        if (!$text) {
            return new JsonResponse(['error' => 'No text provided'], 400);
        }

        $translated = $translator->translate($text, $source, $target);

        return new JsonResponse(['translatedText' => $translated]);
    }
}
