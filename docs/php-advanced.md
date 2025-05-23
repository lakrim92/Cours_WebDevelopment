# Support de cours : PHP Avancé

Bienvenue dans le cours **PHP Avancé** ! Ce cours s’adresse aux apprenants ayant suivi Introduction à PHP ou possédant des bases solides (variables, fonctions, formulaires, MySQL, sessions). Vous apprendrez des techniques modernes : **architecture MVC, ORM avec Eloquent (Laravel), sécurité (XSS, CSRF), API REST**, et **outils (Composer, PHPUnit**). À travers des exercices complexes et un projet en groupe (application de gestion d’utilisateurs), vous serez prêt à développer des applications backend robustes et sécurisées.

### Objectifs du cours

- Maîtriser l’**architecture MVC** avec Laravel. 
- Utiliser **Eloquent** pour interagir avec une base de données. 
- Implémenter des pratiques de **sécurité** (validation, protection XSS/CSRF). 
- Développer une **API REST** avec Laravel. 
- Configurer des **outils** comme Composer et PHPUnit pour tests unitaires. 
- Développer un projet en groupe : une application de gestion d’utilisateurs. 

### Prérequis
- **Connaissances** : 
    - Maîtrise de PHP (voir Introduction à PHP). 
    - Familiarité avec MySQL, formulaires, sessions, et GET/POST. 
    - Notions de base sur HTML/CSS/JS (voir Introduction à HTML, CSS et JavaScript). 
- Outils : 
    - [Visual Studio Code]() avec extensions PHP, Laravel. 
    - [PHP]() (version 8.1+ recommandée). 
    - [Composer]() pour gérer les dépendances. 
    - [MySQL]() ou [MariaDB](). 
    - [Laravel]() (installé via Composer). 
    - Navigateur moderne (Chrome, Firefox) avec outils de développement. 
    - Compte GitHub pour soumettre vos travaux (voir Introduction à GitHub). 
- Temps estimé : 12-15 heures (lectures, exercices, projet). 

### Structure du cours
**Partie 1 : Architecture MVC et Eloquent**

**Partie 2 : Sécurité et validation**

**Partie 3 : API REST et tests avec PHPUnit**

**Partie 4 : Projet en groupe – Application de gestion d’utilisateurs** 

# Partie 1 : Architecture MVC et Eloquent

___

## Architecture MVC

**MVC** (Model-View-Controller) organise le code :
- Model : Gère les données (base de données). 
- View : Affiche l’interface utilisateur. 
- Controller : Gère la logique et les requêtes. 

Exemple avec Laravel :

1. Créez un projet :

```bash
composer create-project laravel/laravel user-management cd user-management php artisan serve
```

2. Créez un modèle et un contrôleur :

```bash
php artisan make:model User -mcr
```

◦ -m : Crée une migration. 
◦ -c : Crée un contrôleur. 
◦ -r : Rend le contrôleur RESTful.

3. Exemple de contrôleur (app/Http/Controllers/UserController.php) :

```php
namespace App\Http\Controllers; use App\Models\User; use Illuminate\Http\Request; class UserController extends Controller { public function index() { $users = User::all(); return view('users.index', compact('users')); } }
```

4. Exemple de vue (resources/views/users/index.blade.php) : 
html
Copier
<!DOCTYPE html> <html lang="fr"> <head> <meta charset="UTF-8"> <title>Utilisateurs</title> </head> <body> <h1>Liste des utilisateurs</h1> <ul> @foreach ($users as $user) <li>{{ $user->name }}</li> @endforeach </ul> </body> </html>
Eloquent ORM
Eloquent simplifie les interactions avec la base de données. Exemple :
php
Copier
// app/Models/User.php namespace App\Models; use Illuminate\Database\Eloquent\Model; class User extends Model { protected $fillable = ['name', 'email']; } // Récupérer des utilisateurs $users = User::where('name', 'like', '%John%')->get();
Exercice 1.1 : Liste d’utilisateurs avec MVC
    1. Créez un projet Laravel. 
    2. Configurez une base de données MySQL et une migration pour la table users (colonnes : id, name, email). 
    3. Créez un contrôleur UserController et une vue pour afficher la liste des utilisateurs. 
    4. Utilisez Eloquent pour récupérer les utilisateurs depuis la base de données. 
