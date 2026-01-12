<?php

class Voladora extends Bestia{
    private $enver_alas;

    public function __construct($nombre, $especie, $p_lvl, $estado_salud, $enver_alas){
        parent::__construct($nombre, $especie, $p_lvl, $estado_salud);
        $this->enver_alas = $enver_alas;
    }

    public function getAlas(){
        return $this->enver_alas;
    }

    public function setAlas(){
        $this->enver_alas = $enver_alas;
    }
}