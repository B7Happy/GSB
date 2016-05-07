<?php

namespace PPEPharBundle\Modals;

class login {

    private $identifiant;
    private $mp;

    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }


    public function getIdentifiant()
    {
        return $this->identifiant;
    }


    public function setMp($mp)
    {
        $this->mp = $mp;

        return $this;
    }


    public function getMp()
    {
        return $this->mp;
    }
}







 ?>
