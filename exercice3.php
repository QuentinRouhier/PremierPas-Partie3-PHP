<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
        <li><a href="exercice2.php">Exercice 2</a></li>
        <li><a href="exercice4.php">Exercice 4</a></li>
        </ul>
        <p>
            <?php
            // declaration de deux variable
            $firstNumber = 100;
            $secondNumber = 28;
            // creation d'un boucle, première variable n'est pas inférieur ou égale à 10
            while ($firstNumber >= 10) {
                // multiplication des deux varaibles
                echo $firstNumber * $secondNumber . '<br>';
                //decrementation 
                $firstNumber--;
            }
            ?>
        </p>
    </body>
</html>