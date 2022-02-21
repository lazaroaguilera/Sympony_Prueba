<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */

    public function homepage(){

        return new Response("Pero qué controlador tan embrujado hemos conjurado!");
    }

    /**
     * @Route("/questions/how-to-tie-my-shoes-with-magic")
     */
    public function show(){

    }
}