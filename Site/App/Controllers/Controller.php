<?php

namespace App\Controllers;

class Controller {

    protected $viewPath;
    protected $layout = 'default';

    public function __construct(){
        
        $this->viewPath = ROOT. 'App/Views/';
        
    }

    protected function render($view, $variables = []){
        ob_start();
        extract($variables);
        require_once($this->viewPath . $view . '.php');
        $content=ob_get_clean();
        require_once($this->viewPath . 'layout/' . $this->layout.'.php');
    }

    public function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Acces interdit');
    }

    public function notFound(){
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }
    
}