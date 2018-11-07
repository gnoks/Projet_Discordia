<?php 
namespace App\Controllers;
use App\Models\HabiliterModel;
use App\Models\CarteModel;
class AdminController extends Controller {

    protected $layout = 'admin';
    

    public function index(){
        $this->render('admin/home');
    }

    public function addcard(){
        $habiliter = new HabiliterModel;
        $listHabiliter = $habiliter->read();
        $this->render('admin/addcard', \compact('listHabiliter'));
    }

    public function editcard(){
        $carteModel = new CarteModel;
        $habiliter = new HabiliterModel;
        $listHabiliter = $habiliter->read();
        
        if(!empty($_GET['id'])) $id = $_GET['id'];
        else $this->notFound();
        $carte = $carteModel->read($id);
        $habiliterCard = $habiliter->readHabiliterByCard($id);
        if($carte !== false ) $this->render('admin/editcard', \compact('carte', 'listHabiliter', 'habiliterCard'));
        else $this->notFound();
    }

    public function editingcard(){
        $carteModel = new CarteModel;
        if(isset($_GET['id'])) $id = $_GET['id'];
        else $this->notFound();
        $carteModel->update($_POST, $id);
        $this->readcard();
    }

    public function addingcard(){
        $carteModel = new CarteModel;
        $carteModel->create($_POST);
        $this->readcard();
    }

    public function readcard(){
        $carteModel = new CarteModel;
        $habiliter = new HabiliterModel;
        $cartes = $carteModel->read();
        foreach($cartes as $k=>$v){
            $cartes[$k]['habiliter'] = $habiliter->readHabiliterByCard($v['car_id'])['hab_type'];
        }
        $this->render('admin/readcard', \compact('cartes'));
    }

    public function deletecard(){
        $carteModel = new CarteModel;
        $habiliter = new HabiliterModel;
        
        if(!empty($_GET['id'])){
            $habiliter->delete($_GET['id']);
            $carteModel->delete($_GET['id']);
        } else $this->notFound();
        $this->readcard();
    }

}