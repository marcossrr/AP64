<?php

class Terrestre extends Bestia{
    private $habitat;

    public function __construct($nombre, $especie, $p_lvl, $estado_salud, $habitat){
        parent::__construct($nombre, $especie, $p_lvl, $estado_salud);
        $this->habitat = $habitat;
    }

    public function getHabitat(){
        return $this->habitat;
    }

    public function setHabitat($habitat){
        $this->habitat = $habitat;
    }
}