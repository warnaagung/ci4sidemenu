<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function aa()
    {
        // die("sdsfs");
        // return "hao";
        return view('layout/admin');
    }
}