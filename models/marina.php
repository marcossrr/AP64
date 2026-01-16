<?php

class Marina extends Bestia{
    private $profundidad_max;

    public function __construct($nombre, $especie, $p_lvl, $estado_salud, $profundidad_max){
        parent::__construct($nombre, $especie, $p_lvl, $estado_salud);
        $this->profundidad_max = $profundidad_max;
    }

    public function getProfundidad(){
        return $this->profundidad_max;
    }

    public function setProfundidad($profundidad_max){
        $this->profundidad_max = $profundidad_max;
    }
}