<?php

namespace App\Controllers\V2;
use App\Controllers\BaseController;

class Pdm extends BaseController
{
    public function index(): string
    {
        return view('v2/pdm');
    }

    public function kalender()
    {
      return view('index');
      // code...
    }
}
