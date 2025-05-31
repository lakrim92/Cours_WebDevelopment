---
layout: default
title: API REST et tests avec PHPUnit
---

# API REST et tests avec PHPUnit

---

## Exercice 3.1 : Création d’une API REST pour les utilisateurs

**Objectif** : Développer une API REST pour gérer les utilisateurs.

## Instructions :

1. Dans routes/api.php, définissez des routes pour lister tous les utilisateurs (`GET /api/users`) et créer un utilisateur (`POST /api/users`). 
2. Modifiez le contrôleur `UserController` pour implémenter les méthodes index (retourne tous les utilisateurs en JSON) et store (crée un utilisateur avec validation). 
3. Validez les champs name (`requis, texte, max 255 caractères`) et email (`requis, email valide, unique`). 
4. Retournez une réponse `JSON` avec un code `HTTP 201` pour la création. 
5. Testez l’API avec `Postman` ou `curl` pour lister et créer un utilisateur. 

## Livrables :

- Fichiers : `routes/api.php`, `UserController.php`. 
- Captures d’écran des requêtes `Postman/curl` et `réponses JSON`. 

## Critères d’évaluation :

- Routes **API** correctes. 
- Réponses **JSON** valides. 
- Validation des données. 
- Code **HTTP 201** pour création. 

# Exercice 3.2 : Extension de l’API REST avec mise à jour et suppression

**Objectif** : Ajouter des endpoints pour modifier et supprimer des utilisateurs.

## Instructions :

1. Ajoutez des routes dans `routes/api.php` pour mettre à jour un utilisateur (`PUT /api/users/{id}`) et le supprimer (`DELETE /api/users/{id}`). 
2. Implémentez les méthodes `update` et `destroy` dans `UserController` pour gérer ces requêtes. 
3. Validez les données pour `update` (`name requis`, `email unique` sauf pour l’utilisateur courant). 
4. Retournez des réponses **JSON** avec codes **HTTP** appropriés (200 pour mise à jour, 204 pour suppression). 
5. Testez avec `Postman` ou `curl`. 

## Livrables :

- Fichiers : `routes/api.php`, `UserController.php`. 
- Captures d’écran des requêtes et réponses. 

## Critères d’évaluation :

- Routes pour mise à jour et suppression. 
- Validation correcte pour update. 
- Codes HTTP appropriés. 
* Réponses JSON fonctionnelles. 

# Exercice 3.3 : Tests unitaires avec PHPUnit

**Objectif** : Écrire des tests unitaires pour l’API des utilisateurs.

##Instructions :

1. Créez un test dans `tests/Feature/UserApiTest.php` pour vérifier :
    - La récupération de la liste des utilisateurs (`GET /api/users`). 
    - La création d’un utilisateur (`POST /api/users`). 
2. Utilisez `RefreshDatabase` pour réinitialiser la base de données entre les tests. 
3. Vérifiez les codes **HTTP** (200 pour liste, 201 pour création) et le contenu **JSON**. 
4. Configurez une base de données de test (ex. : **SQLite**). 
5. Exécutez les tests avec `php artisan test`. 

## Livrables :

- Fichier : `UserApiTest.php`. 
- Capture d’écran des résultats des tests. 

## Critères d’évaluation :

- Tests fonctionnels pour `GET` et `POST`. 
- Utilisation de RefreshDatabase. 
- Vérification des codes `HTTP` et `JSON`. 
- Configuration de la base de test. 

# Exercice 3.4 : Sécurisation de l’API avec authentification

**Objectif** : Protéger les endpoints de l’API avec une authentification par token.

## Instructions :

1. Configurez Laravel Sanctum pour l’authentification par token. 
2. Protégez les routes /api/users (`GET, POST, PUT, DELETE`) avec le middleware `auth:sanctum`. 
3. Créez une route pour générer un token (`POST /api/login`) en vérifiant les identifiants. 
4. Testez l’accès aux endpoints avec un token valide et invalide via `Postman`. 
5. Vérifiez que les endpoints sont inaccessibles sans authentification. 

## Livrables :

- Fichiers : `routes/api.php`, `UserController.php`, configuration Sanctum. 
- Captures d’écran des requêtes avec/sans token. 

## Critères d’évaluation :

- Installation de Sanctum. 
- Routes protégées. 
- Génération de token fonctionnelle. 
- Vérification d’accès sécurisé. 

# Exercice 3.5 : Test avancé avec PHPUnit et authentification

**Objectif** : Écrire des tests pour les endpoints protégés par authentification.

## Instructions :

1. Ajoutez des tests dans `UserApiTest.ph`p pour vérifier :
    - L’accès non autorisé à `/api/users` sans token (code 401). 
    - La création d’un utilisateur avec un token valide. 
2. Créez un utilisateur de test avec un token Sanctum dans le setup du test. 
3. Utilisez actingAs pour simuler l’authentification. 
4. Exécutez les tests et vérifiez les résultats. 

## Livrables :

- Fichier : `UserApiTest.php`. 
- Capture d’écran des résultats des tests. 

## Critères d’évaluation :

- Tests pour accès non autorisé et autorisé. 
- Utilisation de actingAs et Sanctum. 
- Résultats de tests corrects. 

## Instructions générales :

- Utilisez un projet `Laravel user-management`. 
- Testez dans `Postman` ou `curl`. 
- Vérifiez les erreurs dans `storage/logs/laravel.log`. 
- Poussez sur GitHub avec `README`. 
- Fournissez les captures d’écran. 
- Ressources : [Laravel Docs](https://github.com/laravel/docs), [Spatie](https://spatie.be/docs/laravel-permission/v6/introduction), [PHPUnit](https://phpunit.de/index.html). 

## Contact

Posez vos questions ! [Contact]({{ site.baseurl }}/contact.html)


[retour]({{ site.baseurl }}/php/php-advanced.html)
