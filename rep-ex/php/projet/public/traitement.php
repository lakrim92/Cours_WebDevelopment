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