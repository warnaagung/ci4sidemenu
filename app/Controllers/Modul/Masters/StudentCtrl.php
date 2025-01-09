<?php

namespace App\Controllers\Modul\Masters;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentCtrl extends BaseController
{
    public function index()
    {
        //
    }

    public function utama(){
        return view('modul/master/lsstudent');
    }
}
