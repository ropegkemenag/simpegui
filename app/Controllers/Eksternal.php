<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Eksternal extends BaseController
{
    public function index()
    {
        return view('eksternal');
    }
}
