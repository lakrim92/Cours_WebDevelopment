---
layout: default
title: PHP Avancé
---

# Support de cours : PHP Avancé

<div style="text-align: center;">
    <img src="../img/php200.png" alt="Logo PHP">
</div>

Bienvenue dans le cours **PHP Avancé** !

Ce cours s’adresse aux apprenants ayant suivi Introduction à PHP ou possédant des bases solides (variables, fonctions, formulaires, MySQL, sessions). Vous apprendrez des techniques modernes : **architecture MVC, ORM avec Eloquent (Laravel), sécurité (XSS, CSRF), API REST**, et **outils (Composer, PHPUnit**). À travers des exercices complexes et un projet en groupe (application de gestion d’utilisateurs), vous serez prêt à développer des applications backend robustes et sécurisées.

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

# 🧠 Comprendre l’Architecture MVC (Model-View-Controller)

L’architecture **MVC** est une manière d’organiser le code d’une application web pour le rendre **plus clair, structuré et maintenable**.

Elle se compose de **trois couches** principales :

| Composant  | Rôle | Exemple Laravel |
|------------|------|-----------------|
| **Model**  | Gère les **données** (accès à la base, logique métier) | `app/Models/User.php` |
| **View**   | Affiche l’**interface utilisateur** (HTML + données dynamiques) | `resources/views/users/index.blade.php` |
| **Controller** | Gère les **actions de l’utilisateur** et **relie** Model + View | `app/Http/Controllers/UserController.php` |

---

## 🔁 Comment fonctionne MVC ?

1. **L’utilisateur** accède à une URL (ex : `/users`).
2. **Le routeur** appelle la méthode correspondante dans un **contrôleur**.
3. Le **contrôleur** :
   - récupère les données via le **modèle** (ex : `User::all()`),
   - les transmet à une **vue** (ex : `users.index`).
4. La **vue** affiche les données à l’écran.

---

## 🚀 Mise en pratique avec Laravel

### 1. Création du projet

```bash
composer create-project laravel/laravel user-management
cd user-management
php artisan serve
```

> Cela crée la structure du projet Laravel, et lance un serveur local sur http://localhost:8000.

---

### 2. Générer le modèle, le contrôleur et la migration :

```bash
php artisan make:model User -mcr
```

- `User` est le nom du **modèle**.
- `-m` : crée une **migration** (structure de la table `users`).
- `-c` : crée un **contrôleur**.
- `-r` : le contrôleur sera **RESTful** (avec les méthodes `index`, `create`, `store`, etc.)

---

### 3. Exemple de Contrôleur  

📄 `app/Http/Controllers/UserController.php`

```php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Appel au Model
        return view('users.index', compact('users')); // Transmission à la View
    }
}
```

---

### 4. Exemple de Vue  

📄 `resources/views/users/index.blade.php`

```blade
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <ul>
        @foreach ($users as $user)
            <li>{% raw %}{{ $user->name }}{% endraw %}</li>
        @endforeach
    </ul>
</body>
</html>
```

---

### 5. Ajouter une route dans `routes/web.php`

```php
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
```

> En accédant à `http://localhost:8000/users`, Laravel appelle `UserController@index` qui récupère les utilisateurs et les envoie à la vue `users.index`.

---

## 📌 Résumé pédagogique

| Élément | Emplacement | Fonction |
|--------|-------------|----------|
| Model  | `app/Models/User.php` | Représente la table `users`, interagit avec la base |
| View   | `resources/views/users/index.blade.php` | Affiche les utilisateurs |
| Controller | `app/Http/Controllers/UserController.php` | Coordonne l’affichage et les données |

___

## 🧩 Eloquent ORM

**Eloquent** est l’ORM (Object Relational Mapper) intégré de Laravel.  
Il permet de manipuler les données de la base **en utilisant des objets PHP**, sans écrire de requêtes SQL brutes.

---

### 🛠 Exemple : Définir un modèle

