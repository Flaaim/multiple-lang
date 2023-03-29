<?php

namespace App;

use App\Registry;

class App
{
    
    public static $app;

    public function __construct()
    {
        self::$app = Registry::getInstance();
    }

}