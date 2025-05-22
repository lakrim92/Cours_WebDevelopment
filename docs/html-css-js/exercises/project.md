# Partie 5 : Projet en groupe - Création d'un site web interactif

## Objectif

Créer un site web interactif et attrayant pour présenter une **vitrine d'un club ou d'une association** (ex. : club de sport, de musique, de jeux vidéo, ou association scolaire). Le site doit inclure :
- Une structure claire avec un titre, une description et des sections (HTML). 
- Un design coloré et moderne avec une mise en page soignée (CSS). 
- Des éléments interactifs, comme un bouton ou un menu déroulant (JavaScript). 
- Un résultat final qui rend les élèves fiers et enthousiastes ! 

Ce projet est conçu pour être réalisé en **groupes de 3 à 4 élèves**, avec des rôles définis pour encourager la collaboration. Le résultat sera un site web que les élèves pourront présenter à la classe.

## Organisation du travail en groupe

**Rôles dans le groupe**

Chaque élève choisit un rôle principal, mais tous collaborent sur toutes les parties du projet. Les rôles aident à organiser le travail :
1. **Designer HTML** : Responsable de la structure du site (balises HTML, organisation des sections). 
2. **Artiste CSS** : Responsable du style visuel (couleurs, polices, mise en page). 
3. **Magicien JavaScript** : Responsable des interactions (boutons, alertes, animations simples). 
4. **Coordinateur** (optionnel, si groupe de 4) : S’assure que tout le monde est sur la même longueur d’onde, gère le temps et compile les idées.

**Conseils pour la collaboration**
- Planifiez ensemble : Décidez du thème de votre club/association (ex. : "Club de football", "Club de codage"). 
- Partagez vos idées : Chaque membre propose une idée pour le design ou une fonctionnalité. 
- Testez régulièrement : Vérifiez votre site dans le navigateur après chaque changement. 
- Présentez votre travail : À la fin, montrez votre site à la classe et expliquez ce que vous avez fait. 

## Étapes du projet

**Étape 1 : Choisir un thème et planifier**
- **Durée** : 10 minutes 
- **Activité** :

1. En groupe, choisissez un thème pour votre club/association (ex. : `"Club de danse"`, `"Association écologique"`).
2. Décidez des éléments à inclure dans le site :
- Une page d’accueil avec un titre et une description. 
- Une section pour présenter les activités ou les membres. 
- Une image ou un logo (utilisez une URL en ligne, comme `https://picsum.photos/300`). 
- Un élément interactif (ex. : bouton pour afficher un message, menu cliquable).

**Étape 2 : Maquettage**
- **Durée** : 15 minutes 
- **Responsable principal** : Coordinateur (ou tous ensemble) 
- **Activité** :

