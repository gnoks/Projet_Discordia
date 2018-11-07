<?php
namespace App\Models;
use \PDO;
use \PDOException;
class Model {

    
    public static $pdo;
    protected $_db;

    public function __construct(){
        $this->_db = SPDO::getInstance( DB_HOST, DB_NAME, DB_LOGIN, DB_PWD )->getPDO();
    }

    public static function Init() {
        try{
            $hostname = Conf::getHostname();
            $database_name = Conf::getDatabase();
            $login = Conf::getLogin();
            $password = Conf::getPassword(); 
            
            self::$pdo = new \PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
            array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            if (Conf::getDebug()) {
              echo $e->getMessage(); // affiche un message d'erreur
            } else {
              echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
          }
    }


}
