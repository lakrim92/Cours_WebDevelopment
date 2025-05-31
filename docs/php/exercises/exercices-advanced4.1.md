---
layout: default
title: Tests automatisés avec PHPUnit
---
# Tests automatisés avec PHPUnit

---

## Exercice 4.1 : Test de récupération de la liste des utilisateurs

**Objectif** : Écrire un test fonctionnel pour vérifier que l’API peut lister tous les utilisateurs.

## Instructions :

1. Créez un fichier de test dans `tests/Feature/UserApiTest.php`. 
2. Écrivez un test pour vérifier qu’une requête `GET` à `/api/users` retourne un code de statut 200 et le bon nombre d’utilisateurs. 
3. Utilisez `RefreshDatabase` pour garantir une base de données propre à chaque test. 
4. Créez 5 utilisateurs de test à l’aide d’une factory. 
5. Vérifiez que la réponse JSON contient exactement 5 utilisateurs. 
6. Configurez une base de données **SQLite** pour les tests. 
7. Exécutez les tests et confirmez qu’ils passent. 

## Livrables :

- Fichier : `UserApiTest.php`. 
- Capture d’écran des résultats des tests. 

## Critères d’évaluation :

- Configuration correcte du test avec `RefreshDatabase`. 
- Utilisation appropriée de la factory pour créer des utilisateurs. 
- Assertions précises pour le code de statut et le nombre d’éléments `JSON`. 
- Base de données **SQLite** configurée. 

# Exercice 4.2 : Test de création d’un utilisateur

**Objectif** : Écrire un test pour vérifier que l’API peut créer un utilisateur.

## Instructions :

1. Dans `tests/Feature/UserApiTest.php`, ajoutez un test pour une requête `POST` à `/api/users`. 
2. Envoyez un payload valide avec `name` et `email`. 
3. Vérifiez que la réponse retourne un code de statut 201 et les données de l’utilisateur créé. 
4. Vérifiez que l’utilisateur est enregistré dans la base de données. 
5. Assurez-vous que le test utilise `RefreshDatabase`. 
6. Exécutez les tests et confirmez qu’ils passent. 

## Livrables :

- Fichier : `UserApiTest.php`. 
- Capture d’écran des résultats des tests. 

## Critères d’évaluation :

- Simulation correcte de la requête `POST`. 
- Payload valide et assertions de réponse. 
- Vérification de la base de données. 
- Utilisation de `RefreshDatabase`. 

# Exercice 4.3 : Test de validation pour la création d’un utilisateur

**Objectif** : Tester les règles de validation de l’API pour la création d’un utilisateur.

## Instructions :

1. Dans `tests/Feature/UserApiTest.php`, ajoutez un test pour vérifier les erreurs de validation d’une requête `POST` à `/api/users`. 
2. Envoyez un payload invalide (par exemple, `name` vide ou `email` non valide). 
3. Vérifiez que la réponse retourne un code de statut 422 et inclut des messages d’erreur. 
4. Assurez-vous que le test utilise `RefreshDatabase`. 
5. Exécutez les tests et confirmez qu’ils passent. 

## Livrables :

- Fichier : `UserApiTest.php`. 
- Capture d’écran des résultats des tests. 

## Critères d’évaluation :

- Simulation correcte des données invalides. 
- Assertion pour le statut 422 et les messages d’erreur. 
- Utilisation de `RefreshDatabase`. 

# Exercice 4.4 : Test de mise à jour et suppression d’un utilisateur

**Objectif** : Écrire des tests pour la mise à jour et la suppression d’un utilisateur via l’API.

## Instructions :

1. Dans `tests/Feature/UserApiTest.php`, ajoutez des tests pour :
    - Une requête `PUT` à `/api/users/{id}` pour mettre à jour name et email d’un utilisateur. 
    - Une requête `DELETE` à `/api/users/{id}` pour supprimer un utilisateur. 
2. Pour le test de mise à jour, vérifiez un code de statut 200 et les données mises à jour dans la réponse et la base de données. 
3. Pour le test de suppression, vérifiez un code de statut 204 et que l’utilisateur est supprimé de la base de données. 
4. Utilisez RefreshDatabase et créez un utilisateur de test avec une factory. 
5. Exécutez les tests et confirmez qu’ils passent. 

## Livrables :

- Fichier : `UserApiTest.php`. 
- Capture d’écran des résultats des tests. 

## Critères d’évaluation :

- Tests corrects pour la mise à jour et la suppression. 
- Assertions appropriées pour les codes de statut et l’état de la base de données. 
- Utilisation de `RefreshDatabase` et de la `factory`. 

# Exercice 4.5 : Test d’accès non autorisé à l’API protégée

**Objectif** : Tester les endpoints de l’API protégés par l’authentification Sanctum.

## Instructions :

1. Dans `tests/Feature/UserApiTest.php`, ajoutez un test pour vérifier qu’une requête `GET` à `/api/users` sans token retourne un code de statut 401. 
2. Ajoutez un test pour vérifier qu’une requête `POST` à `/api/users` avec un token valide réussit (code 201). 
3. Utilisez une factory pour créer un utilisateur et générez un token Sanctum pour le test autorisé. 
4. Assurez-vous que `RefreshDatabase` est utilisé. 
5. Exécutez les tests et confirmez qu’ils passent. 

## Livrables :

- Fichier : `UserApiTest.php`. 
- Capture d’écran des résultats des tests. 

## Critères d’évaluation :

- Test correct pour l’accès non autorisé (401). 
- Test réussi avec token (201). 
- Utilisation appropriée de `Sanctum` et `RefreshDatabase`. 

## Instructions générales :

- Utilisez le projet `Laravel user-management`. 
- Testez avec la commande `php artisan test`. 
- Vérifiez les erreurs dans `storage/logs/laravel.log`. 
- Poussez le code sur **GitHub** avec un **README** expliquant l’exécution des tests. 
- Fournissez les captures d’écran demandées. 
- Ressources : [Documentation Laravel Testing](https://laravel.com/docs/12.x/testing), [PHPUnit](https://phpunit.de/index.html), [Sanctum](https://laravel-france.com/posts/comment-fonctionne-laravel-sanctum). 

## Contact

Posez vos questions ! [Contact]({{ site.baseurl }}/contact.html)


[retour]({{ site.baseurl }}/php/php-advanced.html)
