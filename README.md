# Cours de Développement Web

Bienvenue dans **WebDevelopmentCourses**, un dépôt regroupant des cours interactifs pour apprendre le développement web, conçus pour des débutants. Ces cours sont accessibles [via GitHub Pages] (<https://lakrim92.github.io/Cours_WebDevelopment>
) pour une lecture facile dans votre navigateur, ou directement sur GitHub pour explorer les exemples de code.

## Cours disponibles

**Introduction à GitHub** ([Lire sur GitHub Pages](./docs/github-intro.md))
Apprenez à utiliser GitHub pour consulter ces cours, cloner le dépôt, et partager vos propres projets (exercices, projets en groupe). Ce cours explique l’installation de Git, la création d’un compte GitHub, et comment pousser vos travaux.

**Introduction à HTML, CSS et JavaScript** ([Lire sur GitHub Pages](./docs/html-css-js.md))
Découvrez comment créer des sites web interactifs avec HTML (structure), CSS (style), et JavaScript (interactivité). Inclut des exercices pratiques et un projet en groupe (site vitrine).

**Introduction à PHP** ([Lire sur GitHub Pages](./docs/php.md))Développez des applications web dynamiques avec PHP, en apprenant à gérer des formulaires, sessions, et données. Inclut des exercices et un projet en groupe (ToDoList).

**Introduction à PHP** ([Lire sur GitHub Pages](./docs/javascript.md))
Approfondissez JavaScript pour créer des applications interactives (ex. : mode sombre, stockage local) en suivant la méthode des 3S (Structurer, Séparer, Simplifier). Inclut des exercices et un projet en groupe (ToDoList).

## Comment accéder aux cours

Vous pouvez consulter les cours de deux façons principales :

**1. Via GitHub Pages (recommandé)**

