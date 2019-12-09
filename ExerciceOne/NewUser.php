<?php

    class User {

        private $NOM;
        private $PRENOM;

        public function AfficheUser(){
            echo "Je suis un User ".$this->NOM." ".$this->PRENOM;
        }

        public function setNomPrenom($newNom , $newPrenom){
            $this->NOM = $newNom;
            $this->PRENOM = $newPrenom;
        }

    }

?>