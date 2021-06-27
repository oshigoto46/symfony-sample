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
      *  insertDB
      *  @param 
      */
      
     private function _insertDB(String $tweet_post){


        $em = $this->getDoctrine()->getManager();
        $tweet = new TweetPost;
        $tweet->setId(rand(0, 10000)); // work around -> auto increment is good
        $tweet->setTitle($tweet_post); // column name is mistaken TODO
        $tweet->setStatus(true); 
        $em->persist($tweet);
        $em->flush();
 
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
            array_push($rows, ["id" => $_id , 
                               "tweet" =>  $tweet->getTitle()
                               ]);
       }


    //    $data = [
    //     [
    //         'albumId' => "1",
    //         "id" => 1,
    //         "title" => "accusamus beatae ad facilis cum similique qui sunt",
    //         "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"
    //     ],
    //     [
    //         'albumId' => "2",
    //         "id" => 2,
    //         "title" => "accusamus beatae ad facilis cum similique qui sunt",
    //         "description" => "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text"
    //     ],
    //     [
    //         'albumId' => "3",
    //         "id" => 3,
    //         "title" => "accusamus beatae ad facilis cum similique qui sunt",
    //         "description" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form"
    //     ],
    //     ];
    //    var_dump($tweets);
    //    var_dump($rows);

        //$logger->error("hoge-==================================");
         //var_export($tweets );
       
        // \Doctrine\Common\Util\Debug::dump($tweets);
        //return new Response('hoge',$tweets[0]->getTitle());
        //return JsonResponse($rows);
        //return new JsonResponse(['tweet' => "hogehoge"]);
        return new JsonResponse($rows);
    }

}