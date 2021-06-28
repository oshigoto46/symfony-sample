<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use App\Repository\TweetPostRepository;
use App\Entity\TweetPost;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class TweetPostController extends AbstractController
{
    
       /**
     * @Route("/api/tweetes4", name="public")
     * return JsonResponse
     */

    public function returnAPITweets1()
    {

        $tweets = $this->getDoctrine()->getRepository(TweetPost::class)->findAll();

        // $logger = new MyLogger(LoggerInterface::class);
        // $logger->setPublic(true);

        //$logger->error('I just got the logger');

  
       $rows = [];
       $_id = 0 ;
       foreach ($tweets as $tweet){
            $_id += 1;
            array_push($rows, ["id" => $_id , 
                               "tweet" =>  $tweet->getTitle()
                               ]);
       }
        return new JsonResponse($rows);
    }
   

  
}
