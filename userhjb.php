<?php

class Userhgv
{

    private $_username;
    private $_password;

    public function AfficherNom()
    {
        echo "<p> Le nom est " . $this->_username . "</p>";
    }
    public function AfficherMdp()
    {
        echo "<p> Le MDP est " . $this->_password . "</p>";
    }
    public function setMdp($password)
    {
        $this->_password = $password;
    }
    public function setNom($NouveauNom)
    {
        $this->_username = $NouveauNom;
    }
    public function verifMdp($usrname, $pwd)
    {
        if ($usrname == $this->_username) {
            if ($pwd == $this->_password) {
                return true;
            }
        }
        return false;
    }
}
