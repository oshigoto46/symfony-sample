<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TweetPostRepository;
use App\Entity\TweetPost;

const BAD_REQUEST = 400;
const SUCCESS     = 200;

class TweetPost2Controller extends AbstractController
{
    /**
     * @Route("/tweet/post2", name="tweet_post2")
     */
    public function TweetsPost(Request $request)
    {
        $tweet_content = json_decode($request->getContent(), true)['tweet_post']["tweet"];
        $ret =  $this->_create($tweet_content);   
        // var_dump("====var_dump====");
        // var_dump($tweet_content);
        //var_dump(json_decode($request->getContent(), true));
        if(!$ret){
          return new JsonResponse(array("error"=>BAD_REQUEST));
        }
          return new JsonResponse(array("success"=>SUCCESS));
       
    }

   
    // !!!!!!!!!!!!!!!!!!!!!
    // TODO should transport this to Repository
    // !!!!!!!!!!!!!!!!!!!!!
   

    private function _create($tweet_post){

        if(is_null($tweet_post) || !is_string($tweet_post)){
            return  false; 
        }
 
        $em = $this->getDoctrine()->getManager();
        $tweet = new TweetPost;
        // $tweet->setId(11); // work around -> auto increment is good
        $tweet->setTitle($tweet_post); // column name is mistaken TODO
        $tweet->setStatus(true); 
        $em->persist($tweet);
        $em->flush();

        return true;

    }
   
}
