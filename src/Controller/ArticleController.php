<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response('wadup');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show some article: %s', $slug));
    }
}