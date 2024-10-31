<?php 
session_start();

$requisicao = trim(strtolower($_SERVER['REQUEST_URI']));

$requisicao = str_replace("/uc8/biblioteca/", "", $requisicao);

$segmentos = explode("/",$requisicao);

$controlador = isset($segmentos[0]) ? $segmentos[0] : "biblioteca-adm";
$metodo = isset($segmentos[1]) ? $segmentos[1] : "index";
$identificador = isset($segmentos[2]) ? $segmentos[2] : null;

switch($controlador){
    case "biblioteca-adm":
        require "controllers/BibliotecaController.php";
        $controller = new BibliotecaController();
        break;
    case "usuario": 
        require "controllers/UsuarioController.php";
        $controller = new UsuarioController();
        break;
    case "login":
        require "controllers/LoginController.php";
        $controller = new LoginController();
        break;
    case "autor":
        require "controllers/AutorController.php";
        $controller = new AutorController();
        break;
    case "sair":
        require "controllers/SairController.php";
        $controller = new SairController();
        break;
        
    default:
        echo "Pagina não encontrada ";
        break;
}

if($identificador){
    $controller->$metodo($identificador);
}
else {
    $controller->$metodo();
}



