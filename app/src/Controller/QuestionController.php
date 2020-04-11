<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{

    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response("Hello symfony 5! ");
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug){


        return $this->render('question/show.html.twig',['question'=>'STRING']);
    }

}