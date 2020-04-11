<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGenerator;

class QuestionController
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
     * @Route("/questions/show")
     */
    public function show(){
        return new Response("This is show action");
    }

}