1. Avant de coder, créez une **maquette** de votre site pour visualiser sa mise en page. En entreprise, les développeurs utilisent des maquettes pour planifier le design et s’assurer que tout le monde est d’accord avant de commencer. 
2. Options pour le maquettage :
- **Papier** : Dessinez la page sur une feuille (ex. : placez le titre en haut, l’image au centre, le bouton en bas). 
- **Outil en ligne** : Utilisez une plateforme comme [Figma](https://www.figma.com/fr-fr/) (version gratuite) ou [Canva](https://www.canva.com/fr_fr/) pour créer une maquette numérique simple. 
3. Incluez dans votre maquette :
- La disposition des éléments (titre, texte, image, bouton). 
- Une idée des couleurs ou du style (ex. : "fond bleu clair, texte sombre"). 
- L’emplacement des éléments interactifs (ex. : où sera le bouton ?). 
4. Présentez votre maquette au groupe et discutez : tout le monde est-il d’accord ? Ajustez si nécessaire. 
5. Gardez la maquette sous la main pour guider le codage. 

**Étape 3 : Créer la structure HTML**
- **Durée** : 30 minutes 
- **Responsable principal** : Designer HTML 
- **Activité** :

1. Créez un fichier **index.html** dans un dossier nommé projet_groupe. 
2. Ajoutez une structure de base en suivant votre maquette :
- Un titre (<h1>) pour le nom du club. 
- Un paragraphe (<p>) pour une courte description. 
- Une section (<div> ou <section>) pour les activités ou membres. 
- Une image (<img>) pour illustrer le thème. 
- Un bouton ou un élément cliquable pour l’interactivité.

3. Exemple de structure de départ :

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Club de [Votre Thème]</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenue au Club de [Votre Thème] !</h1>
    <p>Rejoignez-nous pour [description courte du club].</p>
    <img src="https://picsum.photos/300" alt="Image du club">
    <section>
        <h2>Nos Activités</h2>
        <ul>
            <li>Activité 1</li>
            <li>Activité 2</li>
            <li>Activité 3</li>
        </ul>
    </section>
    <button onclick="afficherMessage()">En savoir plus</button>
    <p id="message"></p>
    <script src="script.js"></script>
</body>
</html>
```

4. Testez dans le navigateur pour vérifier que tout s’affiche correctement.

**Étape 4 : Styliser avec CSS**
- **Durée** : 30 minutes 
- **Responsable principal** : Artiste CSS 
- **Activité** :

1. Créez un fichier style.css dans le dossier projet_groupe. 
2. Ajoutez des styles en respectant votre maquette :
- Utilisez des couleurs vives et harmonieuses (ex. : palette inspirée de votre thème). 
- Centrez les éléments pour une mise en page propre. 
- Ajoutez des effets au survol (hover) pour le bouton. 
- Assurez-vous que l’image est bien intégrée.

3. Exemple de style :

```css
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f0f4f8;
}
h1 {
    color: #2c3e50;
    text-align: center;
    font-size: 2.5em;
}
p {
    font-size: 1.2em;
    color: #34495e;
    text-align: center;
}
img {
    display: block;
    margin: 20px auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
section {
    background-color: white;
    padding: 20px;
    margin: 20px auto;
    max-width: 600px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
button {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #e74c3c;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.1em;
}
button:hover {
    background-color: #c0392b;
}
```

4. Liez le fichier CSS à index.html avec <link rel="stylesheet" href="style.css">. 
5. Testez dans le navigateur et discutez en groupe des ajustements (ex. : changer une couleur). 

**Étape 5 : Ajouter l’interactivité avec JavaScript**
- **Durée** : 30 minutes 
- **Responsable principal** : Magicien JavaScript 
- **Activité** :

1. Créez un fichier script.js dans le dossier projet_groupe. 
2. Ajoutez une fonction pour rendre le site interactif. Par exemple :
- Un bouton qui affiche un message dans un <p> ou une alerte. 
- Un effet simple, comme changer la couleur d’un élément. 
3. Exemple de code JavaScript :

```js
function afficherMessage() {
    document.getElementById("message").innerText = "Rejoignez notre club pour des aventures incroyables !";
}
```

4. Liez le fichier JavaScript à index.html avec `<script src="script.js"></script>` à la fin de `<body>`. 
5. Testez l’interactivité dans le navigateur (cliquez sur le bouton). Si cela ne fonctionne pas, vérifiez les erreurs dans la console du navigateur (clic droit > Inspecter > Console).

**Étape 6 : Finalisation et présentation**
- Durée : 15 minutes 
- Responsable principal : Coordinateur (ou tous ensemble) 
- Activité :
1. Vérifiez que tout fonctionne : structure, style, interactivité. 
2. Personnalisez le contenu avec des détails spécifiques à votre club (ex. : ajoutez des noms d’activités réelles, changez l’image pour une URL correspondant à votre thème). 
3. Testez le site sur différents navigateurs (Chrome, Firefox) pour vous assurer qu’il est beau partout. 
4. Préparez une courte présentation (2-3 minutes) pour expliquer :
- Le thème de votre club. 
- Ce que chaque membre a fait. 
- Comment la maquette a guidé votre travail. 
- Ce que vous avez appris.

5. Présentez votre site à la classe et recevez des retours !

## Conseils pour un résultat attrayant
- **Choisissez un thème motivant** : Un sujet qui passionne le groupe (ex. : jeux vidéo, écologie) rendra le projet plus amusant. 
- **Soignez le design** : Utilisez des couleurs qui vont bien ensemble (inspiration : coolors.co pour des palettes). Ajoutez des ombres ou des bordures arrondies pour un look moderne. 
- **Testez l’interactivité** : Assurez-vous que les boutons fonctionnent et que le site est fluide. 
- **Personnalisez** : Ajoutez des touches personnelles, comme des phrases amusantes ou une image en lien avec le thème. 
- **Suivez la maquette** : Référez-vous à votre maquette pour vous assurer que le site final correspond à votre vision initiale. 

## Évaluation et partage
- **Critères de réussite** :
    - Une maquette claire a été créée et suivie. 
    - Le site a une structure claire (HTML correct). 
    - Le design est attrayant et cohérent (CSS bien appliqué). 
    - Il y a au moins une interaction fonctionnelle (JavaScript). 
    - Tous les membres du groupe ont contribué. 
- Présentation : Chaque groupe montre son site à la classe. Les autres élèves peuvent poser des questions ou donner des idées d’amélioration. 
- Bonus : Si vous avez du temps, ajoutez une animation CSS (ex. : transition pour un effet fluide) or une fonctionnalité JavaScript (ex. : un compteur de clics).

---

# Conclusion

**Félicitations !** Vous avez appris les bases de HTML, CSS et JavaScript, et créé un site web interactif en groupe. Continuez à expérimenter et à explorer :
- Ajoutez plus de styles CSS (ex. : animations, polices). 
- Apprenez d’autres fonctionnalités JavaScript (ex. : formulaires, animations). 
- Partagez vos créations avec vos camarades ! 
- Utilisez les outils en ligne de la Partie 0.1 pour pratiquer régulièrement. 

## Ressources supplémentaires

- **Figma** (figma.com) : Pour créer des maquettes numériques. 
- **Flexbox Froggy** (flexboxfroggy.com) : Pour améliorer vos mises en page CSS. 
- **CodePen** (codepen.io) : Testez votre site ou trouvez des idées de design. 
- **MDN Web Docs** (developer.mozilla.org/fr/) : Référence pour HTML, CSS, JavaScript. 