Solution : Consultez l’exemple exercice1.1.

Partie 2 : Sécurité et validation
Sécurité
Protégez votre application contre :
    • XSS : Utilisez la syntaxe Blade {{ $variable }} pour échapper les sorties. 
    • CSRF : Laravel inclut un token CSRF par défaut dans les formulaires (@csrf). 
    • Injection SQL : Utilisez Eloquent ou des requêtes préparées. 
Exemple de formulaire sécurisé :
html
Copier
<form method="POST" action="/users"> @csrf <input type="text" name="name" required> <input type="email" name="email" required> <button type="submit">Ajouter</button> </form>
Validation
Validez les entrées avec Laravel :
php
Copier
// app/Http/Controllers/UserController.php public function store(Request $request) { $validated = $request->validate([ 'name' => 'required|string|max:255', 'email' => 'required|email|unique:users,email', ]); User::create($validated); return redirect('/users'); }
Exercice 2.1 : Formulaire sécurisé
    1. Reprenez le projet de l’exercice 1.1. 
    2. Ajoutez un formulaire pour créer un utilisateur avec validation (nom, email). 
    3. Protégez contre XSS et CSRF. 
    4. Affichez les erreurs de validation dans la vue. 
Solution : Consultez l’exemple exercice2.1.

Partie 3 : API REST et tests avec PHPUnit
API REST
Créez une API REST avec Laravel :
    1. Créez une route API (routes/api.php) : 
       php
       Copier
       use App\Http\Controllers\UserController; Route::get('/users', [UserController::class, 'index']); Route::post('/users', [UserController::class, 'store']);
    2. Exemple de réponse JSON : 
       php
       Copier
       // app/Http/Controllers/UserController.php public function index() { return response()->json(User::all()); }
Testez avec un outil comme Postman ou curl :
bash
Copier
curl http://localhost:8000/api/users
Tests avec PHPUnit
Laravel utilise PHPUnit pour les tests. Exemple :
php
Copier
// tests/Feature/UserTest.php namespace Tests\Feature; use Illuminate\Foundation\Testing\RefreshDatabase; use Tests\TestCase; use App\Models\User; class UserTest extends TestCase { use RefreshDatabase; public function test_can_list_users() { User::factory()->count(3)->create(); $response = $this->get('/api/users'); $response->assertStatus(200) ->assertJsonCount(3); } }
Configurer les tests :
    1. Créez une base de données de test (ex. : database/database.sqlite). 
    2. Mettez à jour .env : 
       text
       Copier
       DB_CONNECTION=sqlite DB_DATABASE=database/database.sqlite
    3. Exécutez : 
       bash
       Copier
       php artisan test
Exercice 3.1 : API et tests
    1. Reprenez le projet de l’exercice 2.1. 
    2. Créez une API REST pour lister et ajouter des utilisateurs. 
    3. Écrivez un test PHPUnit pour vérifier que l’API retourne la liste des utilisateurs. 
    4. Testez l’API avec Postman ou curl. 
Solution : Consultez l’exemple exercice3.1.

Partie 4 : Projet en groupe – Application de gestion d’utilisateurs
Objectif
Développez une application de gestion d’utilisateurs en groupe (2-4 élèves) avec :
    • Fonctionnalités : Inscription, connexion, gestion de profils (CRUD). 
    • Backend : Laravel avec MySQL. 
    • API : API REST pour lister et modifier les utilisateurs. 
    • Sécurité : Validation, protection XSS/CSRF, hachage des mots de passe. 
    • Tests : Tests unitaires et fonctionnels avec PHPUnit. 
