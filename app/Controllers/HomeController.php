<?php

namespace App\Controllers;

class HomeController extends AppController
{
    function index()
    {
        return $this->template->render('home/index');
    }
}