<?php

namespace App\Controllers\V2;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v2/index');
    }

    public function kalender()
    {
      return view('index');
      // code...
    }
}
