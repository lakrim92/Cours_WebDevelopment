# Support de Cours : Introduction à PHP

<div style="text-align: center;">
    <img src="./img/php200.png" alt="Logo PHP">
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


<div style="text-align: center;">
    <img src="./img/330px-Wikirl.jpg" alt="Rasmus Lerdorf">
    <br>
    <a href="https://fr.wikipedia.org/wiki/Rasmus_Lerdorf">Rasmus Lerdorf - Wikipédia</a>
</div>

### L’évolution de PHP
- **2004** : PHP 5 introduit la programmation orientée objet, améliorant la robustesse du langage. 
- **2015** : PHP 7 apporte des performances nettement meilleures, rendant le langage plus rapide et efficace. 
- **Aujourd’hui** : PHP 8 (et ses versions ultérieures) inclut des fonctionnalités modernes comme le typage strict et JIT (***Just-In-Time compilation***). PHP alimente environ 80 % des sites web dynamiques, comme ***WordPress***, ***Drupal*** et ***Laravel***. 

### PHP aujourd’hui
PHP est un langage de programmation **côté serveur** qui permet de générer des pages web dynamiques. Contrairement au HTML, qui est statique, PHP peut interagir avec des bases de données, gerer des formulaires, suivre les sessions utilisateur et produire du contenu personnalisé en temps réel.

### Fonctionnement
PHP s'integre directement dans du code HTML à l'aide de balises `<?php ... ?>`. Lorsque l'utlisateur demande une page web, le **serveur exécute le code PHP** et renvoie uniquement le **résultat** (généralement du HTML) au navigateur. Le code source PHP, lui, reste invisible pour l'utilisateur final.

### PHP est souvent utilisé avec :
- **HTML** : pour structurer le contenu des pages.
- **CSS** : pour le style et la mise en forme.
- **Javascript** : pour les interactions côté client.

### Exemples d'utilisation de PHP :
- **WordPress** : Plateforme de blogs et de sites web. 
- **Facebook** : Utilise PHP pour certaines parties de son infrastructure. 
- **E-commerce** : Sites comme ***Magento*** pour gérer des boutiques en ligne dynamiques.
- **Sites avec comptes utilisateurs** : gestion de l'inscription, de la connexion et des profils.