📄 `app/Models/User.php`

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Champs autorisés à l’insertion/mise à jour en masse
    protected $fillable = ['name', 'email'];
}
```

> `fillable` empêche les failles de type "Mass Assignment" en ne permettant que certains champs à être remplis lors d’un enregistrement ou d’une mise à jour.

---

### 🔍 Récupérer des utilisateurs avec Eloquent

```php
$users = User::where('name', 'like', '%John%')->get();
```

> Cela renvoie tous les utilisateurs dont le nom contient "John".

---

### 📘 Autres exemples utiles

#### 🔹 Créer un utilisateur

```php
User::create([
    'name' => 'Jean Dupont',
    'email' => 'jean@example.com',
]);
```

#### 🔹 Trouver un utilisateur par ID

```php
$user = User::find(1);
```

#### 🔹 Mettre à jour un utilisateur

```php
$user = User::find(1);
$user->update(['name' => 'Jean Modifié']);
```

#### 🔹 Supprimer un utilisateur

```php
$user = User::find(1);
$user->delete();
```

---

## 🧠 Résumé pédagogique

| Action             | Code Eloquent                                      | Equivalent SQL                      |
|--------------------|----------------------------------------------------|-------------------------------------|
| Lire tous les users | `User::all()`                                      | `SELECT * FROM users;`              |
| Lire avec filtre   | `User::where('name', 'like', '%John%')->get()`     | `SELECT * FROM users WHERE name LIKE '%John%';` |
| Créer              | `User::create([...])`                               | `INSERT INTO users (...) VALUES (...);` |
| Modifier           | `$user->update([...])`                              | `UPDATE users SET ... WHERE id = ...;` |
| Supprimer          | `$user->delete()`                                   | `DELETE FROM users WHERE id = ...;` |

> ✨ Avec Eloquent, on travaille **directement avec des objets** plutôt qu'avec des lignes SQL, ce qui rend le code plus lisible, réutilisable et sûr.

## Exercices :

**À vous de jouer** [Exercices]({{ site.baseurl }}/php/exercises/exercices-advanced1.1.html)

___

## 🛡️ Partie 2 : Sécurité et validation

### 🔒 Sécurité dans Laravel

Laravel propose plusieurs mécanismes intégrés pour protéger votre application web :

| Type d'attaque | Protection dans Laravel | Explication |
|----------------|--------------------------|-------------|
| **XSS** (Cross-Site Scripting) | `{% raw %}{{ $variable }}{% endraw %}` | Échappe automatiquement le HTML pour éviter l’injection de scripts |
| **CSRF** (Cross-Site Request Forgery) | `@csrf` | Génère un token CSRF dans les formulaires pour bloquer les requêtes non autorisées |
| **Injection SQL** | Eloquent ORM ou Query Builder | Utilise des requêtes préparées automatiquement |

---

### ✅ Exemple de formulaire sécurisé

```blade
<form method="POST" action="/users">
    @csrf
    <input type="text" name="name" required>
    <input type="email" name="email" required>
    <button type="submit">Ajouter</button>
</form>
```

> Ce formulaire est sécurisé contre les attaques CSRF et XSS grâce aux protections automatiques de Laravel.

---

## ✅ Validation

Laravel permet de **valider les données côté serveur** très facilement via la méthode `validate()` sur l’objet `Request`.

---

### 📄 Exemple de validation dans un contrôleur

```php
// app/Http/Controllers/UserController.php

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
    ]);

    User::create($validated);

    return redirect('/users');
}
```

> Si la validation échoue, Laravel **redirige automatiquement** vers le formulaire avec les **messages d’erreurs** prêts à afficher.

---

### 📌 Règles de validation courantes

| Règle           | Signification                            |
|-----------------|-------------------------------------------|
| `required`      | Le champ est obligatoire                  |
| `string`        | Le champ doit être une chaîne de caractères |
| `email`         | Doit être un email valide                 |
| `unique:table,column` | Doit être unique dans la table        |
| `max:255`       | Longueur maximale de 255 caractères       |

---

### 🎯 Exercice 2.1 : Formulaire sécurisé

Créez un formulaire d’ajout d’utilisateur avec :

- Un champ `name` obligatoire.
- Un champ `email` obligatoire, valide, et unique.
- Protection CSRF.
- Validation dans le contrôleur.
- Affichage des erreurs dans la vue si la validation échoue.

```blade
<!-- resources/views/users/create.blade.php -->
<form method="POST" action="/users">
    @csrf

    <label>Nom</label>
    <input type="text" name="name" value="{% raw %}{{ old('name') }}{% endraw %}">
    @error('name')
        <div>{% raw %}{{ $message }}{% endraw %}</div>
    @enderror

    <label>Email</label>
    <input type="email" name="email" value="{% raw %}{{ old('email') }}{% endraw %}">
    @error('email')
        <div>{% raw %}{{ $message }}{% endraw %}</div>
    @enderror

    <button type="submit">Enregistrer</button>
