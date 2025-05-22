# Partie 5 : Projet en groupe - Création d’une application web interactive

## Objectif
Créer une application web interactive pour présenter une **vitrine d’un club ou d’une association** (ex. : club de sport, de musique, ou association scolaire). L’application doit inclure :
- Une structure HTML claire avec un formulaire. 
- Un design attrayant avec CSS. 
- Une fonctionnalité PHP dynamique (ex. : traitement d’un formulaire, affichage de données). 
- Un résultat final motivant et professionnel. 
Ce projet est conçu pour des **groupes de 3 à 4 élèves**, avec des rôles pour encourager la collaboration.

## Organisation du travail en groupe

### Rôles dans le groupe
1. **Designer HTML** : Crée la structure HTML et le formulaire. 
2. **Artiste CSS** : Stylise la page pour un rendu moderne. 
3. **Magicien PHP** : Gère le code PHP (traitement des formulaires, tableaux). 
4. **Coordinateur** (optionnel, si groupe de 4) : Gère le temps et coordonne les idées.

### Conseils pour la collaboration
- Planifiez ensemble : Choisissez un thème (ex. : "Club de codage"). 
- Partagez vos idées : Proposez des fonctionnalités (ex. : formulaire d’inscription). 
- Testez régulièrement : Vérifiez votre application à http://localhost:8200. 
- Présentez votre travail : Montrez votre application à la classe.

## Étapes du projet

### Étape 1 : Choisir un thème et planifier

- **Durée** : 10 minutes  
- **Activité** :

1. Choisissez un thème pour votre club/association (ex. : `"Club de danse"`).  
2. Décidez des éléments à inclure :
    - Une page d’accueil avec un **titre** et une **description**.
    - Un **formulaire** (ex. : inscription au club).
    - Une **section** pour afficher des **données dynamiques** (ex. : membres).
    - Une **image** (ex. : `https://picsum.photos/300`).

### Étape 2 : Maquettage

- **Durée** : 15 minutes 
- **Responsable principal** : Coordinateur (ou tous ensemble) 
- **Activité** :

1. Créez une **maquette** pour visualiser la mise en page. En entreprise, les maquettes alignent l’équipe avant le codage. 
2. Options :
    - **Papier** : Dessinez la page (titre en haut, formulaire au centre, etc.). 
    - **Outil en ligne** : Utilisez [Figma](https://www.figma.com/fr-fr/) (version gratuite) ou [Canva](https://www.canva.com/fr_fr/) pour créer une maquette numérique simple.. 
3. Incluez :
    - Disposition des éléments (titre, formulaire, image). 
    - Idées de couleurs/styles (ex. : "fond clair, texte sombre"). 
    - Emplacement des éléments dynamiques (ex. : où afficher les données PHP ?). 
4. Validez la maquette en groupe et ajustez si nécessaire. 

### Étape 3 : Créer la structure HTML

- **Durée** : 30 minutes 
- **Responsable principal** : Designer HTML 
- **Activité** :

1. Créez un dossier projet_groupe dans mon_premier_site_php, et à l’intérieur, un sous-dossier public. 
2. Dans projet_groupe/public, créez un fichier index.php avec :

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
    <p>Rejoignez-nous pour [description].</p>
    <img src="https://picsum.photos/300" alt="Image du club">
    <form action="traitement.php" method="post">
        <label>Nom :</label>
        <input type="text" name="nom">
        <input type="submit" value="S'inscrire">
    </form>
    <section>
        <h2>Membres</h2>
        <div id="membres"></div>
    </section>
</body>
</html>
```

3. Lancez le serveur depuis projet_groupe avec :
`php -S localhost:8200 -t public`
4. Testez à http://localhost:8200.

### Étape 4 : Styliser avec CSS

- **Durée** : 30 minutes 
- **Responsable principal** : Artiste CSS 
- **Activité** :

1. Dans `projet_groupe/public`, créez un fichier style.css avec :

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
form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}
input[type="submit"] {
    background-color: #e74c3c;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color: #c0392b;
}
section {
    background-color: white;
    padding: 20px;
    margin: 20px auto;
    max-width: 600px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
```

2. Liez style.css à index.php. 
3. Testez à http://localhost:8200 et ajustez les styles en groupe. 

### Étape 5 : Ajouter l’interactivité avec PHP

- **Durée** : 30 minutes 
- **Responsable principal** : Magicien PHP 
- **Activité** :

1. Dans `projet_groupe/public`, créez un fichier `traitement.php` avec :

```php
<?php
    $nom = htmlspecialchars($_POST["nom"]);
    $membres = [
        ["nom" => "Alice", "role" => "Président"],
        ["nom" => "Bob", "role" => "Membre"],
        ["nom" => $nom, "role" => "Nouveau membre"]
    ];
    echo "<h2>Bienvenue, $nom !</h2>";
    echo "<ul>";
    foreach ($membres as $membre) {
        echo "<li>" . $membre["nom"] . " - " . $membre["role"] . "</li>";
    }
    echo "</ul>";
    echo '<a href="index.php">Retour</a>';
?>
```

2. Testez en soumettant le formulaire à http://localhost:8200. Vérifiez les erreurs dans le navigateur ou le terminal.

### Étape 6 : Finalisation et présentation

- Durée : 15 minutes 
- Responsable principal : Coordinateur (ou tous ensemble) 
- Activité :

1. Vérifiez que le formulaire, le style et le PHP fonctionnent. 
2. Personnalisez avec des détails (ex. : activités du club, image thématique). 
3. Testez à http://localhost:8200 sur différents navigateurs. 
4. Préparez une présentation (2-3 minutes) pour expliquer :
- Le thème du club. 
- Le rôle de chaque membre. 
- Comment la maquette a guidé le travail. 
- Ce que vous avez appris. 
5. Présentez à la classe et recevez des retours.

## Conseils pour un résultat attrayant

- **Thème motivant** : Choisissez un sujet passionnant (ex. : jeux vidéo). 
- **Design soigné** : Utilisez [coolors.co](https://coolors.co/) pour des palettes. Ajoutez ombres et bordures arrondies. 
- **Testez l’interactivité** : Vérifiez que le formulaire fonctionne. 
- **Personnalisez** : Ajoutez des messages ou images uniques. 
- **Suivez la maquette** : Assurez-vous que le résultat correspond à votre vision. 

## Évaluation et partage

- **Critères de réussite** :
    - Une maquette claire a été créée et suivie. 
    - La structure HTML est correcte avec un formulaire. 
    - Le design est attrayant (CSS). 
    - Une fonctionnalité PHP est fonctionnelle (ex. : traitement de formulaire). 
    - Tous les membres ont contribué. 
- **Présentation** : Montrez votre application à la classe. 
- **Bonus** : Ajoutez une validation PHP (ex. : champ vide) or une animation CSS. 

## Conclusion

**Félicitations !** Vous avez appris les bases de PHP et créé une application web interactive en groupe. Continuez à explorer :
- Ajoutez des fonctionnalités PHP (ex. : connexion à une base de données). 
- Améliorez le design CSS (ex. : animations). 
- Partagez vos créations avec vos camarades ! 
- Utilisez les outils de la Partie 0.1 pour pratiquer. 

## Ressources supplémentaires

- **Figma** [(figma.com)](https://www.figma.com/fr-fr/) : Pour des maquettes.
- **PHP.net** [(php.net)](https://www.php.net/) : Documentation officielle.
- **W3Schools PHP** [(w3schools.com/php)](https://www.w3schools.com/php/) : Tutoriels interactifs.
- **Repl.it** [(replit.com)](https://replit.com/) : Testez vos scripts en ligne. 
