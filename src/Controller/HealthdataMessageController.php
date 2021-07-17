<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthdataMessageController extends AbstractController
{
    /**
     * @Route("/healthdata/message", name="healthdata_message")
     */
    public function index(): Response
    {
        return $this->render('healthdata_message/index.html.twig', [
            'controller_name' => 'HealthdataMessageController',
        ]);
    }
}
