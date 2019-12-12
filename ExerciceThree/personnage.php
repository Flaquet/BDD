<?php

class Pers0nnage{

    private $Pseudo;
    private $Vie;

    public function __construct($pseudo){

        $this->Pseudo = $pseudo;
        $this->Vie = "100";

    }

    public function affiche(){

        ?>  <span class="br"> <?php echo    "Le Joueur : ".$this->Pseudo." a  : ".$this->Vie." de Vie."; ?> </span> <?php
        

    }

}

?>