<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use App\Repository\TweetPostRepository;
use App\Entity\TweetPost;
use Symfony\Component\HttpFoundation\JsonResponse;

class TweetPostController extends AbstractController
{
    
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

     /**
     * @Route("/api/tweetes", name="public")
     * @return JsonResponse
     */

    public function returnTweets()
    {

        $data = [
            [
                'albumId' => "1",
                "id" => 1,
                "title" => "accusamus beatae ad facilis cum similique qui sunt",
                "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"
            ],
            [
                'albumId' => "2",
                "id" => 2,
                "title" => "accusamus beatae ad facilis cum similique qui sunt",
                "description" => "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text"
            ],
            [
                'albumId' => "3",
                "id" => 3,
                "title" => "accusamus beatae ad facilis cum similique qui sunt",
                "description" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form"
            ],
        ];

        return new JsonResponse($data);
    }

}