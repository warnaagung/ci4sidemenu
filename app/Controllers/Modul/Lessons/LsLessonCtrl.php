<?php

namespace App\Controllers\Modul\Lessons;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LsLessonCtrl extends BaseController
{
    public function index()
    {
        return view('modul/lessons/lslessons');
    }
}
