<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ArduinoDashboardController extends AbstractController
{
    // #[Route('/arduino/dashboard', name: 'app_arduino_dashboard')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ArduinoDashboardController.php',
        ]);
    }
}
