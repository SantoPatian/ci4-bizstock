<?php

namespace App\Controllers\Landing;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('landing/home');
    }
}
