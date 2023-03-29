<?php

namespace App\Controllers;

use App\App;
use App\Widgets\Language\Language;

class AppController
{
   
    protected $template;

    public function __construct()
    {
        $this->template = App::$app->getProperty('templates');
        App::$app->setProperty('languages', Language::getLanguages());
        App::$app->setProperty('language', Language::getLanguage(App::$app->getProperty('languages')));
        //var_dump(App::$app->getproperties());
    
        
    }
}