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

    <h1>Exercice 2</h1>

    <?php

    $Jouer1 = new Personnage("Julien");
    $Jouer2 = new Personnage("Edouard");

    ?>

    <textarea name="" id="" cols="70" rows="30">
    Index
    <php

    $Jouer1 = new Personnage("Julien");

    $Jouer2 = new Personnage("Edouard");

 
    ?>
    Personnage
    <php

    class Personnage{

    private $Pseudo;
    private $Vie;

        public function __construct($pseudo, $vie){

        $this->Pseudo = $pseudo;
        $vie = "100";
        $this->Vie = $vie;
       

        }


    }

    ?>

    </textarea>


</body>

</html>