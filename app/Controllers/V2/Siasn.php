<?php

namespace App\Controllers\V2;
use App\Controllers\BaseController;

class Siasn extends BaseController
{
    public function index(): string
    {
        return view('v2/siasn');
    }

    public function kalender()
    {
      return view('index');
      // code...
    }
}
