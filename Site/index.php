<?php

spl_autoload_register(function($className){
    if(file_exists('model/' . $className . '.php')){
    require_once('model/' . $className . '.php');
    }
    if(file_exists('controller/' . $className . '.php')){
    require_once('controller/' . $className . '.php');
    }
});

$load = new PartieController;

$deck1 = $load -> chargementJoueur1();
$deck2 = $load -> chargementJoueur2();


if(!empty($_GET['p'])){
    $controllerName = ucfirst( strtolower($_GET['p'])).'Controller';
    if( class_exists($controllerName)){
        $controller = new $controllerName;
        $controller->show(); 
    }
    if(!empty($_GET['action'])){
        $method = $_GET['action'];
        if(method_exists($controller, $method)) $controller->$method();
        
    } 
}
// include( 'views/inc/header.php' );
// include( 'views/BoardView.php' );
// include( 'views/inc/footer.php' );

