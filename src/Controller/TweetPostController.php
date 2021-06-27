<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use App\Repository\TweetPostRepository;
use App\Entity\TweetPost;

class TweetPostController extends AbstractController
{
    /**
     * @Route("/tweet/post", name="tweet_post")
     */
    // public function index(): Response
    // {
    //     return $this->render('tweet_post/index.html.twig', [
    //         'controller_name' => 'TweetPostController',
    //     ]);
    // }

     /**
     * @Route("/tweet/post", name="create_tweet")
     * tweet creation
     */

     public function create(Request $request){
       $tweet_post = $request->request->get('tweet_post');
    //    if(is_null($tweet_post)){
    //        return $this->redirectToRoute('to_do_list'); // it doesnt work TODO
    //    }

       $em = $this->getDoctrine()->getManager();
       $tweet = new TweetPost;
       $tweet->setTitle("hoge"); // column name is mistaken TODO
       $tweet->setStatus(true); 
       $em->persist($tweet);
       $em->flush();


       return $this->render('tweet_post/index.html.twig',['tweet_post'=> $tweet_post ]);
     }

}
