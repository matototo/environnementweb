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

    <form>
        <input type="password" name="mot de passe" maxlength="4" required>
        <input type="submit" name="submitBtn">
    </form>

    <?php

        function crackMDP($mdp)
        {
            $symboles = [];
            foreach (range('a', 'z') as $char) 
            {
                $symboles[] = $char;
            }
            foreach(range(0, 9) as $num)
            {
                $symboles[] = "".$num;
            }
            for($i = 0; $i < count($symboles); $i++)
            {
                for($j = 0; $j < count($symboles); $j++)
                {
                    for($k = 0; $k < count($symboles); $k++)
                    {
                        $mdp_3 = $symboles[$i].$symboles[$j].$symboles[$k];
                        if($mdp_3 == $mdp){return;}

                        for($l = 0; $l < count($symboles); $l++)
                        {
                            $mdp_4 = $symboles[$i].$symboles[$j].$symboles[$k].$symboles[$l];
                            if($mdp_4 == $mdp){return;}
                            for($m = 0; $m < count($symboles); $m++)
                        }
                    }
                }
            }
            
        }
        function mesure_time($mdp)
        {
            $s = microtime(TRUE);
            crackMDP($mdp);
            $e = microtime(TRUE);
            $exec = $e-$s;
            echo "Time(".$mdp.") : " . number_format((float)$exec, 2, '.', '') . "s ";
        }
        mesure_time("auto5");
        mesure_time("car4");
        mesure_time("zo3");
        ?>
    
</html>