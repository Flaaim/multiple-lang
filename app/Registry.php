<?php

namespace App;

class Registry
{
    protected static $instance = null;
    
    protected $properties = [];
    
    private function __construct(){}

    public static function getInstance()
    {
        if(!self::$instance){
            return self::$instance = new Registry;
        }
        return self::$instance;
    }

    public function setProperty($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function getProperty($name)
    {
        return $this->properties[$name] ?? null;
    }
    public function getProperties()
    {
        return $this->properties;
    }
    
}