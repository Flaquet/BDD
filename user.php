<?php

    class User {

        private $_nom;
        private $_mdp;

        public function AfficherNom(){

            echo "<p> Le nom est ".$this->_nom."</p>";

        }

        public function AfficherMdp(){

            echo "<p> Le nom est ".$this->_mdp."</p>";

        }

        public function setMdp($mdp){

            $this->_mdp = $mdp;

        }


        public function setNom($NouveauNom){

            $this->_nom = $NouveauNom;

        }

    }

?>
