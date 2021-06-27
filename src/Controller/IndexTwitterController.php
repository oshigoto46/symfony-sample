<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexTwitterController extends AbstractController
{
     /**
     * @Route("/spa_post", name="tweet")
     */
    public function spa_index(): Response
    {
        return $this->render('spa_tweet_post/index.html.twig', [
            'controller_name' => 'this is unncessaary message',
        ]);
    }
}