</form>
```

---

> 💡 Utilisez `old('field')` pour **préremplir les champs** après une validation échouée, et `@error('field')` pour afficher les messages d’erreurs.

---

## 🧩 Partie 2.2 : Gestion des erreurs et messages flash

Après validation, il est important de **guider l’utilisateur** à travers des messages clairs en cas d’erreur ou de succès.

---

### 🛑 Affichage des erreurs de validation

Laravel redirige automatiquement avec les **erreurs dans la variable globale `$errors`**.

```blade
<!-- Exemple d'affichage global en haut du formulaire -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{% raw %}{{ $error }}{% endraw %}</li>
            @endforeach
        </ul>
    </div>
@endif
```

---

### ✅ Messages flash de succès

Laravel permet d’**envoyer un message flash** à la session après une action réussie (ex. : ajout d’un utilisateur).

#### Dans le contrôleur :
```php
return redirect('/users')->with('success', 'Utilisateur ajouté avec succès.');
```

#### Dans la vue (ex. `users/index.blade.php`) :
```blade
@if (session('success'))
    <div class="alert alert-success">
        {% raw %}{{ session('success') }}{% endraw %}
    </div>
@endif
```

---

### 💡 Bonnes pratiques

| Élément                      | Pourquoi ?                                       |
|-----------------------------|--------------------------------------------------|
| `@error('field')`           | Afficher l’erreur près du champ concerné        |
| `old('field')`              | Ne pas perdre les données déjà remplies         |
| `session('success')`        | Informer l’utilisateur après une action réussie |
| `session('error')` (option) | Afficher un message d’échec général             |

---

### 📌 Exemple complet avec messages

```blade
<!-- Formulaire avec messages globaux -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{% raw %}{{ $error }}{% endraw %}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {% raw %}{{ session('success') }}{% endraw %}
    </div>
@endif

<form method="POST" action="/users">
    @csrf

    <label>Nom</label>
    <input type="text" name="name" value="{% raw %}{{ old('name') }}{% endraw %}">
    @error('name')
        <div>{% raw %}{{ $message }}{% endraw %}</div>
    @enderror

    <label>Email</label>
    <input type="email" name="email" value="{% raw %}{{ old('email') }}{% endraw %}">
    @error('email')
        <div>{% raw %}{{ $message }}{% endraw %}</div>
    @enderror

    <button type="submit">Ajouter</button>
</form>
```

---

> 🧠 Astuce : Tu peux styliser ces messages avec Tailwind (`bg-red-100`, `text-green-600`) ou Bootstrap (`alert alert-danger`, `alert-success`) selon ton framework CSS.

## 🔐 Partie 2.3 : Authentification avec Laravel Breeze

Laravel propose plusieurs solutions d’authentification clé en main. La plus simple pour démarrer est **Laravel Breeze**.

---

### 🚀 Installation de Breeze

Installe le package via Composer :

```bash
composer require laravel/breeze --dev
```

Génère les fichiers nécessaires :

```bash
php artisan breeze:install
```

Installe les dépendances front-end et compile :

```bash
npm install && npm run dev
```

Lance la migration pour créer les tables des utilisateurs :

```bash
php artisan migrate
```

---

### 🧪 Ce que Breeze installe pour toi

- Routes d’authentification (`/login`, `/register`, `/logout`, etc.)
- Contrôleurs pour gérer l’authentification
- Vues Blade (ou Inertia/Vue selon l’option choisie)
- Middleware `auth` pour sécuriser les routes

---

### 🧭 Exemple d’utilisation

#### Protéger une route avec l’authentification :

```php
// routes/web.php

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);
```

#### Rediriger l’utilisateur connecté :

```php
use Illuminate\Support\Facades\Auth;

if (Auth::check()) {
    return redirect('/dashboard');
}
```

---

### 🧩 Exemple : Afficher le nom de l'utilisateur connecté

```blade
<!-- resources/views/dashboard.blade.php -->

