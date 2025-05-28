---
layout: default
title: Extensions PHP pour VS Code
---
## 3.3 Exercices pratiques

**1. Exercice 1 : Styliser une page** :

- Créez un fichier style.css et liez-le à index.html. 
- Ajoutez des styles pour :
    - Le `<h1>` : couleur rouge, centré, taille **2.5em**. 
    - Le `<p>` : texte en gris, taille 16px. 
- Testez dans le navigateur. Partagez avec un voisin : le style correspond-il à vos attentes ?

**2. Exercice 2 : Utiliser une classe** :
- Ajoutez une classe highlight à un `<p>` dans index.html (ex. : `<p class="highlight">Texte</p>`). 
- Dans style.css, stylisez .highlight avec un fond jaune et une bordure noire. 
- Testez et discutez en groupe : comment les classes permettent-elles de réutiliser des styles ? 

**3. Exercice 3 : Expérimenter le Box Model** :

- Créez une `<div>` avec une classe carte contenant un `<p>` (ex. : une citation). 
- Dans style.css, ajoutez :

```css
.carte {
    background-color: #e0f7fa;
    padding: 20px;
    margin: 10px;
    border: 1px solid blue;
}
```

- Testez dans le navigateur. Modifiez padding ou margin et observez les changements. Partagez vos observations. 

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
