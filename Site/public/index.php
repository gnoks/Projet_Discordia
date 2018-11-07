<?php

require_once('ini.php');
require_once(ROOT.'/App/App.php');
App::load();

$page = isset($_GET['p']) ? $_GET['p'] : 'partie';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerName = 'App\Controllers\\'.ucfirst($page) . 'Controller';
 
$controller = class_exists($controllerName) ? new $controllerName : new App\Controllers\Controller;
method_exists($controller, $action) ? $controller->$action() : $controller->notFound();
