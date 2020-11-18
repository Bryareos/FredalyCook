<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Ingredient;
use App\Entity\Recipe;
use App\Entity\RecipeIngredient;
use App\Entity\User;
use App\Entity\UserProfile;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
       $faker = Factory::create('fr_FR');

       // Génération d'un user admin
        $david = new User();
        $davidProfile = new UserProfile();
        $davidProfile->setFirstName('David');
        $davidProfile->setLastName('Ottaviani');
        $davidProfile->setCookLevel(2);
        $davidProfile->setBirthDate(new \DateTime('15-02-1996'));
        $david->setEmail('davidado13@gmail.com');
        $david->setRoles(['ROLE_ADMIN']);
        $david->setPassword($this->encoder->encodePassword(
            $david,
            'gprmpy13'
        ));
        $david->setUserProfile($davidProfile);

        $manager->persist($david);

        // Génération de 3 catégories
        $entrees = new Category();
        $entrees->setName('Entrées');
        $manager->persist($entrees);
        $plats = new Category();
        $plats->setName('Plats');
        $manager->persist($plats);
        $desserts = new Category();
        $desserts->setName('Desserts');
        $manager->persist($desserts);

        //Tomate, mozza, mayo
        $tomate = new Ingredient();
        $tomate->setName('Tomate');
        $manager->persist($tomate);
        $mozza = new Ingredient();
        $mozza->setName('Mozza');
        $manager->persist($mozza);
        $mayo = new Ingredient();
        $mayo->setName('Mayonnaise');
        $manager->persist($mayo);

        // Génération de 6 entrées
        for ($i = 0; $i < 6; $i++) {
            $entreeRecipe = new Recipe();
            $entreeRecipe->setName($faker->name);
            $entreeRecipe->setCategory($entrees);
            $entreeRecipe->setCookTime($faker->numberBetween(15, 180));
            $entreeRecipe->setLevel($faker->numberBetween(1, 5));
            $entreeRecipe->setInstructions($faker->realText(200));
            $entreeRecipe->setIsChecked(true);
            $manager->persist($entreeRecipe);
        }

        //Riz, Crevette, Saumon
        $riz = new Ingredient();
        $riz->setName('Riz');
        $manager->persist($riz);
        $crevette = new Ingredient();
        $crevette->setName('Crevette');
        $manager->persist($crevette);
        $saumon = new Ingredient();
        $saumon->setName('Saumon');
        $manager->persist($saumon);

        // Génération de 5 plats
        for ($j = 0; $j < 5; $j++) {
            $platRecipe = new Recipe();
            $platRecipe->setName($faker->name);
            $platRecipe->setCategory($plats);
            $platRecipe->setCookTime($faker->numberBetween(30, 180));
            $platRecipe->setLevel($faker->numberBetween(1, 5));
            $platRecipe->setInstructions($faker->realText(200));
            $platRecipe->setIsChecked(false);
            $manager->persist($platRecipe);
        }

        //Lait, oeuf, beurre
        $lait = new Ingredient();
        $lait->setName('Lait');
        $manager->persist($lait);
        $oeuf = new Ingredient();
        $oeuf->setName('Oeuf');
        $manager->persist($oeuf);
        $beurre = new Ingredient();
        $beurre->setName('Beurre');
        $manager->persist($beurre);

        // Génération de 4 desserts
        for ($k = 0; $k < 4; $k++) {
            $dessertRecipe = new Recipe();
            $dessertRecipe->setName($faker->name);
            $dessertRecipe->setCategory($desserts);
            $dessertRecipe->setCookTime($faker->numberBetween(15, 180));
            $dessertRecipe->setLevel($faker->numberBetween(1, 5));
            $dessertRecipe->setInstructions($faker->realText(200));
            $dessertRecipe->setIsChecked(true);
            $manager->persist($dessertRecipe);
        }
        
        $manager->flush();
    }
}
