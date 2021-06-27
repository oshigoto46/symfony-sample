<?php

namespace App\Controller;


require_once  __DIR__ . "/../Utility/LoggerImpl.class.php";

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use App\Repository\TweetPostRepository;
use App\Entity\TweetPost;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;

use MyLogger;



class TweetPostController extends AbstractController
{
    
     /**
     * @Route("/tweet/post", name="create_tweet")
     * tweet creation
     */

     public function create(Request $request){
    //    var_dump($request->request->get('tweet_post'));
       $tweet_post = $request->request->get('tweet_post');

       if(is_null($tweet_post)){
           return $this->redirectToRoute('to_do_list'); // it doesnt work TODO
       }

       $em = $this->getDoctrine()->getManager();
       $tweet = new TweetPost;
       $tweet->setId(rand(0, 10000)); // work around -> auto increment is good
       $tweet->setTitle($tweet_post); // column name is mistaken TODO
       $tweet->setStatus(true); 
       $em->persist($tweet);
       $em->flush();


       return $this->render('tweet_post/index.html.twig',['tweet_post'=> $tweet_post ]);
     }

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

  
       $rows = [];
       $_id = 0 ;
       foreach ($tweets as $tweet){
            $_id += 1;
            $rows[$_id] = ["tweet" =>  $tweet->getTitle()];
       }

    //    var_dump($tweets);
    //    var_dump($rows);

        //$logger->error("hoge-==================================");
         //var_export($tweets );
       
        // \Doctrine\Common\Util\Debug::dump($tweets);
        //return new Response('hoge',$tweets[0]->getTitle());
        //return JsonResponse($rows);
        return new JsonResponse(['tweet' => "hogehoge"]);
    }

}