<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 7</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
        <li><a href="exercice6.php">Exercice 6</a></li>
        <li><a href="exercice8.php">Exercice 8</a></li>
        </ul>
        <p>
            <?php
            // boucle for la variable + la condition + l'incrementation
            for ($number = 1; $number <= 100; $number += 15) {
                //on affiche ca
                echo 'On tient le bon bout.';
                ?>
        </p>
        <p>
            <?php
            }
            ?>
        </p>
    </body>
</html>