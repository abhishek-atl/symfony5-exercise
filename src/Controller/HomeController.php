<?php

namespace App\Controller;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/",name="app_homepage")
     */
    public function index(MarkdownParserInterface $markDownParser)
    {
        $question = $markDownParser->transformMarkdown('How many continents are there in the **world**?');
        $questions = [
            $question,
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
