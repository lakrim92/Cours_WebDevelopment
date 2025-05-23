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

___

# Partie 1 : Architecture MVC et Eloquent

## Architecture MVC

**MVC** (Model-View-Controller) organise le code :
- Model : Gère les données (base de données). 
- View : Affiche l’interface utilisateur. 
- Controller : Gère la logique et les requêtes. 

Exemple avec Laravel :

### 1. Créez un projet :

```bash
composer create-project laravel/laravel user-management cd user-management php artisan serve
```

### 2. Créez un modèle et un contrôleur :

```bash
php artisan make:model User -mcr
```

- -m : Crée une migration. 
- -c : Crée un contrôleur. 
- -r : Rend le contrôleur RESTful.

### 3. Exemple de contrôleur (app/Http/Controllers/UserController.php) :

```php
namespace App\Http\Controllers; use App\Models\User; use Illuminate\Http\Request; class UserController extends Controller { public function index() { $users = User::all(); return view('users.index', compact('users')); } }
```

### 4. Exemple de vue (resources/views/users/index.blade.php) : 

```html
<!DOCTYPE html> <html lang="fr"> <head> <meta charset="UTF-8"> <title>Utilisateurs</title> </head> <body> <h1>Liste des utilisateurs</h1> <ul> @foreach ($users as $user) <li>{{ $user->name }}</li> @endforeach </ul> </body> </html>
```

## Eloquent ORM

**Eloquent** simplifie les interactions avec la base de données. Exemple :

```php
// app/Models/User.php namespace App\Models; use Illuminate\Database\Eloquent\Model; class User extends Model { protected $fillable = ['name', 'email']; } // Récupérer des utilisateurs $users = User::where('name', 'like', '%John%')->get();
```

### Exercice 1.1 : Liste d’utilisateurs avec MVC

À vous de jouer [Exercices](./php/exercises/exercices-advanced1.1.md)

___

# Partie 2 : Sécurité et validation

## Sécurité

Protégez votre application contre :
- ***XSS*** : Utilisez la syntaxe Blade {{ $variable }} pour échapper les sorties. 
- ***CSRF*** : Laravel inclut un token CSRF par défaut dans les formulaires (@csrf). 
- ***Injection SQL*** : Utilisez Eloquent ou des requêtes préparées. 

Exemple de formulaire sécurisé :

```html
<form method="POST" action="/users"> @csrf <input type="text" name="name" required> <input type="email" name="email" required> <button type="submit">Ajouter</button> </form>
```

## Validation

Validez les entrées avec Laravel :

```php
// app/Http/Controllers/UserController.php public function store(Request $request) { $validated = $request->validate([ 'name' => 'required|string|max:255', 'email' => 'required|email|unique:users,email', ]); User::create($validated); return redirect('/users'); }
```

### Exercice 2.1 : Formulaire sécurisé

À vous de jouer [Exercices](./php/exercises/exercices-advanced2.1.md)

___

# Partie 3 : API REST et tests avec PHPUnit

## API REST

Créez une API REST avec Laravel :
1. Créez une route API (routes/api.php) :

```php
use App\Http\Controllers\UserController; Route::get('/users', [UserController::class, 'index']); Route::post('/users', [UserController::class, 'store']);
```

2. Exemple de réponse JSON :

```php
// app/Http/Controllers/UserController.php public function index() { return response()->json(User::all()); }
```

Testez avec un outil comme Postman ou curl :

```bash
curl http://localhost:8000/api/users
```

### Tests avec PHPUnit

Laravel utilise **PHPUnit** pour les tests. Exemple :

```php
// tests/Feature/UserTest.php namespace Tests\Feature; use Illuminate\Foundation\Testing\RefreshDatabase; use Tests\TestCase; use App\Models\User; class UserTest extends TestCase { use RefreshDatabase; public function test_can_list_users() { User::factory()->count(3)->create(); $response = $this->get('/api/users'); $response->assertStatus(200) ->assertJsonCount(3); } }
```

Configurer les tests :
1. Créez une base de données de test (ex. : database/database.sqlite). 
2. Mettez à jour .env :

```text
DB_CONNECTION=sqlite DB_DATABASE=database/database.sqlite
```

3. Exécutez :

```bash
php artisan test
```

### Exercice 3.1 : API et tests

À vous de jouer [Exercices](./php/exercises/exercices-advanced3.1.md)

___

# Partie 4 : Projet en groupe – Application de gestion d’utilisateurs

**Cliquez sur le lien** : [Projet](./php/exercises/project-advanced.md)

---

[retour](./index.md)
