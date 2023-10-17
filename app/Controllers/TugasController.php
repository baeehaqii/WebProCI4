<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TugasController extends BaseController
{
    public function index()
    {
        return view('landingpage');
    }
}
