<?php

namespace App\Repository;

use App\Entity\Recipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Recipe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Recipe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Recipe[]    findAll()
 * @method Recipe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recipe::class);
    }

    /**
    * @return Recipe[] Returns an array of Recipe objects
    */

    public function findTheBestHeightRecipes()
    {
        return $this->createQueryBuilder('recipe')
            ->join('recipe.ratings', 'ratings')
            ->orderBy('ratings.rate', 'DESC')
            ->setMaxResults(8)
            ->getQuery()
            ->getResult()
        ;
    }


//public function findTheBestHeightRecipes()
//{
//    return $this->createNativeNamedQuery('SELECT recipe.id, recipe.name, rating.rate FROM recipe JOIN rating ON recipe.id = rating.recipe_id ORDER BY rating.rate DESC');
//}
    /*
    public function findOneBySomeField($value): ?Recipe
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
