<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HeaderWeb extends BaseController
{
    public function index()
    {
        return view('v_header');
    }
}
