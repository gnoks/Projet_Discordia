<?php 

class AdminController {

    public function show(){
        require_once('view/dashboard/header.php');
        require_once('view/dashboard/footer.php');
    }

    public function addcard(){
        require_once('view/dashboard/header.php');
        require_once('view/dashboard/addcard.php');
        require_once('view/dashboard/footer.php');
    }

}