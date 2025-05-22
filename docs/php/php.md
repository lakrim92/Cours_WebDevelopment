# Support de Cours : Introduction à PHP

<div style="text-align: center;">
![](../img/php.png alt="Logo PHP" style="width: 300px; height: 300px;")
</div>

## Introduction : Bienvenue dans le monde du développement web avec PHP !
Ce cours est conçu pour vous apprendre à créer des applications web dynamiques en utilisant **PHP**, un langage de programmation côté serveur. Nous partirons de zéro, sans connaissances préalables, et vous serez guidés pas à pas pour construire votre première application web interactive. Le cours est interactif : vous allez coder, expérimenter et collaborer !

### Objectifs du cours
- Comprendre les bases de PHP et son rôle dans le développement web. 
- Configurer un environnement de développement simple avec le serveur intégré de PHP. 
- Créer une application web dynamique avec PHP. 
- Travailler en groupe sur des exercices pratiques. 

---

## Partie 0 : Une brève histoire de PHP et de son utilisation

Avant de coder, comprenons ce qu’est PHP, son histoire et pourquoi il est si populaire dans le développement web.

### Les débuts de PHP
- **1994** : PHP, ou ***PHP: Hypertext Preprocessor***, est créé par **Rasmus Lerdorf** comme un ensemble d’outils pour gérer des pages web personnelles (initialement ***Personal Home Page***). À l’époque, il s’agissait de scripts simples pour suivre les visiteurs d’un site. 
- **1997** : PHP 2 introduit des fonctionnalités plus avancées, comme le traitement des formulaires. 
- **1998** : PHP 3, développé par une communauté croissante, devient un langage de programmation complet, capable de générer des pages web dynamiques. 

### L’évolution de PHP
- **2004** : PHP 5 introduit la programmation orientée objet, améliorant la robustesse du langage. 
- **2015** : PHP 7 apporte des performances nettement meilleures, rendant le langage plus rapide et efficace. 
- **Aujourd’hui** : PHP 8 (et ses versions ultérieures) inclut des fonctionnalités modernes comme le typage strict et JIT (***Just-In-Time compilation***). PHP alimente environ 80 % des sites web dynamiques, comme ***WordPress***, ***Drupal*** et ***Laravel***. 

### PHP aujourd’hui
PHP est un langage côté serveur** qui permet de générer des pages web dynamiques en interagissant avec des bases de données, des formulaires et des sessions utilisateur. Il est souvent utilisé avec HTML, CSS et JavaScript pour créer des sites interactifs. Exemples d’utilisation :
- WordPress : Plateforme de blogs et de sites web. 
- Facebook : Utilise PHP pour certaines parties de son infrastructure. 
- E-commerce : Sites comme ***Magento*** pour gérer des boutiques en ligne. 

