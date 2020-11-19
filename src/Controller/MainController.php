<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MainController
 * @package App\Controller
 * @Route("/")
 */
class MainController extends AbstractController
{
    /**
     * @Route("", name="homepage")
     * @param RecipeRepository $repo
     * @return Response
     */
    public function index(RecipeRepository $repo): Response
    {
        return $this->render('main/index.html.twig', [
            'recipes' => $repo->findTheBestHeightRecipes(),
        ]);
    }

    /**
     * @return Response
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig');
    }

    /**
     * @return Response
     * @Route("/search", name="search")
     */
    public function search(): Response
    {
        return $this->render('main/search.html.twig');
    }
}
