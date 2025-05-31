---
layout: default
title: # Architecture MVC et Eloquent
---
# Architecture MVC et Eloquent

---

# Exercice 1.1 : Liste d’utilisateurs avec MVC

**Objectif** : Créer une application Laravel qui affiche une liste d’utilisateurs en utilisant l’architecture MVC.

## Instructions :

1. Créez un projet Laravel nommé `user-management`.
2. Générez un modèle `User` avec une migration et un contrôleur RESTful.
3. Configurez la migration pour inclure les champs `name` (string) et `email` (string, unique) dans la table `users`.
4. Configurez le modèle `User` pour autoriser `name` et `email` en "mass assignment".
5. Implémentez une méthode dans le contrôleur pour récupérer tous les utilisateurs et les afficher dans une vue.
6. Créez une vue pour afficher la liste des utilisateurs dans une liste HTML.
7. Ajoutez une route pour accéder à la liste des utilisateurs.
8. Testez en insérant manuellement des utilisateurs dans la base et en vérifiant l’affichage à `/users`.

## Livrables :

- Fichiers : modèle, contrôleur, vue, migration, routes.
- Capture d’écran de la page `/users`.

## Critères d’évaluation :

- Projet fonctionnel.
- Modèle configuré correctement.
- Contrôleur récupérant les données.
- Vue avec liste des utilisateurs.
- Route fonctionnelle.

--- 

# Exercice 1.2 : Ajout d’un utilisateur avec Eloquent

**Objectif** : Permettre l’ajout d’un utilisateur via un formulaire, en utilisant Eloquent.

## Instructions :

- Ajoutez une méthode dans le contrôleur pour afficher un formulaire d’ajout d’utilisateur.
- Créez une vue avec un formulaire pour saisir `name` et `email` (avec protection CSRF).
- Ajoutez une méthode dans le contrôleur pour traiter le formulaire et créer un utilisateur.
- Ajoutez les routes pour afficher et traiter le formulaire.
- Testez l’ajout en soumettant le formulaire et en vérifiant la liste des utilisateurs.

## Livrables :

- Fichiers : contrôleur, vue, routes.
- Capture d’écran du formulaire et de la liste mise à jour.

## Critères d’évaluation :

- Formulaire avec protection CSRF.
- Création d’utilisateur via Eloquent.
- Redirection après ajout.
- Routes correctes.

---

# Exercice 1.3 : Recherche d’utilisateurs avec Eloquent

**Objectif** : Ajouter une fonctionnalité de recherche par nom avec Eloquent.

## Instructions :

1. Modifiez le contrôleur pour accepter un paramètre de recherche (`search`) via GET et filtrer les utilisateurs par nom.
2. Ajoutez un formulaire de recherche dans la vue de la liste des utilisateurs.
3. Testez la recherche en filtrant par un nom partiel et en vérifiant l’affichage de tous les utilisateurs sans recherche.

## Livrables :

- Fichiers : contrôleur, vue.
- Capture d’écran avec et sans recherche.

### Critères d’évaluation :

- Recherche fonctionnelle avec filtre.
- Formulaire de recherche avec valeur préremplie.
- Affichage correct des résultats.

---

# Exercice 1.4 : Mise à jour et suppression d’utilisateurs

**Objectif** : Permettre la modification et la suppression d’utilisateurs via Eloquent.

## Instructions :

- Ajoutez des méthodes dans le contrôleur pour afficher un formulaire de modification et traiter la mise à jour d’un utilisateur.
- Créez une vue pour le formulaire de modification.
- Ajoutez une méthode pour supprimer un utilisateur.
- Modifiez la vue de la liste pour inclure des boutons "Modifier" et "Supprimer" par utilisateur.
- Ajoutez les routes pour la modification et la suppression.
- Testez la modification et la suppression d’un utilisateur.

## Livrables :

- Fichiers : contrôleur, vues, routes.
- Capture d’écran du formulaire de modification et de la liste avec boutons.

## Critères d’évaluation :

- Modification et suppression via Eloquent.
- Formulaire de modification avec méthode PUT.
- Boutons d’action dans la liste.
- Routes correctes.

---

## Instructions générales :

- Utilisez un projet Laravel nommé `user-management`.
- Testez dans un navigateur (ex. : Chrome).
- Vérifiez les erreurs dans `storage/logs/laravel.log`.
- Poussez le code sur GitHub avec un README expliquant l’exécution.
- Fournissez les captures d’écran demandées.
- Ressources : Laravel Docs, Eloquent.

--- 

## Contact

Posez vos questions ! [Contact]({{ site.baseurl }}/contact.html)


[retour]({{ site.baseurl }}/php/php-advanced.html)