### Activité : Réflexion en groupe
- Visitez un site comme [wordpress.com](https://wordpress.com/fr/) ou [wikipedia.org](https://www.wikipedia.org/) (qui utilise ***MediaWiki***, basé sur PHP). Essayez d’imaginer :
    - Où PHP pourrait intervenir ? (Indice : formulaires, contenu qui change selon l’utilisateur.) 
    - Comment PHP diffère de HTML/CSS ? (Indice : PHP génère du contenu dynamiquement.) 
- Partagez vos observations avec un camarade ! 

---

## Partie 0.1 : Outils en ligne pour s’entraîner et apprendre

Pour progresser en PHP, il est essentiel de pratiquer. Voici une sélection d’outils en ligne gratuits et interactifs pour coder PHP directement dans votre navigateur.

### Outils recommandés
1. **Repl.it** [(replit.com)](https://replit.com/)
Une plateforme en ligne pour coder en PHP, HTML et CSS. Vous pouvez créer des projets simples et voir les résultats immédiatement.
***Activité*** : Créez un compte, essayez un script PHP simple (ex. : `<?php echo "Bonjour !"; ?>`) et partagez le résultat avec un camarade.
2. **PHP Sandbox** [(onlinephp.io)](https://onlinephp.io/)
Un environnement pour tester des scripts PHP avec différentes versions du langage. Idéal pour expérimenter avec du code serveur.
***Activité*** : Écrivez un script qui affiche votre nom et testez-le. Discutez de ce que fait la fonction `echo`.
3. **W3Schools PHP** [(w3schools.com/php)](https://www.w3schools.com/php/)
Tutoriels clairs avec un éditeur en ligne pour tester des scripts PHP. Couvre les bases comme les variables, les formulaires et les boucles.
Activité : Suivez un tutoriel sur les variables PHP et essayez l’exercice correspondant.
4. **FreeCodeCamp** [(freecodecamp.org)](https://www.freecodecamp.org/)
Bien que centré sur HTML/CSS/JavaScript, FreeCodeCamp propose des ressources pour PHP via ses forums et projets.
***Activité*** : Cherchez un tutoriel PHP sur le forum et essayez un exemple simple.
5. **Codewars** [(codewars.com)](https://www.codewars.com/)
Une plateforme avec des défis de programmation, y compris en PHP. Parfait pour pratiquer les boucles, conditions et fonctions.
***Activité*** : Résolvez un défi PHP de niveau débutant et expliquez votre solution à un camarade.

### Conseils pour utiliser ces outils
- Pratiquez régulièrement : Passez 10 à 15 minutes par jour sur un outil. 
- Partagez vos progrès : Montrez vos scripts à vos camarades pour obtenir des retours. 
- Expérimentez : Modifiez les exemples pour voir comment le code réagit. 

---

## Partie 1 : Préparer les outils

Pour coder en PHP, vous avez besoin d’un environnement qui permet d’exécuter des scripts côté serveur. Nous utiliserons le serveur intégré de PHP, qui est simple à configurer et ne nécessite pas d’installation complexe comme XAMPP.
### 1.1 Outils nécessaires
- PHP : Vous devez avoir PHP installé sur votre ordinateur.
    - **Windows/Mac/Linux **: Téléchargez PHP depuis [php.net](https://www.php.net/). Suivez les instructions d’installation pour votre système. 
    - Vérifiez l’installation en ouvrant un terminal et en tapant `php -v`. Vous devriez voir la version de PHP (ex. : `PHP 8.x`). 
- **Un éditeur de texte : Visual Studio Code** (gratuit, avec l’extension ***PHP Intelephense*** pour l’autocomplétion).
    - Téléchargez-le sur : [code.visualstudio.com](https://code.visualstudio.com/). 
- **Un terminal** : Utilisez le terminal intégré de VS Code, PowerShell (Windows), Terminal (Mac), ou tout terminal Linux. 
- **Un navigateur web** : Chrome, Firefox ou autre pour tester vos pages. 
- **Un dossier de travail** :
    - Créez un dossier nommé `mon_premier_site_php` sur votre ordinateur (ex. : `C:\Users\VotreNom\mon_premier_site_php ou ~/mon_premier_site_php`). 
    - À l’intérieur, créez un sous-dossier nommé **public** où vos fichiers **.php** seront placés. 

## 1.2 Activité : Configurer son environnement
1. **Installez PHP** :
- Téléchargez et installez PHP depuis [php.net](https://www.php.net/). 
- Ouvrez un terminal et tapez `php -v` pour vérifier que PHP est installé. 
2. **Installez Visual Studio Code** :
◦ Téléchargez et installez VS Code. 
◦ Installez l’extension ***PHP Intelephense*** via l’onglet Extensions. 
3. **Créez la structure du projet** :
- Créez un dossier `mon_premier_site_php` sur votre bureau ou ailleurs. 
- À l’intérieur, créez un sous-dossier public. 
- Ouvrez `mon_premier_site_php` dans VS Code (Fichier > Ouvrir un dossier). 
4. **Créez un fichier PHP** :
- Dans public, créez un fichier nommé **index.php** avec :

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma première page PHP</title>
</head>
<body>
    <h1>Bienvenue !</h1>
    <?php
        echo "<p>Ceci est généré par PHP !</p>";
    ?>
</body>
</html>
```

5. **Lancez le serveur PHP** :
- Ouvrez le terminal dans VS Code (Terminal > Nouveau terminal) ou utilisez votre terminal système. 
- Naviguez vers le dossier **mon_premier_site_php** avec la commande :
`cd chemin/vers/mon_premier_site_php`
(Ex. : `cd ~/mon_premier_site_php` sur Mac/Linux ou `cd C:\Users\VotreNom\mon_premier_site_php` sur Windows). 
- Lancez le serveur PHP avec :
`php -S localhost:8200 -t public`
Vous devriez voir un message comme : [Tue May 20 11:58:00 2025] PHP 8.x.x Development Server started at localhost:8200. 
6. **Testez votre page** :
- Ouvrez votre navigateur et allez à http://localhost:8200. 
- Vous devriez voir une page avec un titre "Bienvenue !" et un paragraphe généré par PHP. 
- Partagez avec un voisin : que se passe-t-il si vous modifiez le texte dans **index.php** et actualisez la page ? 

### Conseils pour le terminal
- **Arrêter le serveur** : Appuyez sur `Ctrl+C` dans le terminal pour arrêter le serveur. 
- **Erreurs courantes** :
    - Si `php -v` ne fonctionne pas, vérifiez que PHP est dans votre **PATH** système. 
    - Si `http://localhost:8200` ne répond pas, assurez-vous que le terminal affiche le message du serveur et que le port 8200 n’est pas utilisé par une autre application. 
- **Windows** : Utilisez PowerShell ou l’invite de commandes. Si le chemin contient des espaces, entourez-le de guillemets (ex. : `cd "C:\Users\Mon Nom\mon_premier_site_php"`). 
- **Mac/Linux** : Utilisez le Terminal. Les commandes sont similaires. 

---

## Partie 2 : Les bases de PHP

**PHP** est un langage de programmation côté serveur qui génère du contenu web dynamique. Il peut être intégré dans du HTML pour créer des pages qui changent en fonction des données ou des actions des utilisateurs.

### 2.1 Concepts clés
• **Syntaxe de base** : Le code PHP est entouré de balises `<?php et ?>`. Exemple :

```php
<?php
    echo "Bonjour !";
?>
```

- Variables : Stockent des données avec $. Exemple : `$nom = "Alice"`;.
    - Types : chaînes (string), nombres (int, float), tableaux (array), booléens (true/false). 
- Écho et impression : echo ou print affichent du texte ou du HTML dans la page. 
- Conditions : Permettent de prendre des décisions. Exemple :

```php
if ($age >= 18) {
    echo "Majeur";
} else {
    echo "Mineur";
}
```

- Boucles : Répètent des actions. Exemple avec une boucle for :

```php
for ($i = 1; $i <= 5; $i++) {
    echo "Numéro : $i<br>";
}

- Tableaux : Stockent plusieurs valeurs. Exemple :

```php
$fruits = ["pomme", "banane", "orange"];
```

- Intégration avec HTML : PHP peut générer du HTML dynamiquement. 

### 2.2 Exemples
**1. Affichage simple** :

```html
<!DOCTYPE html>
<html>
<body>
    <?php
        $message = "Bienvenue sur mon site !";
        echo "<h1>$message</h1>";
    ?>
</body>
</html>
```

***Résultat*** : Affiche un titre "Bienvenue sur mon site !".

**2. Condition** :

```php
<?php
    $heure = 14;
    if ($heure < 12) {
        echo "<p>Bonjour, il est matin !</p>";
    } else {
        echo "<p>Bonjour, il est l'après-midi !</p>";
    }
?>
```

***Résultat*** : Affiche un message selon l’heure.

**3. Boucle et tableau** :

```php
<?php
    $couleurs = ["rouge", "bleu", "vert"];
    echo "<ul>";
    foreach ($couleurs as $couleur) {
        echo "<li>$couleur</li>";
    }
    echo "</ul>";
?>
```

***Résultat*** : Affiche une liste HTML de couleurs.

### 2.3 Exercices pratiques

À vous de jouer [Exercices](./php/exercises/exercices-partie2.md)

---

## Partie 3 : Les bases de PHP avec formulaires

PHP excelle dans le traitement des données des utilisateurs, notamment via les formulaires HTML. Cette section explore comment PHP interagit avec les formulaires.

### 3.1 Concepts clés
- **Formulaires HTML** : Permettent aux utilisateurs d’envoyer des données (ex. : texte, choix).

```php
<form action="traitement.php" method="post">
    <input type="text" name="nom">
    <input type="submit" value="Envoyer">
</form>
```

- **Méthodes HTTP** :
    - GET : Envoie les données via l’URL (visible, pour des recherches). 
    - POST : Envoie les données de manière sécurisée (pour des formulaires sensibles).

- Superglobales : Variables PHP pour récupérer les données :
    - $_POST : Données envoyées via POST. 
    - $_GET : Données envoyées via GET. 

- Sécurité de base : Utilisez `htmlspecialchars()` pour éviter les attaques XSS (injections de code malveillant). 

### 3.2 Exemples
**1. Formulaire simple **:

```php
<!-- public/formulaire.php -->
<form action="traitement.php" method="post">
    <label>Entrez votre nom :</label>
    <input type="text" name="nom">
    <input type="submit" value="Envoyer">
</form>
```

```php
<!-- public/traitement.php -->
<?php
    $nom = htmlspecialchars($_POST["nom"]);
    echo "<p>Bonjour, $nom !</p>";
?>
```

***Résultat*** : Affiche un message avec le nom saisi.

2. **Formulaire avec choix** :

```php
<!-- public/choix.php -->
<form action="traitement_choix.php" method="get">
    <label>Sport préféré :</label>
    <select name="sport">
        <option value="football">Football</option>
        <option value="basket">Basket</option>
    </select>
    <input type="submit" value="Choisir">
</form>
<!-- public/traitement_choix.php -->
<?php
    $sport = htmlspecialchars($_GET["sport"]);
    echo "<p>Votre sport préféré est : $sport</p>";
?>
```

***Résultat*** : Affiche le sport sélectionné.

3. **Validation simple** :

```php
<!-- public/traitement.php -->
<?php
    $nom = htmlspecialchars($_POST["nom"]);
    if (empty($nom)) {
        echo "<p>Erreur : veuillez entrer un nom.</p>";
    } else {
        echo "<p>Bienvenue, $nom !</p>";
    }
?>
```

***Résultat*** : Vérifie si le champ est vide avant d’afficher.

### 3.3 Exercices pratiques

À vous de jouer [Exercices](./php/exercises/exercices-partie3.md)

---

## Partie 4 : Les bases de PHP avec tableaux et boucles

PHP est puissant pour manipuler des données complexes, comme les tableaux, et automatiser des tâches avec des boucles.

### 4.1 Concepts clés
- **Tableaux associatifs** : Stockent des paires clé-valeur. Exemple :

```php
$utilisateur = ["nom" => "Alice", "age" => 25];
```

- **Boucle foreach** : Parcourt un tableau. Exemple :

```php
foreach ($utilisateur as $cle => $valeur) {
    echo "$cle : $valeur<br>";
}
```

- **Fonctions** : Blocs de code réutilisables. Exemple :

```php
function saluer($nom) {
    return "Bonjour, $nom !";
}
```

- **Tableaux multidimensionnels** : Tableaux dans des tableaux. Exemple :

```php
$equipe = [
    ["nom" => "Alice", "role" => "Designer"],
    ["nom" => "Bob", "role" => "Développeur"]
];
```

### 4.2 Exemples
1. **Tableau associatif** :

```php
<?php
    $etudiant = ["nom" => "Marie", "note" => 15];
    echo "<p>Nom : " . $etudiant["nom"] . ", Note : " . $etudiant["note"] . "</p>";
?>
```

***Résultat*** : Affiche "Nom : Marie, Note : 15".

2. **Boucle foreach** :

```php
<?php
    $jours = ["Lundi", "Mardi", "Mercredi"];
    echo "<ul>";
    foreach ($jours as $jour) {
        echo "<li>$jour</li>";
    }
    echo "</ul>";
?>
```

***Résultat*** : Affiche une liste HTML de jours.

3. **Fonction et tableau multidimensionnel** :

```php
<?php
    function afficherEquipe($equipe) {
        echo "<ul>";
        foreach ($equipe as $membre) {
            echo "<li>" . $membre["nom"] . " - " . $membre["role"] . "</li>";
        }
        echo "</ul>";
    }
    $equipe = [
        ["nom" => "Alice", "role" => "Designer"],
        ["nom" => "Bob", "role" => "Développeur"]
    ];
    afficherEquipe($equipe);
?>
```

***Résultat*** : Affiche une liste des membres et leurs rôles.

### 4.3 Exercices pratiques

À vous de jouer [Exercices](./php/exercises/exercices-partie4.md)

---

## Partie 5 : Projet en groupe - Création d’une application web interactive

**Cliquez sur le lien** : [Projet](./php/exercises/project.md)
