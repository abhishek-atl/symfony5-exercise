<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response('This is a response to a request');
    }

    /**
     * @Route("{slug}")
     */
    public function show($slug)
    {
        return new Response(
            sprintf('This is a second page titled "%s"', ucfirst(str_replace('-', ' ', $slug)))
        );
    }
}
