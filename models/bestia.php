<?php

class Bestia{
    private $nombre;
    private $especie;
    private $p_lvl;
    private $estado_salud;

    public function __construct($nombre, $especie, $p_lvl, $estado_salud){
        $this->nombre = $nombre;
        $this->especie = $especie;
        $this->p_lvl = $p_lvl;
        $this->estado_salud = $estado_salud;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEspecie(){
        return $this->especie;
    }

    public function getNivel(){
        return $this->p_lvl;
    }

    public function getSalud(){
        return $this->estado_salud;
    }

    public function setNombre(){
        $this->nombre = $nombre;
    }

    public function setEspecie(){
        $this->especie = $especie;
    }

    public function setNivel(){
        $this->p_lvl = $p_lvl;
    }

    public function setSalud(){
        $this->estado_salud = $estado_salud;
    }

}