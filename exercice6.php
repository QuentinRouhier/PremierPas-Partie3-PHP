<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 6</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
        <li><a href="exercice5.php">Exercice 5</a></li>
        <li><a href="exercice7.php">Exercice 7</a></li>
        </ul>
        <p>
            <?php
            // boucle for la variable + la condition + l'incrementation
            for ($number = 20; $number >= 0; $number--) {
                //on affiche ca
                echo 'C\'est presque bon.<br/>';
            }
            ?>
        </p>
    </body>
</html>