<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use App\Repository\TweetPostRepository;
use App\Entity\TweetPost;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class TweetGetController extends AbstractController
{
    
   
     /**
     * @Route("/api/tweetes", name="public")
     * #return JsonResponse
     */

    public function returnAPITweets()
    {

        $tweets = $this->getDoctrine()->getRepository(TweetPost::class)->findAll();

        // $logger = new MyLogger(LoggerInterface::class);
        // $logger->setPublic(true);

        //$logger->error('I just got the logger');

       var_dump($tweets);
       $rows = [];
       foreach ($tweets as $tweet){
            array_push($rows, ["id"    =>  $tweet->getId() ,
                               "tweet" =>  $tweet->getTitle()."hogehogheogheohgoe"
                               ]);
       }
        return new JsonResponse($rows);
    }
}
