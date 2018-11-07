<?php
session_start();
/**
* Index Discordia
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
require_once('loader.php');
require_once('ini.php');

if(!isset($_SESSION['user'])){
    $_SESSION['user'] = [];
}
$ctrl = 'AccueilController';
$method = 'affichage';

if(!empty($_GET['c'])){
    $ctrl = ucfirst($_GET['c']).'Controller';
}

if (class_exists($ctrl)) {
    $controller = new $ctrl;    
}else{
    header('Location:views/page_404.html');
    exit;
}

if (!empty($_GET['a']) ){
    $method = $_GET['a'];

}

if (method_exists($controller,$method)) {
    $controller -> $method();    
}else{
    header('Location:views/page_404.html');
    exit;
}

