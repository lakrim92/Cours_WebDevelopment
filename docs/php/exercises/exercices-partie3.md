---
layout: default
title: Extensions PHP pour VS Code
---

### 3.3 Exercices pratiques

## Contexte : 
Cette partie se concentre sur les formulaires HTML, les méthodes GET/POST, les superglobales $_GET/$_POST, et la validation de base. Les exercices impliquent la création de formulaires et le traitement des données.

1. **Exercice 1 : Créer un formulaire de bienvenue** :
- Créez deux fichiers dans `public/` : `bienvenue.html` et `traitement_bienvenue.php`. 
- Dans `bienvenue.html`, ajoutez un formulaire `POST` avec un champ texte nom. 
- Dans `traitement_bienvenue.php`, utilisez `$_POST` pour afficher "Bonjour, [nom] !" dans un `<p>`.
- Testez à `http://localhost:8200 et modifier le nom ensuite voir le resultat`. 

**Exemple de résultat** : Après soumission, une page affiche "Bonjour, Marie !".

Fichiers à soumettre : `bienvenue.html`, `traitement_bienvenue.php`.

2. **Exercice 2 : Formulaire avec choix** :
- Créez deux fichiers : `couleur.html` et `traitement_couleur.php`. 
- Dans `couleur.html`, ajoutez un formulaire `GET` avec un menu déroulant `<select>` proposant 3 couleurs (ex. : Rouge, Bleu, Vert). 
- Dans `traitement_couleur.php`, affichez "Votre couleur préférée est : [couleur]" avec `$_GET`.
- Testez à http://localhost:8200/couleur.html. Quelle est la différence entre POST et GET ?

**Exemple de résultat** : Une page affiche "Votre couleur préférée est : Bleu".

Fichiers à soumettre : **couleur.html**, **traitement_couleur.php**.

3. **Exercice 3 : validation de formulaire** :
- Créez deux fichiers : `inscription.html` et `traitement_inscription.php`. 
- Dans `inscription.html`, ajoutez un formulaire `POST` avec un champ email. 
- Dans `traitement_inscription.php`, vérifiez si email est non vide avec `empty()`. 
- Affichez "Inscription réussie : [email]" ou "Erreur : email vide" dans un `<p>`.
- Testez à http://localhost:8200/inscription.html avec un champ vide et non vide.

**Exemple de résultat** : Une page affiche le résultat de la validation.

Fichiers à soumettre : `inscription.html`, `traitement_inscription.php`.

4. **Exercice 4 : Formulaire sécurisé** :
- Modifiez l’exercice 1 (bienvenue.html et traitement_bienvenue.php). 
- Dans `traitement_bienvenue.php`, utilisez `htmlspecialchars()` pour sécuriser l’affichage de `$_POST["nom"]`. 
- Testez avec une entrée contenant `<script>alert("test")</script>`.
- Testez à http://localhost:8200/bienvenue.html.

**Exemple de résultat** : L’entrée malveillante est affichée comme texte brut.

Fichiers à soumettre : `bienvenue.html`, `traitement_bienvenue.php`.

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
