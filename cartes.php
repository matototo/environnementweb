<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="mateo 2194725">
        <link rel="stylesheet" href="style.css">

        <title>projet final</title>
    </head>

    <body>
    <header>
            <a href="acceuil.html" class="menu">Acceuil</a>
            <a href="formulaireHeure.php" class="menu">Formulaire Heure</a>
            <a href="cartes.php" class="menu">Cartes</a>
            <a href="formulaireMdp.php" class="menu">Formulaire mot de passe</a>
        </header>
    </body>
    <div class="cartes">
    <?php
        $numbers = range(1, 52);
        shuffle($numbers);
        foreach ($numbers as $number) {
        echo "$number ";
}
?>
</div>
</html>