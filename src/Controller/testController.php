<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testController extends AbstractController {

    #[Route("show-tekst")]
    public function showTekst() : Response 
    {
        return new Response('Show text');
    }

}

