---
layout: default
title: Extensions PHP pour VS Code
---
# Exercices HTML - Mise en pratique

## 1. Exercice 1 : Créer une page personnelle

Dans `index.html`, ajoutez :

- Un titre `<h1>` avec votre nom.
- Un paragraphe `<p>` décrivant votre ville préférée.

    👉 Partagez avec un voisin : est-ce que tout s’affiche correctement ?

- Une liste `<ul>` avec **3 de vos plats favoris**.
- Un lien `<a>` vers un site que vous aimez (ex. : YouTube).

> 💾 Enregistrez et ouvrez dans le navigateur.

---

## 2. Exercice 2 : Ajouter une image

- Ajoutez une balise `<img>` avec une URL d’image, par exemple :  
    `https://picsum.photos/150`

```html
<img src="https://picsum.photos/150" alt="Image aléatoire">
```

- Ajoutez un attribut alt décrivant l’image.

- Testez dans le navigateur.

**❓ Que se passe-t-il si vous changez la taille (par exemple /150 à /300) ?**

## 3. Exercice 3 : Organiser avec un div

- Créez un <div> contenant :

    - Un titre
    
    ```html
    <h2> : "À propos"
    ```

    - Un paragraphe
    
    ```html
    <p> : une courte phrase sur vous.
    ```

- Ajoutez une deuxième `<div>` contenant une liste `<ul>` de 2 centres d’intérêt.

    ```html
    <div>
        <h2>À propos</h2>
        <p>Je suis passionné par le développement web.</p>
    </div>

    <div>
        <h2>Centres d’intérêt</h2>
        <ul>
            <li>Lecture</li>
            <li>Musique</li>
        </ul>
    </div>
    ```

🧩 Testez dans le navigateur et discutez en groupe : comment les <div> organisent-ils le contenu ?

---

## Soumettre vos travaux

- Créez un dépôt GitHub (ex. : Flutter-Exercices-VotreNom). 
- Ajoutez vos fichiers main.dart pour chaque exercice. 
- Poussez votre code et partagez l’URL avec votre professeur. 

## Exemple de commande pour soumettre :

```bash
git add . 
git commit -m "Exercice 2.1 et 3.1" 
git push origin main
```

Contact
Pour toute question :
- Ouvrez une Issue sur le dépôt. 
- Contactez votre professeur via email ou votre plateforme de classe. 

[retour](../../html-css-js.md)
