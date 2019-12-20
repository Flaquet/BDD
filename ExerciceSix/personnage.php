<?php

class Personnage{

    private $_Pseudo;
    private $_Vie;
    private $_Force;


    public function __construct($leid){

        $this->_id = $leid;
        
        try {
           
            $_id = new PDO('mysql:host=192.168.65.204; dbname=personnage;charset=utf8','DouDou', 'DouDou');
            $Bdd = $_id->query("SELECT * FROM personnage WHERE id_personnage = ".$this->_id."");   
            $TableauDeDonnee = $Bdd ->fetch();
            $this->_Pseudo =  $TableauDeDonnee['Pseudo'];
            $this->_Vie =  $TableauDeDonnee['Vie'];
            $this->_Force =  $TableauDeDonnee['Force'];
            $Bdd ->closeCursor();
            }
            catch (Exception $erreur){
                echo "".$erreur;
                }   


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

        try {
           
            $_id = new PDO('mysql:host=192.168.65.204; dbname=personnage;charset=utf8','DouDou', 'DouDou');
            $Bdd = $_id->query("UPDATE personnage SET personnage.Vie = personnage.Vie - ".$this->_Force." WHERE id_Personnage = ".$this->_id."");   
            
            }
            catch (Exception $erreur){
                echo "".$erreur;
                }   

    }

    public function getNom(){
        return $this->_Pseudo;
    }

    public function getVie(){
        return $this->_Vie;
    }

    public function soin(){


        
    }

}

?>