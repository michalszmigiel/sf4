<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
        $comments = [
            "wah pah!", "i wish i could, but i dont want to :|", "yeah, no."
        ];

        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-',' ', $slug)),
            'comments' => $comments
        ]);
    }
}