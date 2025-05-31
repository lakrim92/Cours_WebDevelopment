# Solutions : Exercice 1.1 - Liste d’utilisateurs avec MVC

## Fichiers :

```php
database/migrations/*_create_users_table.php :

Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamps();
});
``` 

```php
app/Models/User.php :

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email'];
}
```

```php
app/Http/Controllers/UserController.php :

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
```

```php
resources/views/users/index.blade.php :

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
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
</body>
</html>
```
```php
routes/web.php :

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);

```

## Commandes :

```bash
composer create-project laravel/laravel user-management
cd user-management
php artisan make:model User -mcr
php artisan migrate
php artisan serve
```

Solutions : Exercice 1.2 - Ajout d’un utilisateur avec Eloquent
Fichiers :

app/Http/Controllers/UserController.php (ajouts) :

public function create()
{
    return view('users.create');
}

public function store(Request $request)
{
    User::create($request->only(['name', 'email']));
    return redirect('/users');
}


resources/views/users/create.blade.php :

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <h1>Ajouter un utilisateur</h1>
    <form method="POST" action="/users">
        @csrf
        <label>Nom</label>
        <input type="text" name="name" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>


routes/web.php (ajouts) :

Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);


Solutions : Exercice 1.3 - Recherche d’utilisateurs avec Eloquent
Fichiers :

app/Http/Controllers/UserController.php (mise à jour index) :

public function index(Request $request)
{
    $search = $request->query('search');
    $users = $search
        ? User::where('name', 'like', '%' . $search . '%')->get()
        : User::all();
    return view('users.index', compact('users', 'search'));
}


resources/views/users/index.blade.php (mise à jour) :

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <form method="GET" action="/users">
        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Rechercher par nom">
        <button type="submit">Rechercher</button>
    </form>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
</body>
</html>


Solutions : Exercice 1.4 - Mise à jour et suppression d’utilisateurs
Fichiers :

app/Http/Controllers/UserController.php (ajouts) :

public function edit($id)
{
    $user = User::findOrFail($id);
    return view('users.edit', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->update($request->only(['name', 'email']));
    return redirect('/users');
}

public function destroy($id)
{
    User::findOrFail($id)->delete();
    return redirect('/users');
}


resources/views/users/edit.blade.php :

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un utilisateur</title>
</head>
<body>
    <h1>Modifier un utilisateur</h1>
    <form method="POST" action="/users/{{ $user->id }}">
        @csrf
        @method('PUT')
        <label>Nom</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
        <label>Email</label>
        <input type="email" name="email" value="{{ $user->email }}" required>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>


resources/views/users/index.blade.php (mise à jour) :

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <form method="GET" action="/users">
        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Rechercher par nom">
        <button type="submit">Rechercher</button>
    </form>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} ({{ $user->email }})
                <a href="/users/{{ $user->id }}/edit">Modifier</a>
                <form method="POST" action="/users/{{ $user->id }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>


routes/web.php (ajouts) :

Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Notes :

Exécutez php artisan migrate après chaque modification de migration.
Testez à http://localhost:8000/users.

