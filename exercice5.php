<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
        <li><a href="exercice4.php">Exercice 4</a></li>
        <li><a href="exercice6.php">Exercice 6</a></li>
        </ul>
        <p>
            <?php
            // boucle for la variable + la condition + l'incrementation
            for ($number = 1; $number <= 15; $number++) {
                // on affiche ca 
                echo 'On y arrive presque <br/>';
            }
            ?>
        </p>
    </body>
</html>