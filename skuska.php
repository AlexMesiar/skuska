<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja prva stranka v PHP</title>
</head>

<body>

    <h1>Vitajte na mojej prvej PHP stranke</h1>
    <?php
    echo "<h1>hello world</h1>";
    echo "Dnes je" .  date("d.m.Y") . "<br>";
    echo "Aktualny cas je" . date("H:i:s") . "<br>";
    ?>
    
</body>
</html>


