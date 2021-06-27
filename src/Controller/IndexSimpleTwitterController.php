<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class IndexSimpleTwitterController extends AbstractController
{
    /**
     * @Route("/simple_post", name="index_simple_twitter")
     */
    public function index(): Response
    {
        return $this->render('index_simple_twitter/index.html.twig', [
            'controller_name' => 'IndexSimpleTwitterController',
        ]);
    }


     /**
     * @Route("/tweet/post", name="create_tweet")
     * tweet creation
     */

    public function create(Request $request){
        //    var_dump($request->request->get('tweet_post'));
           $tweet_post = $request->request->get('tweet_post');
          
        //    if(is_null($tweet_post)){
        //        return $this->redirectToRoute('to_do_list'); // it doesnt work TODO
        //    }
    
           //_insertDB($tweet_post);
           return $this->render('tweet_post/index.html.twig',['tweet_post'=> $tweet_post ]);
     }

}


