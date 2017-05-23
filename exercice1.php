<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice2.php">exercice2</a></li>
        </ul>
        <p>
            <?php
            //declaration de la variable 
            $number = 0;
            // boucle qui se repete jusqua tant qu'il sois strictement infferieur a 10
            while ($number < 10) {
                //affiche les nombres
                echo $number;
                // incrementation 
                $number++;
            }
            ?>
        </p>
    </body>
</html>