<h1>Bienvenue {% raw %}{{ Auth::user()->name }}{% endraw %} !</h1>
<a href="{% raw %}{{ route('logout') }}{% endraw %}">Se déconnecter</a>
```

---

### ✨ Bonus : Liens utiles

- Laravel Breeze : [laravel.com/docs/breeze](https://laravel.com/docs/breeze)
- Authentification avancée : Laravel Jetstream ou Laravel Fortify

---

> ✅ Laravel Breeze est idéal pour les projets simples ou pour apprendre l’authentification dans Laravel.

## 🛡️ Partie 2.4 : Gestion des rôles et permissions avec Laravel

Pour gérer les rôles (ex. : admin, utilisateur) et les permissions, il est recommandé d’utiliser un package comme **Spatie Laravel Permission**.

---

### 🚀 Installation du package

```bash
composer require spatie/laravel-permission
```

Publie la configuration et les migrations :

```bash
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
php artisan migrate
```

---

### 🔧 Configuration du modèle User

Modifie ton modèle `User` pour utiliser le trait fourni par Spatie :

```php
// app/Models/User.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;

    // autres propriétés et méthodes
}
```

---

### ⚙️ Création des rôles et assignation

Tu peux créer des rôles et permissions dans un Seeder ou via un script :

```php
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// Création de rôles
$adminRole = Role::create(['name' => 'admin']);
$userRole = Role::create(['name' => 'user']);

// Création de permissions
$editArticles = Permission::create(['name' => 'edit articles']);
$deleteArticles = Permission::create(['name' => 'delete articles']);

// Assignation de permissions à un rôle
$adminRole->givePermissionTo($editArticles);
$adminRole->givePermissionTo($deleteArticles);

// Assignation d’un rôle à un utilisateur
$user = User::find(1);
$user->assignRole('admin');
```

---

### 🔐 Protection des routes selon rôle/permission

Tu peux protéger les routes ainsi :

```php
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});

Route::group(['middleware' => ['permission:edit articles']], function () {
    Route::get('/articles/edit', 'ArticleController@edit');
});
```

---

### 👀 Vérifications dans les vues Blade

```blade
@role('admin')
    <p>Contenu réservé aux administrateurs</p>
@endrole

@can('edit articles')
    <button>Modifier un article</button>
