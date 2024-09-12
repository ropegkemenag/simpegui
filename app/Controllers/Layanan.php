<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Layanan extends BaseController
{
    public function index()
    {
        return view('layanan');
    }

    public function kenaikanpangkat()
    {
      return view('layanan/kenaikanpangkat');
    }
}
