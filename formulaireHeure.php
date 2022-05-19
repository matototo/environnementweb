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

        <form method="GET">
            <input type="time" name="heure"><br>
            <label for="heure">Veuillez devinez l'heure</label><br>
            <input type="submit" name="submitBtn">
        </form>

        <?php
            require_once ("infoFormulaire.php") ;
            if $verif {
                echo "tres bien"
            }
        ?>
    </body>
</html>
