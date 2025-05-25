### 3.3 Exercices pratiques


1. **Exercice 1 : Créer un formulaire simple** :
- Créez un fichier `public/formulaire.php` avec un formulaire `<form>` (méthode POST) contenant un champ texte prenom. 
- Créez un fichier `public/traitement.php` qui affiche `"Salut, [prenom] !"` avec `$_POST.` 
- Lancez le serveur (php -S localhost:8200 -t public) et testez à http://localhost:8200/formulaire.php. Partagez avec un voisin.

2. **Exercice 2 : Formulaire avec choix** :
- Dans `public/formulaire.php`, ajoutez un `<select>` avec 3 options (ex. : villes préférées). 
- Dans `public/traitement.php`, récupérez le choix avec `$_POST` et affichez `"Vous avez choisi : [ville]"`. 
- Testez à http://localhost:8200/formulaire.php. Discutez en groupe : quelle est la différence entre POST et GET ?

3. **Exercice 3 : Ajouter une validation** :
- Modifiez `public/traitement.php` pour vérifier si le champ prenom est vide. 
- Si vide, affichez `"Erreur : entrez un prénom."` Sinon, affichez le message de bienvenue. 
- Testez à http://localhost:8200/formulaire.php avec un champ vide et non vide. Partagez vos observations. 


---

## Soumettre vos travaux

- Créez un dépôt GitHub (ex. : Flutter-Exercices-VotreNom). 
- Ajoutez vos fichiers main.dart pour chaque exercice. 
- Poussez votre code et partagez l’URL avec votre professeur. 

[retour](../../php.md)
