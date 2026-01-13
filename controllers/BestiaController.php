<?php

class BeastiaController{
    private $gestor;

    public function __construct() {
    $this->gestor = new GestorBestias();
    }

    public function index() {
        $bestia = $this->gestor->listar();
        include "views/listar.php";
    }

    public function avistamiento() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = uniqid(); 
            $nombre = $_POST['nombre'];
            $especie = $_POST['especie'];
            $p_lvl = $_POST['nivel peligrosidad'];
            $estado_salud = $_POST['estado salud'];

            $producto = new Bestia($nombre, $especie, $p_lvl, $estado_salud);
            $this->gestor->avistamiento($bestia);

            header("Location: index.php");
            exit;
        }

        include "views/crear.php";
}
}