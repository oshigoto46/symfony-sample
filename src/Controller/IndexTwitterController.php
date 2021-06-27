<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexTwitterController extends AbstractController
{
    /**
     * @Route("/", name="tweet")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'this is unncessaary message',
        ]);
    }
}
