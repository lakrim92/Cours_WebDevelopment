<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction php</title>
</head>
<body>
    <h1>2.1 Concept clés</h1>
    <h2>Syntaxe de base</h2>
    <?php
        echo "Bonjour";
    ?>
    <h2>echo et print</h2>
    <?php
        echo "Bonjour, monde !";
        print "<p>Bienvenue sur mon site.</p>";
    ?>
    <h1>Conditions</h1>
    <h2>if/else</h2>
    <?php
    $age = 20;
        if ($age >= 18) {
            echo "Majeur";
        } else {
            echo "Mineur";
        }
    ?>
    <h2>switch</h2>
    <?php
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
    ?>
    <h1>Boucles</h1>
    <h2>for</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Numéro : $i<br>";
    }
    ?>
    <h2>while</h2>
    <?php
    $i = 1;
    while ($i <= 3) {
        echo "Ligne $i<br>";
        $i++;
    }
    ?>
    <h2>foreach</h2>
    <?php
    $fruits = ["Pomme", "Banane", "Cerise"];
    foreach ($fruits as $fruit) {
        echo "$fruit<br>";
    }
    ?>
    <h1>Tableaux</h1>
    <h2>Tableau indexé</h2>
    <?php
    $fruits = ["pomme", "banane", "orange"];
    echo "<ul>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";
    ?>
    <h2>Tableau associatif</h2>
    <?php
    $personne = [
        "nom" => "Alice",
        "age" => 25
    ];
    echo $personne["nom"]; // Alice
    ?>
    <h1>2.2 Exemples</h1>
    <h2>Affichage simple</h2>
    <?php
        $message = "Bienvenue sur mon site !";
        echo "<h1>$message</h1>";
    ?>
    <h2>Condition</h2>
    <?php
        $heure = 14;
        if ($heure < 12) {
            echo "<p>Bonjour, il est matin !</p>";
        } else {
            echo "<p>Bonjour, il est l'après-midi !</p>";
        }
    ?>
    <h2>Boucle et tableau</h2>
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
</body>
</html>