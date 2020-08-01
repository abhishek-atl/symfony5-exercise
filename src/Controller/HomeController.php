<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/",name="app_homepage")
     */
    public function index()
    {
        $questions = [
            'How many continents are there in the world?',
            'How many oceans are there in the world?'
        ];

        return $this->render('question/show.html.twig', [
            'questions' => $questions
        ]);
    }

    /**
     * @Route("question/{slug}",name="app_questions")
     */
    public function show($slug)
    {
        return $this->render('question/answers.html.twig', [
            'slug' => $slug
        ]);
    }
}
