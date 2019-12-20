<?php

class Personnage{

    private $_Pseudo;
    private $_Vie;
    private $_Force;


    public function __construct($force, $pseudo){

        $this->_Pseudo = $pseudo;
        $this->_Vie = "100";
        $this->_Force = $force;

    }

    public function affiche(){

        ?>  <span class="br"> <?php echo    "<p>Le Joueur : ".$this->_Pseudo." a  : ".$this->_Vie." de Vie.</p>"; ?> </span> <?php
        

    }

    public function attaquer($Joueur){

        $degas = $this->_Force;

        $Joueur->defense($degas);
        echo "<p> Le joueur ".$this->_Pseudo." Attaque le joueur ".$Joueur->getNom()." Il lui reste ".$Joueur->getVie()." Vie.</p> ";

    }

    public function defense($Degas){

        $this->_Vie = $this->_Vie - $Degas;

    }

    public function getNom(){
        return $this->_Pseudo;
    }

    public function getVie(){
        return $this->_Vie;
    }

}

?>