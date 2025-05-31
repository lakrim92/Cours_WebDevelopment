---
layout: default
title: Sécurité et validation
---
# Sécurité et validation

---

# Exercice 2.1 : Formulaire sécurisé avec validation

**Objectif** : Créer un formulaire sécurisé pour ajouter un utilisateur, avec validation et affichage des erreurs.

## Instructions :

1. Créez une vue Blade pour un formulaire d’ajout d’utilisateur avec les champs `name` (`obligatoire`, `texte`) et `email` (`obligatoire`, `email valide`, unique dans `users`). 
2. Ajoutez la protection **CSRF**. 
3. Utilisez `old()` pour préremplir les champs en cas d’erreur. 
4. Affichez les erreurs spécifiques à chaque champ. 
5. Implémentez une méthode dans le contrôleur pour valider les données et créer l’utilisateur. 
6. Testez en soumettant des données invalides (ex. : `email non valide`) et `valides`. 

## Livrables :

- Fichiers : `vue`, `contrôleur`. 
- Capture d’écran du formulaire avec erreurs. 

## Critères d’évaluation :

- Formulaire avec **CSRF**. 
- Validation correcte (`name`, `email`). 
- Affichage des erreurs et préremplissage. 
- Création d’utilisateur fonctionnelle. 

---

# Exercice 2.2 : Gestion des erreurs et messages flash

**Objectif** : Améliorer l’expérience utilisateur avec des messages d’erreurs globaux et des messages flash.

## Instructions :

1. Modifiez la vue du formulaire pour afficher une liste globale des erreurs en haut si la validation échoue. 
2. Ajoutez un message flash de succès dans le contrôleur après ajout d’un utilisateur. 
3. Affichez le message flash dans la vue de la liste des utilisateurs. 
4. Testez avec une validation échouée et réussie. 

## Livrables :

- Fichiers : `vues`, `contrôleur`. 
- Capture d’écran avec erreurs globales et message flash. 

## Critères d’évaluation :

- Affichage des erreurs globales. 
- Message flash après succès. 
- Affichage correct du message flash. 

# Exercice 2.3 : Authentification avec Laravel Breeze

1. Installez **Laravel Breeze** avec l’option **Blade**. 
2. Protégez la route `/users` avec le `middleware auth`. 
3. Affichez le nom de l’utilisateur connecté dans la vue de la liste des utilisateurs. 
4. Ajoutez un lien de déconnexion. 
5. Testez l’inscription, la connexion, et l’accès sécurisé à `/users`. 

## Livrables :

- Fichiers : `routes`, `vue`. 
- Capture d’écran de la page avec utilisateur connecté. 

## Critères d’évaluation :

- Installation de **Breeze**. 
- Route protégée. 
- Affichage du nom et lien de déconnexion. 

# Exercice 2.4 : Gestion des rôles avec Spatie Laravel Permission

**Objectif** : Restreindre l’ajout d’utilisateurs aux administrateurs avec une permission spécifique.

## Instructions :

1. Installez **Spatie Laravel Permission**. 
2. Configurez le modèle `User` avec le trait `HasRoles`. 
3. Créez 2 rôles (`admin, user`) et 1 permission (`edit users`) via un `seeder`. 
4. Protégez la route d’ajout d’utilisateur avec la permission edit users. 
5. Affichez un bouton d’ajout dans la liste uniquement pour les utilisateurs ayant la permission `edit_users`. 
6. Testez avec un utilisateur admin et un utilisateur normal. 

## Livrables :

- Fichiers : `modèle`, `seeder`, `routes`, `vue`. 
- Capture d’écran avec bouton conditionnel. 

## Critères d’évaluation :

- Installation correcte de **Spatie**. 
- Rôles et permission créés. 
- Route protégée. 
- Bouton conditionnel. 

# Exercice 2.5 : Formulaire sécurisé avancé avec messages flash

1. Créez une vue pour un formulaire avec des champs `name`, `email`, et `phone` (`optionnel, format téléphone valide`). 
2. Ajoutez la protection **CSRF** et la validation (`name: requis, email: unique, phone: format téléphone ou null`). 
3. Affichez les erreurs globales et spécifiques. 
4. Ajoutez un message flash de succès après ajout. 
5. Affichez le message flash dans la liste des utilisateurs. 
6. Testez avec données valides et invalides. 

## Livrables :
- Fichiers : `vue`, `contrôleur`. 
- Capture d’écran avec erreurs et message flash. 

## Critères d’évaluation :

- Formulaire avec validation avancée. 
- Affichage des erreurs. 
- Message flash fonctionnel. 

Instructions générales :

- Utilisez un projet `Laravel user-management`. 
- Testez dans un navigateur. 
- Vérifiez les erreurs dans `logs/php_errors.log`. 
- Poussez sur GitHub avec `README`. 
- Fournissez les captures d’écran. 
- Ressources : [Laravel Docs](https://github.com/laravel/docs), [Spatie](https://spatie.be/docs/laravel-permission/v6/introduction). 

## Contact

Posez vos questions ! [Contact]({{ site.baseurl }}/contact.html)


[retour]({{ site.baseurl }}/php/php-advanced.html)
