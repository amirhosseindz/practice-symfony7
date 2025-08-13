<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/playing')]
final class PlayController extends AbstractController
{
    #[Route('/json/{param1}', name: 'playJson', defaults: ['param1' => 0], methods: ['GET'])]
    public function playJson(Request $request, int $param1): JsonResponse
    {
        return $this->json([
            'param1' => $param1,
            'request_attributes' => $request->attributes->all(),
        ]);
    }

    #[Route('/html', name: 'playHtml', methods: ['GET'])]
    public function playHtml(): Response
    {
        return $this->render('play/play.html.twig');
    }
}
