<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('site/templates/header')
            . view('site/home')
            . view('site/templates/footer');
    }
}
