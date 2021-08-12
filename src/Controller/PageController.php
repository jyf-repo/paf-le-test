<?php

namespace App\Controller;

use App\Repository\IngredientsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/page1", name="app_page1")
     */
    public function index1(IngredientsRepository $ingredientsRepository): Response
    {
        $ingredients = $ingredientsRepository->findAll();

        return $this->render('page1/index.html.twig', [
            'ingredients' => $ingredients
        ]);
    }

    /**
     * @Route("/page2", name="app_page2")
     */
    public function index2(): Response
    {
        return $this->render('page2/index.html.twig');
    }
}
