<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VêtementsController extends AbstractController
{
    /**
     * @Route("/v/tements", name="app_v_tements")
     */
    public function index(): Response
    {
        return $this->render('v�tements/index.html.twig', [
            'controller_name' => 'VêtementsController',
        ]);
    }
}
