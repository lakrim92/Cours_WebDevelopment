# Introduction : Bienvenue dans le monde du développement web !

Ce cours est conçu pour vous apprendre à créer des sites web en utilisant **HTML**, **CSS** et **JavaScript**.  
Nous partirons de zéro, sans connaissances préalables, et vous serez guidés pas à pas pour construire votre première page web interactive.  
Le cours est interactif : vous allez coder, expérimenter et collaborer !

## Objectifs du cours

- Comprendre les bases de HTML, CSS et JavaScript.  
- Configurer un environnement de développement simple.  
- Créer une page web interactive.  
- Travailler en groupe sur des exercices pratiques.  

---

# Partie 0 : Une brève histoire des sites web et de leurs langages

Avant de plonger dans le code, comprenons d'où viennent les sites web et les langages que nous allons utiliser.  
Le web a transformé la façon dont nous communiquons, apprenons et partageons des informations !

## Les débuts du web
- **1989** : Tim Berners-Lee, un scientifique britannique, invente le World Wide Web au CERN (Suisse).  
    Son idée était de créer un système pour partager des informations entre chercheurs via des ordinateurs connectés.  
- **1990** : Le premier site web est créé. Il était très simple, avec du texte et des liens hypertextes (pas d'images ni de couleurs !).  

## L'évolution des langages

- **HTML (1990)** : HTML, ou *HyperText Markup Language*, est créé par Tim Berners-Lee pour structurer le contenu du web.  
  La première version (HTML 1.0) permettait d'afficher du texte, des titres et des liens.  
  Aujourd'hui, **HTML5** (la version actuelle) permet d'ajouter des vidéos, des animations et bien plus.  

- **CSS (1996)** : *Cascading Style Sheets* arrive pour rendre les sites plus beaux.  
  Avant CSS, les pages web étaient fades et difficiles à styliser.  
  CSS a permis de **séparer le contenu (HTML) du design** (couleurs, polices, mise en page).  

- **JavaScript (1995)** : Créé par Brendan Eich, JavaScript a rendu le web interactif.  
  Avant, les sites étaient statiques (comme un livre).  
  Avec JavaScript, on peut ajouter des boutons, des formulaires dynamiques et des animations.  

## Le web aujourd'hui

Aujourd'hui, presque tout ce que vous faites en ligne (réseaux sociaux, jeux, streaming) repose sur HTML, CSS et JavaScript.  
Ces trois langages sont les **piliers du développement web** :

- **HTML** donne la structure (comme les murs d'une maison).  
- **CSS** ajoute le style (comme la peinture et la décoration).  
- **JavaScript** apporte l’interactivité (comme les interrupteurs et les gadgets).  

## 🎯 Activité : Réflexion en groupe

- Regardez un site web simple (ex. : [wikipedia.org](https://wikipedia.org)). Essayez d'imaginer :
  - Quel rôle joue **HTML** ? (Indice : cherchez la structure, comme les titres ou les paragraphes.)  
  - Quel rôle joue **CSS** ? (Indice : regardez les couleurs et la mise en page.)  
  - Où pourrait être **JavaScript** ? (Indice : cherchez des éléments interactifs, comme des menus déroulants.)  
- Partagez vos observations avec un camarade !

---

# Partie 0.1 : Outils en ligne pour s'entraîner et apprendre

Pour progresser en HTML, CSS et JavaScript, il est essentiel de **pratiquer**.  
Voici une sélection d’outils en ligne gratuits et interactifs qui rendent l’apprentissage amusant et efficace.

## Outils recommandés

1. **Flexbox Froggy** - [flexboxfroggy.com](https://flexboxfroggy.com)  
   Un jeu interactif pour apprendre les concepts de CSS Flexbox.  
   **Activité** : Essayez les 3 premiers niveaux et discutez en groupe de ce que vous avez appris sur `justify-content` ou `align-items`.

2. **CSS Grid Garden** - [cssgridgarden.com](https://cssgridgarden.com)  
   Un autre jeu amusant pour apprendre CSS Grid.  
   **Activité** : Complétez un niveau et partagez comment vous avez utilisé `grid-template-columns`.

3. **CodePen** - [codepen.io](https://codepen.io)  
   Une plateforme pour coder HTML, CSS et JavaScript dans un éditeur en ligne.  
   **Activité** : Créez un compte, recréez votre page `index.html` sur CodePen et partagez-la avec un camarade.

4. **W3Schools** - [w3schools.com](https://www.w3schools.com)  
   Un site avec des tutoriels interactifs.  
   **Activité** : Suivez un tutoriel sur les sélecteurs CSS et testez vos connaissances.

5. **FreeCodeCamp** - [freecodecamp.org](https://www.freecodecamp.org)  
   Une plateforme gratuite avec des cours structurés et des projets pratiques.  
   **Activité** : Commencez le module *Responsive Web Design* et complétez une leçon HTML ou CSS.

6. **CSS Diner** - [css-diner.com](https://css-diner.com)  
   Un jeu pour apprendre les sélecteurs CSS.  
   **Activité** : Terminez les 5 premiers niveaux et expliquez ce que fait le sélecteur `:nth-child`.

## 💡 Conseils pour utiliser ces outils

- Pratiquez régulièrement : 10 à 15 minutes par jour suffisent.  
- Partagez vos progrès : Obtenez des retours !  
- Expérimentez : Modifiez le code, testez des idées !

---

# Partie 1 : Préparer les outils

Avant de coder, il faut préparer un **environnement de travail**.

## 1.1 Outils nécessaires

- **Éditeur de texte** : Visual Studio Code (recommandé)  
  - Téléchargez sur : [code.visualstudio.com](https://code.visualstudio.com)  
  - Installez-le sur votre ordinateur.

- **Navigateur web** : Google Chrome, Firefox, etc.  
  - Utilisez l’inspecteur (clic droit > "Inspecter") pour voir comment fonctionne le code.

- **Dossier de travail** :  
  - Créez un dossier nommé `mon_premier_site`.  
  - Créez-y des fichiers `.html`, `.css` et `.js`.

## 1.2 🛠️ Activité : Configurer son environnement

1. Téléchargez et installez Visual Studio Code.  
2. Créez un dossier `mon_premier_site` sur votre bureau.  
3. Ouvrez ce dossier dans VS Code (Fichier > Ouvrir un dossier).  
4. Créez un fichier `index.html` avec le contenu suivant :

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma première page web</title>
</head>
<body>
    <h1>Bonjour, le monde !</h1>
</body>
</html>

# Partie 2 : Les bases de HTML

HTML (*HyperText Markup Language*) structure le contenu d’une page web.  
Il forme le squelette d’un site avec des titres, paragraphes, images et liens.

## 2.1 Concepts clés

- **Balises** : Délimitées par `<` et `>`, souvent ouvertes et fermées (ex : `<p>` et `</p>`).  
  Certaines sont auto-fermantes : `<img />`.

- **Attributs** : Fournissent des infos supplémentaires.  
  Exemple : `<a href="https://example.com">`.

- **Structure HTML typique** :
  - `<!DOCTYPE html>` : Déclare HTML5.
  - `<html lang="fr">` : Langue du document.
  - `<head>` : Métadonnées (titre, liens).
  - `<body>` : Contenu visible.

- **Balises courantes** :
  - `<h1>` à `<h6>` : Titres.
  - `<p>` : Paragraphe.
  - `<a>` : Lien hypertexte.
  - `<img>` : Image.
  - `<ul>` / `<li>` : Liste à puces.
  - `<div>` : Conteneur.

## ✏️ 2.2 Exemples

### 1. Structure de base

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon site</title>
</head>
<body>
    <h1>Bienvenue !</h1>
    <p>Ceci est ma première page web.</p>
</body>
</html>
