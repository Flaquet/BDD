<?php

class Personnage{

    private $_Pseudo;
    private $_Vie;
    private $_Force;
    private $_Defence;

    public function __construct($pseudo){

        $this->_Pseudo = $pseudo;
        $this->_Vie = "100";

    }

    public function affiche(){

        ?>  <span class="br"> <?php echo    "Le Joueur : ".$this->_Pseudo." a  : ".$this->_Vie." de Vie."; ?> </span> <?php
        

    }

    public function attaquer($Joueur){

        $Joueur->defense();

    }

    public function defense($Def){

        

    }

}

?>