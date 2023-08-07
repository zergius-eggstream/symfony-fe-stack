<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => static::class,
        ]);
    }

    #[Route('/page1', name: 'page1')]
    public function page1(): Response
    {
        return $this->render('pages/page1.html.twig');
    }

    #[Route('/page2', name: 'page2')]
    public function page2(): Response
    {
        return $this->render('pages/page2.html.twig');
    }
}
