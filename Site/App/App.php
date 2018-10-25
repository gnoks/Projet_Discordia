<?php 
use App\Autoloader;

class App {
    public static function load(){
        session_start();
        require ROOT.'App/Autoloader.php';
        Autoloader::register();
    }
}