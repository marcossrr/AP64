<?php

class BestiaController{
    private $gestor;

    public function __construct() {
    $this->gestor = new GestorBestias();
    }

        public function index() {
        $bestias = $this->gestor->censo();
        include "views/censo.php";
    }

    public function avistamiento() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nombre = $_POST['nombre'] ?? null;
        $especie = $_POST['especie'] ?? null;
        $p_lvl = $_POST['nivel_peligrosidad'] ?? null;
        $estado_salud = $_POST['estado_salud'] ?? null;

            $bestia = new Bestia($nombre, $especie, $p_lvl, $estado_salud);
            $this->gestor->avistamiento($bestia);

            header("Location: index.php");
            exit;
    }

    include "views/avistamiento.php";
}

public function censo() {
    $bestias = $this->gestor->censo();

    if ($bestias === null) {
        $bestias = [];
    }

    include "views/censo.php";
}

    public function sanacion() {
        $nombre = $_GET['id'] ?? null;
        $bestia = $this->gestor->censo($nombre);

        if (!$bestia) {
            echo "Bestia no avistada";
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->gestor->sanacion($id, $_POST['nombre'], $_POST['especie'], $_POST['nivel_peligrosidad'], $_POST['estado_salud']);
            header("Location: index.php");
            exit;
        }

        include "views/sanacion.php";
    }

public function liberar() {
    $nombre = $_GET[''] ?? null;

    if (!$nombre) {
        echo "No se especificó ninguna bestia";
        exit;
    }

    $eliminado = $this->gestor->liberar($nombre);

    if ($eliminado) {
        header("Location: index.php?accion=censo");
        exit;
    } else {
        echo "No se pudo liberar la bestia";
    }
}

}