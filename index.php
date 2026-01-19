<?php
require_once "autoload.php";
session_start();

$controller = new BestiaController();

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'index':
        $controller->index();
        break;
    case 'avistamiento':
        $controller->avistamiento();
        break;
    case 'censo':
        $controller->censo();
        break;
    case 'liberar':
        $controller->liberar();
        break;
    case 'sanacion':
        $controller->sanacion();
        break;
    default:
        $controller->index();
        break;
}
