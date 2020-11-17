# Projet FredalyCook en symfony

## User stories & routes

| User story | Route | Controller | Method |
| ------ | ------ | ------ | ------ |
| En tant que **visiteur**, j'ai besoin d'**une page d'accueil** afin d'**accéder aux services de l'application** | `/` | `MainController` | `index` |
| En tant que **visiteur**, j'ai besoin d'**un formulaire de contact** afin de **pouvoir poser des questions aux administrateurs** | `/contact` | `MainController` | `contact` |
| En tant que **visiteur**, j'ai besoin d'**un champ de recherche** afin de **trouver les recettes correspondant à certains critères** | `/search` | `MainController` | `search` |
| En tant que **visiteur**, j'ai besoin de **voir la liste des recettes disponible** afin d'**en cuisiner une** | `/recipes` | `RecipesController` | `index` |
| En tant que **visiteur**, j'ai besoin d'**une fiche technique** afin d'**en savoir plus sur un recette qui m'intéresse**. | `/recipes/:id` | `RecipesController` | `show` |
| En tant que **visiteur**, j'ai besoin d'**un formulaire d'inscription** afin de **créer un compte** | `/signup` | `SecurityContoller` | `signup` |
| En tant que **visiteur**, j'ai besoin d'**un formulaire d'authentification** afin d'**accéder à mon compte** | `/login` | `SecurityController` | `login` |
| En tant que **membre inscrit**, j'ai besoin d'**un bouton de déconnexion** afin de **refermer mon compte** | `/logout` | `SecurityController` | `logout` |
| En tant que **membre inscrit**, j'ai besoin d'**une page de profil** afin de **mettre à jour mes informations**  | `/account` | `AccountController` | `index` |
| En tant que **membre inscrit**, j'ai besoin d'**une liste des recettes que j'ai créé** afin d'**avoir accès à la modification de mes recettes** | `/account/recipes` | `AccountController` | `myRecipes`|
| En tant que **membre inscrit**, j'ai besoin d'**un formulaire de modif des recettes que j'ai créé** afin de **les modifier** | `/account/recipes/:id/update` | `AccountController` | `editMyRecipe`|
| En tant que **membre inscrit**, j'ai besoin d'**un formulaire de création de recette** afin d'**ajouter de créer des recettes**| `/recipes/new` | `RecipesController` | `new` |
| En tant que **membre inscrit**, j'ai besoin d'**un formulaire de commentaire sur la fiche tech d'une recette** afin de **partager mon avis si précieux** | `/recipes/:id/comment` | `RecipesController` | `comment` |
| En tant que **membre inscrit**, j'ai besoin d'**un formulaire sur la fiche tech d'une recette** afin de **noter la recette** | `/recipes/:id/rate` | `RecipesController` | `rate` |
| En tant que **Mr Etchebest**, j'ai besoin d'**un bouton certifier** afin d'**approuver la recette** | `/recipes/:id/approved` | `RecipesController` | `checkRecipe` |
| En tant qu'**admin**, j'ai besoin d'**une liste de toutes les recettes** afin d'**avoir accès aux fonctionnalités de modif des recettes** | `/admin/recipes`| `Admin\RecipesController`|`recipes`|
| En tant qu'**admin**, j'ai besoin d'**un formulaire d'ajout de recettes** afin d'**ajouter des nouvelles recettes** | `/admin/recipes/new`| `Admin\RecipesController` | `new` |
| En tant qu'**admin**, j'ai besoin d'**un formulaire de modifications de recettes** afin de **modifier des recettes existantes** | `/admin/recipes/:id/update`| `Admin\RecipesController` | `update` |
| En tant qu'**admin**, j'ai besoin d'**un bouton de suppression pour chaque recette** afin de **supprimer cette recette** | `/admin/recipes/:id/delete`| `Admin\RecipesController` | `delete` |
| En tant qu'**admin**, j'ai besoin d'**une liste de tous les users** afin d'**avoir accès aux fonctionnalités de modif des users** | `/admin/users` | `Admin\UsersController` | `users` |
| En tant qu'**admin**, j'ai besoin d'**un formulaire d'ajout d'utilisateurs'** afin d'**ajouter des nouveaux utilisateurs** | `/admin/users/new`| `Admin\UsersController` | `new` |
| En tant qu'**admin**, j'ai besoin d'**un formulaire de modifications d'utilisateurs** afin de **modifier des utilisateurs existants** | `/admin/users/:id/update`| `Admin\UsersController` | `update` |
| En tant qu'**admin**, j'ai besoin d'**un bouton de suppression pour chaque utilisateur** afin de **supprimer cette utilisateur** | `/admin/users/:id/delete`| `Admin\UsersController` | `delete` |
| En tant qu'**admin**, j'ai besoin d'**une liste de tous les ingrédients** afin d'**avoir accès aux fonctionnalités de modif des ingrédients**| `/admin/ingredients` | `Admin\IngredientsController` | `ingredients` |
| En tant qu'**admin**, j'ai besoin d'**un formulaire d'ajout d'ingrédients** afin d'**ajouter des nouveaux ingredients** | `/admin/ingredients/new`| `Admin\IngredientsController` | `new` |
| En tant qu'**admin**, j'ai besoin d'**un formulaire de modifications d'ingrédients** afin de **modifier des ingrédients existants** | `/admin/ingredients/:id/update`| `Admin\IngredientsController` | `update` |
| En tant qu'**admin**, j'ai besoin d'**un bouton de suppression pour chaque ingrédient** afin de **supprimer cet ingrédient** | `/admin/ingredients/:id/delete`| `Admin\IngredientsController` | `delete` |
| En tant qu'**admin**, j'ai besoin d'**une liste de toutes les catégories** afin d'**avoir accès aux fonctionnalités de modif des catégories**| `/admin/categories` | `Admin\CategoriesController` | `categories` |
| En tant qu'**admin**, j'ai besoin d'**un formulaire d'ajout de catégories** afin d'**ajouter des nouvelles ca"égories** | `/admin/categories/new`| `Admin\CategoriesController` | `new` |
| En tant qu'**admin**, j'ai besoin d'**un formulaire de modifications de catégories** afin de **modifier des catégories existantes** | `/admin/categories/:id/update`| `Admin\CategoriesController` | `update` |
| En tant qu'**admin**, j'ai besoin d'**un bouton de suppression pour chaque catégorie** afin de **supprimer cette catégorie** | `/admin/categories/:id/delete`| `Admin\CategoriesController` | `delete` |


