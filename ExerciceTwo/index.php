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

    $Jouer1 = new Personnage("Julien", "");
    $Jouer1->affiche();
    $Jouer2 = new Personnage("Edouard", "");
    $Jouer2->affiche();

    ?>

    <textarea name="" id="" cols="70" rows="30">
    Index
    <php

    $Jouer1 = new Personnage("Julien", "");
    $Jouer1->affiche();
    $Jouer2 = new Personnage("Edouard", "");
    $Jouer2->affiche();
 
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

    public function affiche(){

        ?>  <span class="br"> 
            <php 
        echo    "Le Joueur : ".$this->Pseudo." a  : ".$this->Vie." de Vie."; 
        ?> 
    </span> 
    <php
        

    }

}

    ?>

    </textarea>


</body>

</html>