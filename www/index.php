<?php
require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl . 'Controller';
$emessages[] = new E404Exception;
try {
$controller = new $controllerClassName;

$method = 'action' . $act;

    $controller->$method();
}catch (Exception $e) {
    //output error message and exit from code
    $e->getMessage;
    $emessages =new E404Exception();
    $emessages->add($e->getMessage());
    $emessages->display('errors.php');
}