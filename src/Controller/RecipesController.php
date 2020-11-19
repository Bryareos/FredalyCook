<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class RecipesController
 * @package App\Controller
 * @Route("/recipes")
 */
class RecipesController extends AbstractController
{
    /**
     * @Route("", name="recipes")
     * @param RecipeRepository $repo
     * @return Response
     */
    public function index(RecipeRepository $repo): Response
    {
        return $this->render('recipes/index.html.twig', [
            'recipes' => $repo->findAll(),
        ]);
    }

    /**
     * @param Recipe $recipe
     * @return Response
     * @Route("/{id}", name="show_recipe")
     */
    public function show(Recipe $recipe): Response
    {
        return $this->render('recipes/show.html.twig', [
            'recipe' => $recipe,
        ]);
    }
}
