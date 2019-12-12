<?php

    class User {

        private $_NOM;
        private $_PRENOM;

        public function AfficheUser(){
            echo "Je suis un User ".$this->_NOM." ".$this->_PRENOM;
        }

        public function setNomPrenom($newNom , $newPrenom){
            $this->_NOM = $newNom;
            $this->_PRENOM = $newPrenom;
        }

    }

?>