Instructions
    1. Structure : 
        ◦ Créez un projet Laravel : 
          bash
          Copier
          composer create-project laravel/laravel user-management cd user-management php artisan serve
        ◦ Organisez le code : 
          text
          Copier
          user-management/ ├── app/ │ ├── Http/ │ │ ├── Controllers/ │ │ │ ├── UserController.php │ ├── Models/ │ │ ├── User.php ├── database/ │ ├── migrations/ ├── resources/ │ ├── views/ │ │ ├── users/ │ │ ├── auth/ ├── routes/ │ ├── web.php │ ├── api.php ├── tests/
    2. Fonctionnalités : 
        ◦ Inscription/Connexion : Utilisez Laravel Authentication (php artisan make:auth si Laravel <8, sinon Jetstream/Breeze). 
        ◦ Gestion des profils : CRUD pour les utilisateurs (nom, email). 
        ◦ API REST : Endpoints pour lister/modifier les utilisateurs. 
        ◦ Sécurité : Validation, CSRF, hachage des mots de passe. 
        ◦ Accessibilité : Formulaires accessibles (labels, ARIA). 
    3. Dépendances : 
       bash
       Copier
       composer require laravel/ui # Pour l’authentification (si nécessaire) composer require phpunit/phpunit --dev
    4. Base de données : 
        ◦ Configurez MySQL dans .env : 
          text
          Copier
          DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=user_management DB_USERNAME=root DB_PASSWORD=
        ◦ Migrez : 
          bash
          Copier
          php artisan migrate
    5. Dépôt GitHub : 
        ◦ Créez un dépôt (ex. : UserManagement-Equipe1). 
        ◦ Poussez votre code : 
          bash
          Copier
          git add . git commit -m "Projet User Management" git push origin main
        ◦ Partagez l’URL (ex. : https://github.com/votre-nom/UserManagement-Equipe1). 
    6. Test : 
        ◦ Lancez avec php artisan serve. 
        ◦ Exécutez les tests avec php artisan test. 
        ◦ Testez l’API avec Postman. 
Exemple de code
Consultez l’exemple dans projet.
Évaluation
    • Barème des exercices : Exercices PHP Avancé. 
    • Barème du projet : Projet User Management. 

Ressources supplémentaires
    • Laravel : 
        ◦ Laravel Docs 
        ◦ Laracasts : Tutoriels vidéo. 
    • PHP : 
        ◦ PHP Manual 
        ◦ PHP The Right Way 
    • Tests : 
        ◦ PHPUnit Docs 
        ◦ Laravel Testing 
    • Sécurité : 
        ◦ OWASP PHP 
        ◦ Laravel Security 
    • Outils : 
        ◦ Composer 
        ◦ Postman 
Soumettre vos travaux
    1. Exercices : 
        ◦ Créez un dépôt (ex. : PHP-Avance-VotreNom). 
        ◦ Ajoutez vos fichiers PHP, migrations, vues. 
        ◦ Poussez et partagez l’URL. 
    2. Projet : 
        ◦ Soumettez l’URL du dépôt de groupe. 
        ◦ Incluez un README.md expliquant l’installation (composer install, php artisan serve, configuration MySQL). 
Exemple de commande :
bash
Copier
git add . git commit -m "Exercices et projet User Management" git push origin main
Contact
Pour toute question :
    • Ouvrez une Issue. 
    • Contactez votre professeur via email ou votre plateforme de classe. 
Maîtrisez PHP avancé !

Étape 2 : Barèmes de notation
docs/grading/php-avance-exercises.md
markdown
Copier
# Barème de notation : Exercices PHP Avancé Les exercices 1.1, 2.1, et 3.1 du cours [PHP Avancé](./php-avance.md) sont notés sur **20 points** chacun. Voici les critères d’évaluation : ## Exercice 1.1 : Liste d’utilisateurs avec MVC (20 points) - **Architecture MVC** (6 points) : - 6 : Contrôleur, modèle, vue correctement implémentés. - 4 : Structure partielle ou buggée. - 0 : Structure absente. - **Eloquent** (6 points) : - 6 : Récupération des utilisateurs avec Eloquent. - 4 : Récupération partielle ou buggée. - 0 : Eloquent absent. - **Base de données** (5 points) : - 5 : Migration correcte, table `users` fonctionnelle. - 3 : Migration partielle ou buggée. - 0 : Migration absente. - **Clarté du code** (3 points) : - 3 : Code structuré, lisible. - 2 : Code fonctionnel mais désorganisé. - 0 : Code illisible ou non soumis. ## Exercice 2.1 : Formulaire sécurisé (20 points) - **Validation** (6 points) : - 6 : Validation complète (nom, email). - 4 : Validation partielle ou buggée. - 0 : Validation absente. - **Sécurité** (6 points) : - 6 : Protection XSS et CSRF implémentée. - 4 : Protection partielle. - 0 : Protection absente. - **Affichage des erreurs** (5 points) : - 5 : Erreurs affichées dans la vue. - 3 : Affichage partiel ou buggé. - 0 : Affichage absent. - **Clarté du code** (3 points) : - 3 : Code structuré, lisible. - 2 : Code fonctionnel mais désorganisé. - 0 : Code illisible ou non soumis. ## Exercice 3.1 : API et tests (20 points) - **API REST** (6 points) : - 6 : Endpoints pour lister/ajouter utilisateurs. - 4 : Endpoints partiels ou buggés. - 0 : Endpoints absents. - **Tests PHPUnit** (6 points) : - 6 : Test vérifie la liste des utilisateurs. - 4 : Test partiel ou buggé. - 0 : Test absent. - **Fonctionnalité** (5 points) : - 5 : API testée avec Postman/curl. - 3 : Test partiel. - 0 : Test absent. - **Clarté du code** (3 points) : - 3 : Code structuré, lisible. - 2 : Code fonctionnel mais désorganisé. - 0 : Code illisible ou non soumis. **Note totale** : La moyenne des trois exercices sera calculée pour une note sur 20.
docs/grading/php-avance-project.md
markdown
Copier
# Barème de notation : Projet User Management (PHP Avancé) Le projet en groupe **User Management** du cours [PHP Avancé](./php-avance.md) est noté sur **20 points**. Voici les critères d’évaluation : - **Inscription/Connexion** (5 points) : - 5 : Inscription et connexion fonctionnelles. - 3 : Fonctionnalités partielles ou buggées. - 0 : Fonctionnalités absentes. - **Gestion des profils** (5 points) : - 5 : CRUD complet pour les utilisateurs. - 3 : CRUD partiel ou buggé. - 0 : CRUD absent. - **API REST** (4 points) : - 4 : Endpoints pour lister/modifier utilisateurs. - 2 : Endpoints partiels. - 0 : Endpoints absents. - **Sécurité et tests** (3 points) : - 3 : Validation, XSS/CSRF, minimum 3 tests PHPUnit. - 2 : Sécurité/tests partiels. - 0 : Sécurité/tests absents. - **Clarté et organisation** (3 points) : - 3 : Code modulaire, README clair. - 2 : Code fonctionnel mais désorganisé. - 0 : Code illisible ou non soumis. **Instructions de soumission** : - Soumettez l’URL du dépôt GitHub (ex. : `https://github.com/votre-nom/UserManagement-Equipe1`). - Incluez un `README.md` expliquant l’installation (`composer install`, `php artisan serve`, MySQL). - Testez avec `php artisan serve` et Postman pour l’API.

Étape 3 : Structure du dossier php-avance/ pour les exemples
Dossier php-avance/ dans la racine du dépôt :
text
Copier
php-avance/ ├── exercises/ │ ├── partie1/ │ │ ├── exercice1.1/ │ │ │ ├── app/ │ │ │ │ ├── Http/ │ │ │ │ │ ├── Controllers/ │ │ │ │ │ │ ├── UserController.php │ │ │ │ ├── Models/ │ │ │ │ │ ├── User.php │ │ │ ├── database/ │ │ │ │ ├── migrations/ │ │ │ │ │ ├── 2023_01_01_000000_create_users_table.php │ │ │ ├── resources/ │ │ │ │ ├── views/ │ │ │ │ │ ├── users/ │ │ │ │ │ │ ├── index.blade.php │ │ │ ├── routes/ │ │ │ │ ├── web.php │ ├── partie2/ │ │ ├── exercice2.1/ │ │ │ ├── app/ │ │ │ ├── resources/ │ │ │ │ ├── views/ │ │ │ │ │ ├── users/ │ │ │ │ │ │ ├── create.blade.php │ ├── partie3/ │ │ ├── exercice3.1/ │ │ │ ├── routes/ │ │ │ │ ├── api.php │ │ │ ├── tests/ │ │ │ │ ├── Feature/ │ │ │ │ │ ├── UserTest.php ├── project/ │ ├── app/ │ │ ├── Http/ │ │ │ ├── Controllers/ │ │ │ │ ├── UserController.php │ │ ├── Models/ │ │ │ ├── User.php │ ├── database/ │ │ ├── migrations/ │ ├── resources/ │ │ ├── views/ │ │ │ ├── users/ │ │ │ ├── auth/ │ ├── routes/ │ │ ├── web.php │ │ ├── api.php │ ├── tests/
Exemple de code : php-avance/exercises/partie1/exercice1.1/app/Http/Controllers/UserController.php
php
Copier
namespace App\Http\Controllers; use App\Models\User; use Illuminate\Http\Request; class UserController extends Controller { public function index() { $users = User::all(); return view('users.index', compact('users')); } }
Exemple de code : php-avance/exercises/partie1/exercice1.1/resources/views/users/index.blade.php
html
Copier
<!DOCTYPE html> <html lang="fr"> <head> <meta charset="UTF-8"> <title>Utilisateurs</title> </head> <body> <h1>Liste des utilisateurs</h1> <ul> @foreach ($users as $user) <li>{{ $user->name }} ({{ $user->email }})</li> @endforeach </ul> </body> </html>
Exemple de code : php-avance/project/routes/api.php
php
Copier
use App\Http\Controllers\UserController; Route::get('/users', [UserController::class, 'index']); Route::post('/users', [UserController::class, 'store']);

Étape 4 : Instructions pour ajouter le cours au dépôt
    1. Créer le dossier php-avance/ : 
       bash
       Copier
       mkdir -p php-avance/exercises/partie1/exercice1.1/app/Http/Controllers php-avance/exercises/partie1/exercice1.1/app/Models php-avance/exercises/partie1/exercice1.1/database/migrations php-avance/exercises/partie1/exercice1.1/resources/views/users php-avance/exercises/partie2/exercice2.1/resources/views/users php-avance/exercises/partie3/exercice3.1/routes php-avance/exercises/partie3/exercice3.1/tests/Feature php-avance/project/app/Http/Controllers php-avance/project/app/Models php-avance/project/database/migrations php-avance/project/resources/views/users php-avance/project/resources/views/auth php-avance/project/routes php-avance/project/tests
    2. Créer les fichiers : 
        ◦ docs/php-avance.md : Copiez le contenu Markdown. 
        ◦ docs/grading/php-avance-exercises.md : Copiez le barème des exercices. 
        ◦ docs/grading/php-avance-project.md : Copiez le barème du projet. 
        ◦ php-avance/exercises/partie1/exercice1.1/app/Http/Controllers/UserController.php : Copiez l’exemple. 
        ◦ php-avance/exercises/partie1/exercice1.1/resources/views/users/index.blade.php : Copiez la vue. 
        ◦ php-avance/project/routes/api.php : Copiez les routes API. 
    3. Ajouter et pousser : 
       bash
       Copier
       git add docs/php-avance.md docs/grading/php-avance-exercises.md docs/grading/php-avance-project.md php-avance/ git commit -m "Ajout du cours PHP Avancé et exemples" git push origin main
    4. Mettre à jour docs/index.md : Ajoutez un lien : 
       markdown
       Copier
       - [PHP Avancé](./php-avance.md) : Développez des applications backend modernes avec Laravel, MVC, Eloquent, API REST, sécurité, et tests.
    5. Mettre à jour README.md : Ajoutez dans « Cours disponibles » : 
       markdown
       Copier
       11. **PHP Avancé** ([Lire sur GitHub Pages](./docs/php-avance.md)) Développez des applications backend avec Laravel, architecture MVC, Eloquent, API REST, sécurité, et tests PHPUnit. Inclut un projet en groupe (gestion d’utilisateurs).
    6. Vérifier sur GitHub Pages : 
        ◦ Assurez-vous que GitHub Pages est configuré (Settings > Pages > Source : main / docs). 
        ◦ Visitez https://lakrim.github.io/Cours_WebDevelopment/php-avance. 
        ◦ Vérifiez les liens (ex. : https://github.com/lakrim/Cours_WebDevelopment/blob/main/php-avance/exercises/partie1/exercice1.1/app/Http/Controllers/UserController.php).
