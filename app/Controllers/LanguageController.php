<?php

namespace App\Controllers;

use App\App;

class LanguageController extends AppController
{
    public function changeLang()
    {
        $lang = $_GET['lang'] ?? null;

       if($lang){
            if(array_key_exists($lang, App::$app->getProperty('languages'))){
                $url = trim(str_replace('http://multiple.test/', '', $_SERVER['HTTP_REFERER']), '/');
                $url_parts = explode('/', $url, 2);
                if(array_key_exists($url_parts[0], App::$app->getProperty('languages'))){
                    if($lang != App::$app->getProperty('language')['code']){
                        $url_parts[0] = $lang;
                    }else{
                        array_shift($url_parts);
                    }
                }else{
                    if($lang != App::$app->getProperty('language')['code']){
                        array_unshift($url_parts, $lang);
                    }
                }
                $url = "http://multiple.test/".implode('/', $url_parts);
                redirect($url);
            }
       }
       redirect();
    }
}