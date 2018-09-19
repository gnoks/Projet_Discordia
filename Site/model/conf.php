<?php

class Conf {
    private $hostname;
    private $database_name;
    private $login;
    private $password;

   static private $databases = array(
     'hostname' => 'localhost',
     'database' => 'discordia',
     'login' => 'root',
     'password' => ''
   );
    
   static public function getHostname() {
     return self::$databases['hostname'];
   }
   static public function getDatabase() {
    return self::$databases['database'];
  }
  static public function getLogin() {
    return self::$databases['login'];
  }
  static public function getPassword() {
    return self::$databases['password'];
  }

  static private $debug = True; 
    
    static public function getDebug() {
    	return self::$debug;
    }
    
 }
