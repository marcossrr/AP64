<?php
require_once "autoload.php";
session_start();

$controller = new ProductoController();

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'avistamientos':
        $controller->avistamiento();
        break;
    case 'censo':
        $controller->censo();
        break;
    case 'liberar':
        $controller->liberar();
        break;
    case 'Sanacion':
        $controller->sanacion();
        break;
    default:
        $controller->index();
}
