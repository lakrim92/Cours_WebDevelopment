<!-- public/traitement.php -->
<?php
    // $nom = htmlspecialchars($_POST["nom"]);
    //     echo "<p>Bonjour, $nom !</p>";
    $nom = htmlspecialchars($_POST["nom"]);
    if (empty($nom)) {
        echo "<p>Erreur : veuillez entrer un nom.</p>";
    } else {
        echo "<p>Bienvenue, $nom !</p>";
    }
?>

