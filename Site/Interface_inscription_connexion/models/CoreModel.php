<?php
class CoreModel{
    protected $db;
    public function __construct() {
        try {
          $this->db = new PDO(DB_ENGINE.':'.DB_HOST.'=;dbname='.DB_NAME.';charset='.DB_CHARSET, DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } catch(PDOException $e) {
          throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
      }
}