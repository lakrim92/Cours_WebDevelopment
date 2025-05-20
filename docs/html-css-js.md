# Support de Cours : Introduction à HTML, CSS et JavaScript
### Introduction : Bienvenue dans le monde du développement web !
Ce cours est conçu pour vous apprendre à créer des sites web en utilisant **HTML, CSS** et **JavaScript**. Nous partirons de zéro, sans connaissances préalables, et vous serez guidés pas à pas pour construire votre première page web interactive. Le cours est interactif : vous allez coder, expérimenter et collaborer !

## Objectifs du cours
    • Comprendre les bases de HTML, CSS et JavaScript. 
    • Configurer un environnement de développement simple. 
    • Créer une page web interactive. 
    • Travailler en groupe sur des exercices pratiques. 

### Partie 0 : Une brève histoire des sites web et de leurs langages
Avant de plonger dans le code, comprenons d'où viennent les sites web et les langages que nous allons utiliser. Le web a transformé la façon dont nous communiquons, apprenons et partageons des informations !
Les débuts du web
    • 1989 : Tim Berners-Lee, un scientifique britannique, invente le World Wide Web au CERN (Suisse). Son idée était de créer un système pour partager des informations entre chercheurs via des ordinateurs connectés. 
    • 1990 : Le premier site web est créé. Il était très simple, avec du texte et des liens hypertextes (pas d'images ni de couleurs !). 
L'évolution des langages
    • HTML (1990) : HTML, ou HyperText Markup Language, est créé par Tim Berners-Lee pour structurer le contenu du web. La première version (HTML 1.0) permettait d'afficher du texte, des titres et des liens. Aujourd'hui, HTML5 (la version actuelle) permet d'ajouter des vidéos, des animations et bien plus. 
    • CSS (1996) : Cascading Style Sheets arrive pour rendre les sites plus beaux. Avant CSS, les pages web étaient fades et difficiles à styliser. CSS a permis de séparer le contenu (HTML) du design (couleurs, polices, mise en page). 
    • JavaScript (1995) : Créé par Brendan Eich, JavaScript a rendu le web interactif. Avant, les sites étaient statiques (comme un livre). Avec JavaScript, on peut ajouter des boutons, des formulaires dynamiques et des animations. 
Le web aujourd'hui
Aujourd'hui, presque tout ce que vous faites en ligne (réseaux sociaux, jeux, streaming) repose sur HTML, CSS et JavaScript. Ces trois langages sont les piliers du développement web :
    • HTML donne la structure (comme les murs d'une maison). 
    • CSS ajoute le style (comme la peinture et la décoration). 
    • JavaScript apporte l'interactivité (comme les interrupteurs et les gadgets). 
Activité : Réflexion en groupe
    • Regardez un site web simple (ex. : wikipedia.org). Essayez d'imaginer :
        ◦ Quel rôle joue HTML ? (Indice : cherchez la structure, comme les titres ou les paragraphes.) 
        ◦ Quel rôle joue CSS ? (Indice : regardez les couleurs et la mise en page.) 
        ◦ Où pourrait être JavaScript ? (Indice : cherchez des éléments interactifs, comme des menus déroulants.) 
    • Partagez vos observations avec un camarade ! 

Partie 0.1 : Outils en ligne pour s'entraîner et apprendre
Pour progresser en HTML, CSS et JavaScript, il est essentiel de pratiquer. Voici une sélection d'outils en ligne gratuits et interactifs qui rendent l'apprentissage amusant et efficace. Ces plateformes vous permettent de coder directement dans votre navigateur et de voir les résultats immédiatement.
Outils recommandés
    1. Flexbox Froggy (flexboxfroggy.com)
Un jeu interactif pour apprendre les concepts de CSS Flexbox. Aidez des grenouilles à atteindre leurs nénuphars en écrivant du code CSS. Idéal pour maîtriser la disposition flexible des éléments.
Activité : Essayez les 3 premiers niveaux et discutez en groupe de ce que vous avez appris sur justify-content ou align-items.
    2. CSS Grid Garden (cssgridgarden.com)
Un autre jeu amusant pour apprendre CSS Grid. Arrosez un jardin en utilisant les propriétés de grille CSS pour organiser les éléments. Parfait pour comprendre les mises en page complexes.
Activité : Complétez un niveau et partagez comment vous avez utilisé grid-template-columns.
    3. CodePen (codepen.io)
Une plateforme où vous pouvez coder HTML, CSS et JavaScript dans un éditeur en ligne et voir le résultat en temps réel. Vous pouvez également explorer les projets d'autres développeurs pour vous inspirer.
Activité : Créez un compte, essayez de recréer votre page index.html sur CodePen, et partagez votre création avec un camarade.
    4. W3Schools (w3schools.com)
Un site avec des tutoriels clairs et des exercices interactifs pour HTML, CSS et JavaScript. Vous pouvez tester votre code et vérifier vos réponses.
Activité : Suivez un tutoriel sur les sélecteurs CSS et essayez l'exercice correspondant.
    5. FreeCodeCamp (freecodecamp.org)
Une plateforme gratuite avec des cours structurés et des projets pratiques pour apprendre le développement web. Elle propose des défis progressifs pour renforcer vos compétences.
Activité : Commencez le module "Responsive Web Design" et complétez une leçon sur HTML ou CSS.
    6. CSS Diner (css-diner.com)
Un jeu pour apprendre les sélecteurs CSS en sélectionnant des éléments sur une table de restaurant. Idéal pour comprendre comment cibler des éléments HTML précis.
Activité : Terminez les 5 premiers niveaux et expliquez à un camarade ce que fait le sélecteur :nth-child.
Conseils pour utiliser ces outils
    • Pratiquez régulièrement : Essayez de passer 10 à 15 minutes par jour sur l’un de ces outils. 
    • Partagez vos progrès : Montrez vos solutions ou projets à vos camarades pour obtenir des retours. 
    • Explorez et expérimentez : N’ayez pas peur de modifier le code pour voir ce qui se passe ! 

Partie 1 : Préparer les outils
Avant de coder, il faut préparer un environnement de travail. Voici ce dont vous aurez besoin :
1.1 Outils nécessaires
    • Un éditeur de texte : Nous recommandons Visual Studio Code (gratuit, facile à utiliser).
        ◦ Téléchargez-le sur : code.visualstudio.com. 
        ◦ Installez-le sur votre ordinateur. 
    • Un navigateur web : Google Chrome, Firefox ou tout autre navigateur moderne.
        ◦ Nous utiliserons l'outil d'inspection (clic droit > "Inspecter") pour voir comment fonctionne notre code. 
    • Un dossier de travail :
        ◦ Créez un dossier nommé mon_premier_site sur votre ordinateur. 
        ◦ À l'intérieur, vous créerez des fichiers avec les extensions .html, .css et .js. 
1.2 Activité : Configurer son environnement
    1. Téléchargez et installez Visual Studio Code. 
    2. Créez un dossier mon_premier_site sur votre bureau. 
    3. Ouvrez ce dossier dans VS Code (Fichier > Ouvrir un dossier). 
    4. Créez un fichier nommé index.html dans ce dossier. 
    5. Écrivez dans index.html :
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
    6. Ouvrez ce fichier dans votre navigateur. Que voyez-vous ? Partagez avec un voisin ! 

Partie 2 : Les bases de HTML
HTML (HyperText Markup Language) est le langage qui structure le contenu d’une page web. Il définit les éléments de base, comme les titres, paragraphes, images et liens, formant le squelette d’un site.
2.1 Concepts clés
    • Balises : Instructions entourées de < et >. Une balise peut être ouvrante (ex. : <p>) et fermante (ex. : </p>). Certaines balises sont auto-fermantes (ex. : <img>). 
    • Attributs : Fournissent des informations supplémentaires aux balises. Exemple : <a href="https://example.com"> où href est l’attribut. 
    • Structure d’une page HTML :
        ◦ <!DOCTYPE html> : Déclare que le document est en HTML5. 
        ◦ <html lang="fr"> : Contient toute la page et spécifie la langue (français ici). 
        ◦ <head> : Contient les métadonnées (titre, encodage, liens vers CSS/JavaScript). 
        ◦ <body> : Contient le contenu visible (textes, images, boutons). 
    • Balises courantes :
        ◦ <h1> à <h6> : Titres de différents niveaux (h1 = plus grand, h6 = plus petit). 
        ◦ <p> : Paragraphe pour du texte. 
        ◦ <a> : Lien hypertexte (ex. : <a href="https://example.com">Cliquez ici</a>). 
        ◦ <img> : Image (ex. : <img src="image.jpg" alt="Description">). 
        ◦ <ul> et <li> : Liste non ordonnée (puces). 
        ◦ <div> : Conteneur pour regrouper des éléments. 
2.2 Exemples
    1. Structure de base :
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
       Résultat : Affiche un titre "Bienvenue !" et un paragraphe.
    2. Liste et lien :
       <h2>Mes hobbies</h2>
       <ul>
           <li>Lecture</li>
           <li>Jeux vidéo</li>
           <li><a href="https://example.com">Visiter un site</a></li>
       </ul>
       Résultat : Affiche une liste à puces avec un lien cliquable.
    3. Image :
       <img src="https://picsum.photos/200" alt="Image aléatoire">
       Résultat : Affiche une image de 200x200 pixels.