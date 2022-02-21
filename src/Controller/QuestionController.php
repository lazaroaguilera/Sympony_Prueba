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
     * @Route("/questions/{slug}")
     */
    public function show($slug){
        return new Response(sprintf(
            "La página futura para mostrar la preguntas es '%s'!",
            str_replace("-"," ",$slug)
        ));
    }
}