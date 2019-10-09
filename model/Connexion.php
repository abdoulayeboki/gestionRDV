<?php
class Connexion{
   
    private static   $instance=null;
 
    
    private function __construct() { }    
   public static function getInstance()
    {
        if(self::$instance == null)  {
        try {
            self::$instance = new PDO("mysql:host=localhost;dbname=gestionRdv",'admin','admin');
        } catch (Exception $e) {
            die ('Erreur'.$e->getMessage());
        }
    }
    return self::$instance;

    
    }
}