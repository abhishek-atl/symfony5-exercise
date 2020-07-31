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
        return $this->render('question/show.html.twig', [
            'question' => 'How many continents are there in the world?',
            'answers' => [4, 5, 8, 7]
        ]);
    }
}
