<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
        <li><a href="exercice3.php">Exercice 3</a></li>
        <li><a href="exercice5.php">Exercice 5</a></li>
        </ul>
        <p>
            <?php
            // declaration d'une variable 
            $number = 1;
            // boucle tant que la  variable n'atteint pas 10
            while ($number <= 10) {
                // tu maffiche la moitier de la variable
                echo $number / 2 . ' ';
                // incrementation
                $number++;
            }
            ?>
        </p>
    </body>
</html>