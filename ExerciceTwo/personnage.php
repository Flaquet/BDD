<link rel="stylesheet" href="style.css">
<?php

class Personnage{

    private $Pseudo;
    private $Vie;

    public function __construct($pseudo, $vie){

        $this->Pseudo = $pseudo;
        $vie = "100";
        $this->Vie = $vie;
       

    }

    public function affiche(){

        ?>  <span class="br"> <?php echo    "Le Joueur : ".$this->Pseudo." a  : ".$this->Vie." de Vie."; ?> </span> <?php
        

    }

}

?>
