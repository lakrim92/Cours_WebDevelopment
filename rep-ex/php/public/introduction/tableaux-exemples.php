<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tableaux et boucles</h1>
    <h2>Tableaux associatifs</h2>
    <?php
    $utilisateurs = ["nom" => "Alice", "age" => 25];
    echo "bonjour " . $utilisateurs["nom"] . ", votre age est de " . $utilisateurs["age"] . "ans";
    ?>
    <h2>Boucle foreach</h2>
    <?php
    $utilisateurs = ["nom" => "Alice", "age" => 25];

    foreach ($utilisateurs as $cle => $valeur) {
        echo "$cle : $valeur<br>";
    }
    ?>
    <h2>Fonctions</h2>
    <?php
        $utilisateurs = ["nom" => "Alice", "age" => 25];

        function saluer($nom) {
        return "Bonjour, $nom !";
        }

        // Appel de la fonction avec le nom de l'utilisateur
        echo saluer($utilisateurs["nom"]);
    ?>
    <!-- <h2>Tableaux multidimensionnels</h2> -->
    <?php
    $equipe = [
        ["nom" => "Alice", "role" => "Designer"],
        ["nom" => "Bob", "role" => "Développeur"]
    ];
    ?>
    <h1>4.2 Exemples</h1>
    <h2>Tableau associatif</h2>
    <?php
        $etudiant = ["nom" => "Marie", "note" => 15];
        echo "<p>Nom : " . $etudiant["nom"] . ", Note : " . $etudiant["note"] . "</p>";
    ?>
    <h2>Boucle foreach</h2>
    <?php
    $jours = ["Lundi", "Mardi", "Mercredi"];
    echo "<ul>";
    foreach ($jours as $jour) {
        echo "<li>$jour</li>";
    }
    echo "</ul>";
    ?>
    <h2>Fonction et tableau mutlidimensionnel</h2>
    <?php
    // Déclaration d'une fonction nommée afficherEquipe qui prend un paramètre : $equipe
    function afficherEquipe($equipe) {
        // Démarre une liste HTML non ordonnée
        echo "<ul>";

        // Boucle à travers chaque membre de l'équipe
        foreach ($equipe as $membre) {
            // Affiche un élément de liste contenant le nom et le rôle du membre
            echo "<li>" . $membre["nom"] . " - " . $membre["role"] . "</li>";
        }

        // Ferme la liste HTML
        echo "</ul>";
    }

    // Déclaration d’un tableau associatif représentant l’équipe
    $equipe = [
        ["nom" => "Alice", "role" => "Designer"],
        ["nom" => "Bob", "role" => "Développeur"]
    ];

    // Appel de la fonction pour afficher les membres de l’équipe
    afficherEquipe($equipe);
    ?>
</body>
</html>