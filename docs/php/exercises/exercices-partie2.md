### Exercices PHP - Mise en pratique

## Contexte : 

Cette partie couvre la syntaxe de base, les variables, les conditions, les boucles, les tableaux, et l'intégration avec HTML. Les exercices visent à pratiquer ces concepts dans des scripts PHP simples.

**Exercice 1 : Afficher un message personnalisé :**
- Créez un fichier `bonjour.php` dans le dossier `public/.` 
- Déclarez une variable `$prenom` avec votre prénom. 
- Utilisez `echo` pour afficher un message dans une balise `<h1>` : "Bonjour, [prenom] !". 
- Intégrez le code dans une page HTML valide avec `<!DOCTYPE html>`.
- Testez à `http://localhost:8200`. 

**Exemple de résultat** : Une page web affiche "Bonjour, Alice !" en grand titre.

Fichiers à soumettre : `bonjour.php`

**Exercice 2 : Vérification d’âge :**
- Créez un fichier `age.php` dans `public/`. 
- Déclarez une variable `$age` avec un entier (ex. : 20). 
- Utilisez une condition `if/else` pour afficher dans un paragraphe `<p> : "Vous êtes majeur"` si `$age >= 18`, sinon `"Vous êtes mineur"`. 
- Testez avec différentes valeurs de `$age`.
- Testez à `http://localhost:8200` et modifiez `$age`. 

**Exemple de résultat** : Une page affiche "Vous êtes majeur" ou "Vous êtes mineur".

Fichiers à soumettre : `age.php`.

**Exercice 3 : Afficher une liste dynamique :**
- Créez un fichier `courses.php` dans `public/`.
- Déclarez un tableau indexé `$courses` contenant au moins 4 produits (ex. : "Pain", "Lait", "Œufs", "Fruits"). 
- Utilisez une boucle `foreach` pour afficher chaque produit dans une liste HTML `<ul><li>`.
- Testez à `http://localhost:8200` et modifiez la lsite. 

**Exemple de résultat** : Une page affiche une liste à puces avec les produits.

Fichiers à soumettre : `courses.php`.

**Exercice 4 : Tableau des scores :**
- Créez un fichier `scores.php` dans `public/`. 
- Déclarez un tableau associatif `$scores` avec 3 noms d’étudiants comme clés et leurs notes comme valeurs (ex. : "Alice" => 85). 
- Utilisez une boucle `foreach` pour afficher chaque étudiant et sa note dans un paragraphe `<p>` (ex. : "Alice : 85").
- Testez à `http://localhost:8200` et ajouter des etudiants. 

**Exemple de résultat** : Une page affiche "Alice : 85", "Bob : 90", etc.

Fichiers à soumettre : `scores.php`.

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

Posez vos questions ! [Contact](../../contact.md)


[retour](../../php.md)
