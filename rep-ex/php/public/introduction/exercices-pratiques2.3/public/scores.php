<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $scores = [
        "Alice" => 85,
        "Bob" => 90,
        "Serge" => 70
    ];

    foreach ($scores as $nom => $note) {
        echo "<p>$nom : $note</p>";
    }
    ?>
</body>
</html>