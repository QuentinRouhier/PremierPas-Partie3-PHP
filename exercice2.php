<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice1.php">Exercice 1</a></li>
            <li><a href="exercice3.php">Exercice 3</a></li>
        </ul>
        <p>
            <?php
            // declaration des deux valeurs
            $firstNumber = 0;
            $secondNumber = 58;
            // boucle qui ce repete jusqua temps que la premiere variable est strictement infferieur a 20 
            while ($firstNumber < 20) {
                // multiplication des deux variables
                echo $firstNumber * $secondNumber . ' ';
                // incrementation de la premiere variable
                ?>
        </p>
        <p>
            <?php
                $firstNumber++;
            }
            ?>
        </p>
    </body>
</html>