@endcan
```

---

### 📚 Documentation officielle

- [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission/v5/introduction)
- [Middleware Laravel](https://laravel.com/docs/middleware)
- [Blade Directives](https://laravel.com/docs/blade#roles-and-permissions)

---

> ✅ Cette méthode est robuste et largement utilisée dans la communauté Laravel pour gérer les autorisations avancées.

## Exercice 2.5 

**À vous de jouer** [Exercices]({{ site.baseurl }}/php/exercises/exercices-advanced2.1.html)

___

# Partie 3 : API REST et tests avec PHPUnit

## Qu’est-ce qu’une API ?

**API** signifie *Application Programming Interface* (Interface de Programmation Applicative).  
C’est un ensemble de règles qui permet à des applications différentes de communiquer entre elles.

- Imagine une API comme un **serveur** qui reçoit des requêtes (demandes) et renvoie des réponses.  
- Par exemple, une application mobile météo demande la météo à un serveur via une API, et reçoit les données en retour.

### Pourquoi utiliser une API ?

- **Séparation des responsabilités** : Le backend (serveur) gère les données, le frontend (interface utilisateur) affiche ces données.  
- **Interopérabilité** : Différents clients (applications web, mobiles, autres serveurs) peuvent utiliser la même API.  
- **Flexibilité** : Le backend peut évoluer indépendamment de l’interface utilisateur.

---

## Les API REST

**REST** (Representational State Transfer) est un style d’architecture pour construire des API.  

Les principes clés de REST sont :

- Utiliser les **méthodes HTTP** pour indiquer l’action à faire :  
    - `GET` : récupérer des données  
    - `POST` : créer des données  
    - `PUT` / `PATCH` : modifier des données  
    - `DELETE` : supprimer des données  

- Avoir des **URL claires** représentant les ressources, par exemple `/users` pour accéder aux utilisateurs.  
- Utiliser le format **JSON** pour échanger les données, car il est léger et facile à lire.

---

## Exemple : créer une API REST avec Laravel

### 1. Définir les routes API

Dans Laravel, les routes pour l’API sont définies dans `routes/api.php`.  
Exemple :

```php
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']); // Liste tous les utilisateurs
Route::post('/users', [UserController::class, 'store']); // Crée un nouvel utilisateur
```
### 2. Contrôleur pour gérer les requêtes

Dans `app/Http/Controllers/UserController.php`, on écrit les fonctions pour répondre à ces requêtes :

```php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Retourne tous les utilisateurs en JSON
    public function index(): JsonResponse
    {
        return response()->json(User::all());
    }

    // Crée un nouvel utilisateur avec les données reçues
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        $user = User::create($validated);

        return response()->json($user, 201); // Code 201 = créé
    }
}
```

### Tester l'API

Vous pouvez tester votre API avec :
- Postman : un outil graphique pour envoyer des requêtes HTTP
- curl (ligne de commande) :

```bash
curl http://localhost:8000/api/users
```

Cette commande envoie une requête GET pour récupérer la liste des utilisateurs.

### Résumé

- Une API REST permet à différentes applications d’échanger des données via des requêtes HTTP.
- Laravel facilite la création d’API avec des routes, contrôleurs et modèles.
- Les données sont souvent échangées en JSON.
- Tester avec Postman ou curl est essentiel pour vérifier que l’API fonctionne bien.

### Bonus : Pourquoi sécuriser une API ?

Une API ouverte sans protection peut être utilisée abusivement.
Laravel propose des mécanismes comme :
- Authentification (ex : tokens JWT, OAuth)
- Validation des données pour éviter les erreurs ou injections malveillantes

## Exercice 3.1  

**À vous de jouer** [Exercices]({{ site.baseurl }}/php/exercises/exercices-advanced3.1.html)

---

# Partie 4 : Tests automatisés avec PHPUnit

## Pourquoi tester une API ?

- **Assurer la qualité** : Vérifier que l’API fonctionne correctement et retourne les bonnes données.  
- **Éviter les régressions** : Si tu modifies le code, les tests te disent si quelque chose casse.  
- **Faciliter le développement** : Tests automatisés = gain de temps, plus besoin de tester manuellement.

---

## PHPUnit dans Laravel

Laravel utilise **PHPUnit**, un framework de test pour PHP, intégré et configuré par défaut.

### Où écrire les tests ?

- Dans le dossier `tests/Feature` pour tester des fonctionnalités (ex : routes, API)  
- Dans le dossier `tests/Unit` pour tester des unités de code plus petites (ex : méthodes, classes)

---

## Exemple : Tester l’API users

Crée un fichier `tests/Feature/UserTest.php` :

```php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase; // Rafraîchit la base de données pour chaque test

    public function test_can_list_users(): void
    {
        // Crée 3 utilisateurs en base de données
        User::factory()->count(3)->create();

        // Envoie une requête GET à l’API users
        $response = $this->get('/api/users');

        // Vérifie que la réponse HTTP est 200 (OK)
        $response->assertStatus(200)
                // Vérifie qu’il y a bien 3 éléments dans la réponse JSON
                ->assertJsonCount(3);
    }
}
```

### Explications

- `use RefreshDatabase` : Laravel vide la base de données avant chaque test pour un environnement propre.
- `User::factory()->count(3)->create()` : crée 3 utilisateurs fictifs avec les données par défaut.
- `$this->get('/api/users')` : simule une requête HTTP GET vers `/api/users`.
- `assertStatus(200)` : vérifie que la requête a réussi (code 200).
- `assertJsonCount(3)` : vérifie que la réponse JSON contient exactement 3 éléments.

### Configurer la base de données pour les tests

1. Crée une base SQLite pour les tests (fichier `database/database.sqlite`) :

```bash
touch database/database.sqlite
```
2. Dans le fichier `.env.testing` (ou `.env` si tu testes directement), configure la base de données :

```env
DB_CONNECTION=sqlite
DB_DATABASE=/full/path/to/database/database.sqlite
```

### Lancer les test

Pour exécuter tous les tests, lance la commande :

```bash
php artisan test
```

Ou directement PHPUnit:

```bash
vendor/bin/phpunit
```

Laravel affichera un rapport des tests passés ou échoués.

### Pourquoi écrire des tests ?

- Tu gagnes en confiance lors des modifications
- Tu détectes rapidement les bugs
- Tu peux automatiser ces tests dans un système d’intégration continue (CI/CD)

## Exercice 4.1

**À vous de jouer** [Exercices]({{ site.baseurl }}/php/exercises/exercices-advanced4.1.html)

___

# Partie 5 : Projet en groupe – Application de gestion d’utilisateurs

**Cliquez sur le lien** : [Projet]({{ site.baseurl }}/php/exercises/project-advanced.html)

---

[retour]({{ site.baseurl }}/index.html)