### Avantages de PHP :
- Facile à apprendre pour les débutants.
- Compatible avec la plupart des serveurs web (Apache, Nginx).
- Très utilisé, avec une grande communauté.
- Nombreuses bibliotèques et framworks (ex. : Laravel, Symfony).

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
***Activité*** : Suivez un tutoriel sur les variables PHP et essayez l’exercice correspondant.
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
- **Un éditeur de texte : Visual Studio Code** (gratuit, avec l’extension ***PHP Intelephense*** pour l’autocomplétion).
    - Téléchargez-le sur : [code.visualstudio.com](https://code.visualstudio.com/). 
- **PHP** : Vous devez avoir PHP installé sur votre ordinateur.
    - **Windows/Mac/Linux **: Téléchargez PHP depuis [php.net](https://www.php.net/). Suivez les instructions d’installation pour votre système. 
    - Vérifiez l’installation en ouvrant un terminal et en tapant `php -v`. Vous devriez voir la version de PHP (ex. : `PHP 8.x`). 
    - **Un terminal** : Utilisez le terminal intégré de VS Code, PowerShell (Windows), Terminal (Mac), ou tout terminal Linux. 
- **Un navigateur web** : Chrome, Firefox ou autre pour tester vos pages. 
- **Git et GitHub** : Git pour versionner votre code localement, et GitHub pour héberger et partager vos projets (exercices et projet en groupe).
    - Téléchargez Git depuis git-scm.com.
    - Créez un compte sur github.com.
    - **Voir le cours [Introduction à GitHub](./github-intro.md) pour configurer GitHub et apprendre les bases.**
- **Un dossier de travail** :
    - Créez un dossier nommé `mon_premier_site_php` sur votre ordinateur (ex. : `C:\Users\VotreNom\mon_premier_site_php ou ~/mon_premier_site_php`). 
    - À l’intérieur, créez un sous-dossier nommé **public** où vos fichiers **.php** seront placés. 

## 1.2 Activité : Configurer son environnement
**1. Installez PHP** :
- Téléchargez et installez PHP depuis [php.net](https://www.php.net/). 
- Ouvrez un terminal et tapez `php -v` pour vérifier que PHP est installé. 

**2. Installez Visual Studio Code** :
- Téléchargez et installez VS Code. 
- Installez l’extension ***PHP Intelephense*** via l’onglet Extensions.
- installez les extensions recommandées : [**Extensions**](./extensions-php.md)
TEST

**3. Installez Git** :
- Téléchargez et installez Git depuis git-scm.com.
- Vérifiez l’installation avec :
```bash
git --version
```
Vous devriez voir une version (ex. : git version 2.x.x).

**4. Créez un compte GitHub** :
- Inscrivez-vous sur github.com et vérifiez votre email.

**5. Créez la structure du projet** :
- Créez un dossier `mon_premier_site_php` sur votre bureau ou ailleurs. 
- À l’intérieur, créez un sous-dossier public. 
- Ouvrez `mon_premier_site_php` dans VS Code (Fichier > Ouvrir un dossier). 

**6. Créez un fichier PHP** :
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

**7. Lancez le serveur PHP** :
- Ouvrez le terminal dans VS Code (Terminal > Nouveau terminal) ou utilisez votre terminal système. 
- Naviguez vers le dossier **mon_premier_site_php** avec la commande :
`cd chemin/vers/mon_premier_site_php`
(Ex. : `cd ~/mon_premier_site_php` sur Mac/Linux ou `cd C:\Users\VotreNom\mon_premier_site_php` sur Windows). 
- Lancez le serveur PHP avec :
`php -S localhost:8200 -t public`
Vous devriez voir un message comme : [Tue May 20 11:58:00 2025] PHP 8.x.x Development Server started at localhost:8200. 
**8. Testez votre page** :
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
• **Syntaxe de base** :

Le code PHP est toujours encadré par les balises <?php et ?>. Tout ce qui se trouve à l’intérieur de ces balises est interprété par le serveur comme du code PHP. En dehors de ces balises, on peut écrire du HTML qui sera directement renvoyé au navigateur. Cela permet de mélanger facilement HTML et PHP dans une même page.

Exemple :

```php
<?php
    echo "Bonjour !";
?>
```

- **Variables** :

Les variables en PHP permettent de stocker des informations (comme du texte, des nombres ou des tableaux) qui pourront être utilisées ou modifiées plus tard dans le script. Une variable commence toujours par le symbole $.

Exemple : `$nom = "Alice"`;.

- **Types de données** :

PHP prend en charge plusieurs types de données, dont :

- ***String*** (chaîne de caractères) : texte entre guillemets.

Exemple : `$message = "Bienvenue !"`;

- ***Integer*** (entier) : nombre sans décimale.

Exemple : `$nombre = 10`;

- ***Float*** (nombre à virgule) : nombre décimal.

Exemple : `$prix = 9.99`;

- ***Boolean*** : true ou false, utilisé pour exprimer une condition vraie ou fausse.

Exemple : `$actif = true`;

- ***Array*** (tableau) : ensemble de valeurs regroupées.

Exemple : `$fruits = array("Pomme", "Banane", "Orange")`;

- **Affichage** :

Les fonctions **echo** et **print** permettent d'afficher du texte ou du code HTML dans la page. echo est légèrement plus rapide et peut afficher plusieurs chaînes à la fois, tandis que print retourne une valeur (utile dans certaines situations).

Exemple : 
```php
echo "Bonjour, monde !";
print "<p>Bienvenue sur mon site.</p>";
```

- **Conditions** :

Les structures conditionnelles permettent d'exécuter différents blocs de code en fonction de certaines conditions. PHP propose plusieurs formes : `if`, `else`, `elseif`, `switch`.

Exemple avec `if/else` :

```php
if ($age >= 18) {
    echo "Majeur";
} else {
    echo "Mineur";
}
```
Exemple avec `switch` :

```php
$jour = "lundi";

switch ($jour) {
    case "lundi":
        echo "Début de semaine.";
        break;
    case "vendredi":
        echo "Bientôt le week-end !";
        break;
    default:
        echo "Journée ordinaire.";
}
```

- **Boucles** :

Les boucles sont utilisées pour répéter des instructions plusieurs fois. Elles sont particulièrement utiles pour parcourir des tableaux ou répéter une tâche jusqu’à ce qu’une condition soit remplie.

- `for` : boucle avec compteur.

- `while` : exécute tant qu’une condition est vraie.

- `foreach` : utilisée pour parcourir les tableaux.

Exemple avec une boucle `for` :

```php
for ($i = 1; $i <= 5; $i++) {
    echo "Numéro : $i<br>";
}
```

Exemple avec `while` :

```php
$i = 1;
while ($i <= 3) {
    echo "Ligne $i<br>";
    $i++;
}
```

Exemple avec `foreach` :

```php
$fruits = ["Pomme", "Banane", "Cerise"];
foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}
```

- **Tableaux** :

Les tableaux permettent de stocker plusieurs valeurs dans une seule variable. On distingue :

- **Tableaux indexés** : les éléments sont accessibles par un index numérique.

- **Tableaux associatifs** : les éléments sont définis avec des clés personnalisées.

- **Tableaux multidimensionnels** : des tableaux contenant d'autres tableaux.

Exemple de tableau indexé :

```php
$fruits = ["pomme", "banane", "orange"];
```

Exemple de tableau associatif :

```php
$personne = [
    "nom" => "Alice",
    "age" => 25
];
echo $personne["nom"]; // Alice
```

- **Intégration avec HTML** :

PHP s’intègre parfaitement avec le HTML, ce qui en fait un langage de choix pour développer des sites web dynamiques. Il permet de générer du contenu HTML en fonction des données, des conditions, ou de l’interaction utilisateur. Cela signifie que vous pouvez créer des pages web qui s’adaptent automatiquement au contexte (par exemple, afficher le nom d’un utilisateur connecté, ou générer une liste d’articles depuis une base de données).

On peut insérer du code PHP directement dans une page `.html` renommée en `.php`, et alterner très facilement entre HTML statique et logique PHP.

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

Dans cet exemple :

Le HTML structure la page.

PHP insère dynamiquement un message dans la page selon la variable `$message`.

Cette intégration rend PHP très puissant pour créer des sites adaptatifs, personnalisés, et interactifs.

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
    // Déclaration d’un tableau contenant des couleurs
    $couleurs = ["rouge", "bleu", "vert"];

    // Début de la liste HTML
    echo "<ul>";

    // Parcours de chaque élément du tableau avec une boucle foreach
    foreach ($couleurs as $couleur) {
        // Affiche chaque couleur dans un élément <li>
        echo "<li>$couleur</li>";
    }

    // Fin de la liste HTML
    echo "</ul>";
?>
```

***Résultat*** : Affiche une liste HTML de couleurs.

Explication :

foreach (`$couleurs as $couleur`) : parcourt chaque valeur du tableau.

Chaque itération affiche une `<li>` avec le nom de la couleur.

Le résultat dans le navigateur sera une liste à puces : rouge, bleu, vert.

### 2.3 Exercices pratiques

**À vous de jouer** | [Exercices](./php/exercises/exercices-partie2.md)

---

## Partie 3 : Les bases de PHP avec formulaires

PHP est tres puissant dans le traitement des données des utilisateurs, notamment en récupérant les informations envoyées via les formulaires HTML. Cette section explore comment PHP interagit avec les formulaires.

### 3.1 Concepts clés
- **Formulaires HTML** : Permettent aux utilisateurs d’envoyer des données (ex. : texte, choix).

```php
<form action="traitement.php" method="post">
    <input type="text" name="nom">
    <input type="submit" value="Envoyer">
</form>
```

- **Méthodes HTTP** :
Les formulaires HTML utilisent principalement deux méthodes pour envoyer des données au serveur via PHP:

    - **GET** : Envoie les données en les ajoutant à l’URL. Cela rend les informations visibles dans la barre d’adresse. Elle est adaptée pour des actions non sensibles comme des recherches ou des filtres.. 
    - **POST** : Envoie les données de manière invisible dans le corps de la requête HTTP. Elle est plus sécurisée et donc recommandée pour des actions sensibles (connexion, envoi d’informations personnelles, etc.).

- **Superglobales** : Variables PHP pour récupérer les données :
PHP met à disposition des variables spéciales appelées superglobales pour accéder facilement aux données transmises par un formulaire :

    - **$_POST** : Contient les données envoyées via la méthode POST. 
    - **$_GET** : Contient les données envoyées via la méthode GET.
    
Ces tableaux associatifs permettent de récupérer les valeurs des champs de formulaire à l’aide de leur name.

- Sécurité de base : Pour éviter les failles de sécurité comme les attaques XSS (Cross-Site Scripting), il est essentiel de sécuriser les données reçues. La fonction `htmlspecialchars()` permet de convertir les caractères spéciaux en entités HTML, empêchant ainsi l’exécution de code malveillant injecté par un utilisateur.

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

**À vous de jouer** | [Exercices](./php/exercises/exercices-partie3.md)

---

## Partie 4 : Les bases de PHP avec tableaux et boucles

PHP est particulièrement efficace pour gérer des structures de données comme les tableaux. Ces structures permettent de stocker plusieurs valeurs dans une seule variable et facilitent l'organisation de données sous forme de listes ou de paires clé/valeur (tableaux associatifs).

Grâce aux boucles (for, while, foreach, etc.), PHP permet d’automatiser des tâches répétitives. Cela est très utile, par exemple, pour parcourir un tableau et afficher dynamiquement son contenu, générer des listes d’éléments HTML, ou encore exécuter un ensemble d’instructions plusieurs fois selon une condition.

### 4.1 Concepts clés
- **Tableaux associatifs** : Les tableaux associatifs en PHP permettent de stocker des paires clé-valeur, ce qui signifie que chaque élément du tableau est identifié par un nom (clé) plutôt que par un index numérique.
Cela rend les données plus lisibles et facilite leur manipulation, notamment lorsque l’on travaille avec des ensembles d’informations structurées (par exemple : un utilisateur avec un nom, une adresse email, etc.).

Ce type de tableau est très utilisé pour représenter des objets simples ou pour passer des données à des fonctions de manière organisée. 

Exemple :

```php
$utilisateur = ["nom" => "Alice", "age" => 25];
```

- **Boucle foreach** : La boucle foreach est utilisée pour parcourir chaque élément d’un tableau. Elle est particulièrement utile avec les tableaux associatifs ou numériques, car elle permet d’accéder directement à chaque valeur (et éventuellement à la clé) sans avoir à gérer manuellement les index.
Elle simplifie la lecture et le traitement de grandes quantités de données contenues dans un tableau. 

Exemple :

```php
foreach ($utilisateur as $cle => $valeur) {
    echo "$cle : $valeur<br>";
}
```

- **Fonctions** : Les fonctions en PHP sont des blocs de code réutilisables qui effectuent une tâche spécifique. Elles permettent de structurer le code, d’éviter les répétitions, et de rendre le programme plus lisible et plus facile à maintenir.
Une fonction peut prendre des paramètres (données en entrée) et retourner un résultat. 

Exemple :

```php
function saluer($nom) {
    return "Bonjour, $nom !";
}
```

- **Tableaux multidimensionnels** : En PHP, les tableaux multidimensionnels sont des tableaux contenant d'autres tableaux. Ils permettent de structurer des données complexes, comme des tableaux de données en deux dimensions (lignes/colonnes) ou des objets composés.
Ce type de structure est couramment utilisé pour gérer des listes de données associées, comme des utilisateurs avec leurs informations (nom, email, âge, etc.). 

Exemple :

```php
$equipe = [
    ["nom" => "Alice", "role" => "Designer"],
    ["nom" => "Bob", "role" => "Développeur"]
];
```

### 4.2 Exemples
**1. Tableau associatif** :

```php
<?php
    $etudiant = ["nom" => "Marie", "note" => 15];
    echo "<p>Nom : " . $etudiant["nom"] . ", Note : " . $etudiant["note"] . "</p>";
?>
```

***Résultat*** : Affiche "Nom : Marie, Note : 15".


**2. Boucle foreach** :

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


**3. Fonction et tableau multidimensionnel** :

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

**À vous de jouer** |  [Exercices](./php/exercises/exercices-partie4.md)

---

## Partie 5 : Projet en groupe - Création d’une application web interactive

**Cliquez sur le lien** : | [Projet](./php/exercises/project.md)

---

## Contact

**Posez vos questions !** | [Contact](contact.md)

[retour](./index.md) | [Passez au PHP avancé](./php-advanced.md)