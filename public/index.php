<?php

use App\App;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use App\Db;

require_once("../vendor/autoload.php");
require_once('../config/helpers.php');

$router = new RouteCollector();
$app = new App;
App::$app->setProperty('db', Db::getInstance());
App::$app->setProperty('templates', new League\Plates\Engine('../views'));

require_once("../config/routes.php");

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

function urlInput()
{

    $url = parse_url(trim($_SERVER['REQUEST_URI'], '/'), PHP_URL_PATH);

    
    $url_parts = explode('/', $url, 2);
    
    
        if(strlen($url_parts[0]) == 2){
            App::$app->setProperty('lang', $url_parts[0]);
            if(count($url_parts) < 2){
                $url = '/';
                return $url;
            }
            $url = $url_parts[1]; 
            return $url;
        }
    
        
    return $url;
}



$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], urlInput());
echo $response;