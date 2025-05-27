<?php
// Définition de la fonction pour calculer la moyenne
function calculerMoyenne($notes) {
    if (count($notes) === 0) {
        return 0;
    }
    $somme = array_sum($notes);
    return $somme / count($notes);
}

// Tableau de notes d'exemple
$mesNotes = [85, 90, 88];

// Appel de la fonction
$moyenne = calculerMoyenne($mesNotes);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Moyenne des notes</title>
</head>
<body>
    <h1>Résultat de la moyenne</h1>
    <p>La moyenne des notes est : <?php echo round($moyenne, 2); ?></p>
</body>
</html>
