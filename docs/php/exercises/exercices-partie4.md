---
layout: default
title: Extensions PHP pour VS Code
---

### 4.3 Exercices pratiques


## Contexte : 
Cette partie explore les tableaux associatifs, la boucle foreach, les fonctions, et les tableaux multidimensionnels. Les exercices mettent l’accent sur la manipulation de données complexes.

**Exercice 1 : Affichage d’un profil** :
- Créez un fichier `profil.php` dans `public/`. 
- Déclarez un tableau associatif `$profil` avec les clés nom, age, et ville (ex. : "nom" => "Luc", etc.). 
- Affichez chaque information dans un paragraphe `<p>` avec foreach.
- Testez à http://localhost:8200/profil.php.
- Fichiers à soumettre : `profil.php`.

**Exemple de résultat** : Une page affiche "Nom : Luc", "Âge : 22", "Ville : Paris".

**Exercice 2 : Liste de produits** :
- Créez un fichier `produits.php` dans `public/`. 
- Déclarez un tableau multidimensionnel `$produits` avec 3 produits, chacun ayant nom et prix (ex. : ["nom" => "Livre", "prix" => 15]). 
- Utilisez `foreach` pour afficher une liste `<ul><li>` avec chaque produit (ex. : "Livre - 15€").
- Testez à http://localhost:8200/produits.php.

**Exemple de résultat** : Une liste à puces des produits et prix.

Fichiers à soumettre : `produits.php`.

**comment la boucle simplifie-t-elle le code ?**

**Exercice 3 : Fonction de moyenne** :
- Créez un fichier `moyenne.php` dans `public/`. 
- Définissez une fonction `calculerMoyenne($notes)` qui prend un tableau de notes (ex. : [85, 90, 88]) et retourne la moyenne. 
- Appelez la fonction avec un tableau et affichez le résultat dans un `<p>`.
- Testez à http://localhost:8200/moyenne.php.

**Exemple de résultat** : Une page affiche "Moyenne : 87.67".

Fichiers à soumettre : `moyenne.php`.

**Exercice 4 : Équipe dynamique** :
- Créez un fichier `equipe.php` dans `public/`. 
- Déclarez un tableau multidimensionnel `$equipe` avec 3 membres, chacun ayant nom et role. 
- Définissez une fonction `afficherEquipe($equipe)` qui utilise `foreach` pour afficher une liste `<ul><li>` des membres. 
- Appelez la fonction.
- Testez à http://localhost:8200/equipe.php.

**Exemple de résultat** : Une liste à puces comme "Alice - Designer".

Fichiers à soumettre : `equipe.php`.

**Exercice 5 : Filtrage de données** :
- Créez un fichier `filtrage.php` dans `public/`. 
- Déclarez un tableau multidimensionnel `$etudiants` avec 4 étudiants, chacun ayant nom et note. 
- Utilisez `foreach` pour afficher uniquement les étudiants avec une note **≥ 10** dans une liste `<ul><li>`.
- Testez à http://localhost:8200/filtrage.php.

**Exemple de résultat** : Une liste des étudiants ayant réussi.

Fichiers à soumettre : `filtrage.php`.

---

## Soumettre vos travaux

- Créez un dépôt GitHub (ex. : PHP-Exercices-partie2-VotreNom). 
- Ajoutez vos fichiers pour chaque exercice. 
- Poussez votre code 

```bash
git add .
git commit -m "votre commentaire"
git push origin main
```

et partagez l’URL avec votre professeur. 

## Contact

Posez vos questions ! [Contact]({{ site.baseurl }}/contact.html)


[retour](/php/php.html)
