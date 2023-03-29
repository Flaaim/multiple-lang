<?php

namespace App;

class Db
{
    protected static $instance;

    private function __construct(){}
    
    public static function getInstance()
    {
        if(!self::$instance){
            require_once("../config/connect.php");
            
            try{
                return self::$instance = new \PDO($dsn, $user, $pass, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
            }catch(\PDOException $e){
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }
        return self::$instance;
    }

}