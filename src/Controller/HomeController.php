<?php

namespace App\Controller;

use App\Entity\Ingredients;
use App\Form\IngredientsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ingredient =new Ingredients();
        $form = $this->createForm(IngredientsType::class, $ingredient);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $ingredient =$form->getData();
            $entityManager->persist($ingredient);
            $entityManager->flush();

            return $this->redirectToRoute('app_page1');
        }
        return $this->render('home/index.html.twig',[
            'form' => $form->createView(),
        ]);
    }
}
