<?php

namespace App\Controllers\V2;
use App\Controllers\BaseController;

class Presensi extends BaseController
{
    public function index(): string
    {
        return view('v2/presensi');
    }

    public function kalender()
    {
      return view('index');
      // code...
    }
}
