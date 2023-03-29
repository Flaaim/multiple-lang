<?php

namespace App\Controllers;

class TestController extends AppController
{
    public function index($slug = '')
    {
        return $this->template->render('products/index');
        
    }
}