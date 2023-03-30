<?php

function redirect($http = false){
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'http://multiple.test';
    }
    header("Location: $redirect");
    die();
}

function baseurl()
{
    return "http://multiple.test".'/'.(\App\App::$app->getProperty('lang') ? \App\App::$app->getProperty('lang') : '');
}