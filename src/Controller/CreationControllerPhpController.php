<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CreationControllerPhpController extends AbstractController
{
    #[Route('/creation/controller/php', name: 'creation')]
    public function index(): Response
    {
        {
            return $this->render('creation_controller_php/index.html.twig', );
        }
    }
}
