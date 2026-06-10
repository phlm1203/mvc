<?php
require_once 'Model.php';
require_once 'View.php';
require_once 'Controller.php';

//Criar Instâncias
$model = new Model();
$controller = new Controller($model);
$view = new View($model);

//Verificaa a ação e executa
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'somar':
            $controller->somar();
            break;
        case 'subtrair':
            $controller->subtrair();
            break;
        case 'multiplicar':
            $controller->multiplicar();
            break;
        case 'dividir':
            $controller->dividir();
            break;
    }
}

// Exibe na tela
echo $view->output();