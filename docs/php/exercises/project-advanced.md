# Partie 4 : Projet en groupe – Application de gestion d’utilisateurs

### Objectif

Développez une **application de gestion d’utilisateurs** en groupe (2-4 élèves) avec :

- Fonctionnalités : Inscription, connexion, gestion de profils (CRUD). 
- Backend : Laravel avec MySQL. 
- API : API REST pour lister et modifier les utilisateurs. 
- Sécurité : Validation, protection XSS/CSRF, hachage des mots de passe. 
- Tests : Tests unitaires et fonctionnels avec PHPUnit. 

### Instructions
1. **Structure** : 
    - Créez un projet Laravel :

```bash
composer create-project laravel/laravel user-management cd user-management php artisan serve
```

    - Organisez le code :

```text
user-management/ 
├── app/ 
│   ├── Http/ 
│   │   ├── Controllers/ 
│   │   │   ├── UserController.php 
│   ├── Models/ 
│   │   ├── User.php 
├── database/ 
│   ├── migrations/ 
├── resources/ 
│   ├── views/ 
│   │   ├── users/ 
│   │   ├── auth/ 
├── routes/ 
│   ├── web.php 
│   ├── api.php 
├── tests/
```

2. **Fonctionnalités** :
    - **Inscription/Connexion** : Utilisez Laravel Authentication (`php artisan make:auth` si Laravel <8, sinon Jetstream/Breeze). 
    - **Gestion des profils** : CRUD pour les utilisateurs (nom, email). 
    - **API REST** : Endpoints pour lister/modifier les utilisateurs. 
    - **Sécurité** : Validation, CSRF, hachage des mots de passe. 
    - **Accessibilité** : Formulaires accessibles (labels, ARIA). 

3. **Dépendances** :

```bash
composer require laravel/ui # Pour l’authentification (si nécessaire) composer require phpunit/phpunit --dev
```

4. **Base de données** : 
    - Configurez MySQL dans `.env` :

```text
DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=user_management DB_USERNAME=root DB_PASSWORD=
```

    - Migrez :


```bash
php artisan migrate
```

5. **Dépôt GitHub** :
    - Créez un dépôt (ex. : UserManagement-Equipe1). 
    - Poussez votre code : 

```bash
git add . 
git commit -m "Projet User Management" 
git push origin main
```
    - Partagez l’URL (ex. : https://github.com/votre-nom/UserManagement-Equipe1). 

6. **Test** :
    - Lancez avec php artisan serve. 
    - Exécutez les tests avec php artisan test. 
    - Testez l’API avec Postman. 

[retour](../../php.md)
