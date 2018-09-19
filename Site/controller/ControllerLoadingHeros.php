<?php
require_once '../model/heros.php';

class ControllerHeros {

    public function heroMiss(){
        return $heroJ1 = new heros("Miss Camping");
    }
    public function heroIrma(){
        return $heroJ2 = new heros("Madame Irma");
    }
    public function heroRdm() {
        return mt_rand(1,2);      
    } 
}