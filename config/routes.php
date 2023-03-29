<?php

$router->get('/language/change', ['\App\Controllers\LanguageController', 'changeLang']);
$router->get('/product/{slug}?', ['\App\Controllers\TestController', 'index']);
$router->get('/', ['\App\Controllers\HomeController', 'index']);
