<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class user extends BaseController
{
    public function index()
    {
        return view("login/v_login");
    }
}