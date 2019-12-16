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

        $Personnage1 = new Personnage("20", "Edouard");
        $Personnage2 = new Personnage("12","Julien");

        $Personnage1->affiche();
        $Personnage2->affiche();

        $Personnage1->Attaquer($Personnage2);
        $Personnage2->attaquer($Personnage1);

    ?>
</body>
</html>