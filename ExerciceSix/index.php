<?php require("personnage.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        $Personnage1 = new Personnage(1);
        $Personnage2 = new Personnage(2);

        $Personnage1->affiche();
        $Personnage2->affiche();

        $Personnage1->attaquer($Personnage2);

    ?>
    <?php
        echo 
     highlight_file(
     './'.
     basename(
     __FILE__),
     true);
?>
</body>
</html>