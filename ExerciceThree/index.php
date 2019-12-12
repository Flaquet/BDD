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

    $Joueur1 = new Personnage("julien");
    $Joueur1->affiche();
    $Joueur2 = new Personnage("Edouard");
    $Joueur2->affiche();

    ?>

    <textarea name="" id="" cols="70" rows="30">
    Index
    <php

    $Joueur1 = new Personnage("Julien");
    $Joueur1->affiche();
    $Joueur2 = new Personnage("Edouard");
    $Joueur2->affiche();
 
    ?>
    Personnage
    <php

    class Personnage{

private $_Pseudo;
private $_Vie;

public function __construct($pseudo){

    $this->_Pseudo = $pseudo;
    $this->_Vie = "100";
   

}


}
public function affiche(){

?>  <span class="br">
     <php
 echo    "Le Joueur : ".$this->_Pseudo." a  : ".$this->_Vie." de Vie."; ?> 
</span> 
<php


}


    ?>

    </textarea>


</body>

</html>