- Ouvrez [https://lakrim92.github.io/Cours_WebDevelopment](https://lakrim92.github.io/Cours_WebDevelopment).
- Utilisez le menu de la page d’accueil pour naviguer vers :
  - [Introduction à GitHub](./docs/github-intro.md)
  - [HTML, CSS, JavaScript](./docs/html-css-js.md)
  - [PHP](./docs/php.md)
  - [JavaScript](./docs/javascript.md)
  - Barèmes de notation : [Exercices et projets](./docs/grading/)
- Avantage : Aucun logiciel requis, lisez directement dans votre navigateur (Chrome Firefox, etc.).

### 2. Via GitHub

- Visitez [github.com](https://lakrim92.github.io/Cours_WebDevelopment).
- Explorez les dossiers :
  - `docs/` : Contient les cours en Markdown (`github-intro.md`, `html-css-js.md`, etc.).
  - `github-intro/`, `html-css-js/`, `php/`, `javascript/` : Contiennent les exemples de code (exercices, projets).
- Cliquez sur un fichier (ex. : `docs/html-css-js.md`) pour lire, ou sur `html-css-js/exercises/partie2/exercice1.html` pour voir le code.
- Avantage : Accédez aux fichiers sources pour les télécharger.
Cliquez sur un fichier (ex. : docs/html-css-js.md) pour lire, ou sur html-css-js/exercises/partie2/exercice1.html pour voir le code.
Avantage : Accédez aux fichiers sources pour les télécharger.

### 3. Localement (optionnel)

Si vous voulez travailler sur votre ordinateur (ex. : tester les exemples de code) :

1. Installez Git ([git-scm.com](https://git-scm.com)).
2. Clonez le dépôt :

   ```bash
   git clone https://github.com/lakrim92/Cours_WebDevelopment.git
   ```

Ouvrez le dossier WebDevelopmentCourses dans Visual Studio Code :

    codium Cours_WebDevelopment

Consultez les fichiers Markdown (docs/html-css-js.md) et les exemples (html-css-js/project/index.html).

**Note** : Vous ne pouvez pas modifier ce dépôt (lecture seule). Pour vos propres projets, suivez les instructions ci-dessous.

## Consulter les exemples de code

Chaque cours inclut des **exercices pratiques** et un **projet en groupe**

- Les fichiers sont disponibles sur GitHub :
  - Introduction à GitHub : Exemples
  - HTML, CSS, JavaScript : Exercices et projet
  - PHP : Exercices et projet
  - JavaScript : Exercices et projet
**Comment tester les exemples**

### 1. Télécharger

. Sur GitHub, naviguez vers un fichier (ex. : html-css-js/exercises/partie2/exercice1.html).
. Cliquez sur “Download raw file” pour le sauvegarder.

### 2. Tester

**. HTML et JavaScript :**

. Ouvrez le fichier .html (ex. : index.html) dans un navigateur (double-clic).
. Vérifiez la console du navigateur (clic droit > Inspecter > Console) pour déboguer.

**. PHP :**

. Placez les fichiers dans un dossier (ex. : php/project/public).
. Ouvrez un terminal dans ce dossier et lancez un serveur PHP :
    ```
cd php/project/public
php -S localhost:8200 -t .
    ```

. Ouvrez http://localhost:8200 dans un navigateur.

### 3. Éditer

. Ouvrez les fichiers dans Visual Studio Code pour les modifier ou les utiliser comme base pour vos exercices.

## Barèmes de notation

Pour comprendre comment vos travaux seront évalués, consultez les barèmes sur GitHub Pages :

### . HTML, CSS, JavaScript

. Exercices
. Projet en groupe

### . PHP

. Exercices
. Projet en groupe

### . JavaScript

. Exercices
. Projet en groupe

Chaque barème détaille les critères (ex. : correction, respect des consignes) et les points attribués.

## Vos projets : Pousser sur GitHub

Pour soumettre vos exercices ou projets en groupe (ex. : site vitrine, ToDoList), vous devez créer votre propre dépôt GitHub. Suivez le cours Introduction à GitHub (Lire ici) pour :

1. **Installer Git** : Téléchargez et configurez Git sur votre ordinateur.
2. **Créer un compte GitHub** : Inscrivez-vous sur github.com.
3. **Créer un dépôt** : Faites un dépôt (ex. : MonProjetWeb) pour vos travaux.
4. **Pousser vos projets** :

    . Créez vos fichiers (ex. : index.html, style.css, script.js).
    . Utilisez ces commandes dans un terminal :

    ```
    git add .
    git commit -m "Ajout de mon projet"
    git push origin main
    ```

**Partager** : Envoyez l’URL de votre dépôt (ex. : <https://github.com/votre-nom/MonProjetWeb>) à votre professeur pour évaluation.

**Activité pratique :**

. Essayez l’activité “Hello World” dans Introduction à GitHub.
. Téléchargez cet exemple et poussez-le dans votre dépôt.

### Prérequis

**. Pour lire les cours :**  Un navigateur moderne (Chrome, Firefox, Edge).
**. Pour tester localement :**
    . Visual Studio Code (code.visualstudio.com).
    . Git (git-scm.com) pour cloner ou pousser.
    . PHP 7.4+ (php.net) pour le cours PHP.

**. Pour soumettre vos projets :** Compte GitHub et Git installé.

### Conseils pour réussir

**. Commencez par GitHub Pages :** Lisez les cours en ligne pour vous familiariser.
**. Suivez le cours GitHub :** Il est conçu pour les débutants et explique tout pas à pas.
**. Testez les exemples :** Téléchargez les fichiers et essayez-les avant de créer vos propres projets.
**. Déboguez :** Utilisez la console du navigateur (Inspecter > Console) pour repérer les erreurs dans les projets HTML/JavaScript.
**. Demandez de l’aide :** Si vous bloquez, contactez votre professeur ou ouvrez une Issue.

### Ressources supplémentaires

**. Git et GitHub :**
    . Documentation Git
    . GitHub Docs
    . GitHub Learning Lab (cours interactifs)

**. Développement web :**
    . MDN Web Docs : Référence pour HTML, CSS, JavaScript, PHP.
    . W3Schools : Tutoriels simples.

**. Outils :**
    . Visual Studio Code
    . PHP

### Licence

Ce dépôt est sous licence MIT pour un usage éducatif. Vous pouvez consulter et utiliser les cours librement, mais vous ne pouvez pas modifier ce dépôt.

### Contact

Pour toute question :

. Ouvrez une Issue sur GitHub.
. Contactez moi par email ou votre plateforme de classe.

Bon apprentissage et amusez-vous à coder !
