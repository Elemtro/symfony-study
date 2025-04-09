<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApplicationController extends AbstractController 
{
    #[Route(
        path: "/api/applications",  // <-- Uwaga na "/api/"
        name: "app_applications",   // <-- Nadaj nazwę
        methods: ['GET']            // <-- Określ metodę HTTP
    )]
    public function applications(): JsonResponse 
    {
        return new JsonResponse(['tekst' => 'Działa!']);
    }
}