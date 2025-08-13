<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/playing')]
final class DefaultController extends AbstractController
{
    #[Route('/{param1}', name: 'play', defaults: ['param1' => '1'], methods: ['GET'])]
    public function play(Request $request, int $param1 = 1): JsonResponse
    {
        return $this->json([
            'param1' => $param1,
            'request_attributes' => $request->attributes->all(),
        ]);
    }
}
