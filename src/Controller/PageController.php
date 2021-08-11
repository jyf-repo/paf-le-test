<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/page1", name="app_page1")
     */
    public function index1(): Response
    {
        return $this->render('page1/index.html.twig');
    }

    /**
     * @Route("/page2", name="app_page2")
     */
    public function index2(): Response
    {
        return $this->render('page2/index.html.twig');
    }
}
