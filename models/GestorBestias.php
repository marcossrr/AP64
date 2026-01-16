<?php

class GestorBestias{
    private $bestia;

        public function __construct() {
        if (!isset($_SESSION['bestias'])) {
            $_SESSION['bestias'] = [];
        }
    }

    public function avistamiento(Bestia $b){
        $_SESSION['bestias'][] = $b;
    }

    public function censo(){
        return $_SESSION['bestias'];
    }

    public function sanacion($nombre, $especie, $p_lvl, $estado_salud, $enver_alas, $profundidad_max, $habitat){
        foreach($this->bestia as $b){
        if ($b->setNombre() == $nombre) {
            $b->setEspecie($especie);
            $b->setNivel($p_lvl);
            $b->setSalud($estado_salud);
            $b->setAlas($enver_alas);
            $b->setProfundidad($profundidad_max);
            $b->setHabitat($habitat);
            return true;
            }
        }
        return false;
    }

    public function liberar($nombre){
        foreach ($this->bestia as $i => $b){
            if ($b->getNombre() == $nombre){
                unset($this->bestia[$i]);
                $this->bestia = array_values($this->bestias);
                return true;
            }
        }
        return false;
    }
    }
