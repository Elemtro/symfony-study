<?php

namespace App\Controller;
use JsonException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
class indexController extends AbstractController {
    #[Route(path:"api/index", name:"")]
    public function index() : JsonResponse {
        return new JsonResponse(['tekst' => 'Zwraca nam wartość']);
    }
}