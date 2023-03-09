<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SportsController extends AbstractController
{
    /**
     * @Route("/sports", name="app_sports")
     */
    public function index(): Response
    {
        return $this->render('sports/index.html.twig', [
            'controller_name' => 'SportsController',
        ]);
    }
}
