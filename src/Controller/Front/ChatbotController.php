<?php

namespace App\Controller\Front;

use App\Service\GeminiChatbotService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChatbotController extends AbstractController
{
    #[Route('/chatbot/message', name: 'chatbot_message', methods: ['POST'])]
    public function handleMessage(Request $request, GeminiChatbotService $chatbot): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $message = $data['message'] ?? '';

        $reply = $chatbot->getResponse($message);

        return new JsonResponse(['response' => $reply]);
    }
}
