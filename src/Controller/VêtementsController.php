<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VĂȘtementsController extends AbstractController
{
    /**
     * @Route("/v/tements", name="app_v_tements")
     */
    public function index(): Response
    {
        return $this->render('văȘtements/index.html.twig', [
            'controller_name' => 'VĂȘtementsController',
        ]);
    }
}
