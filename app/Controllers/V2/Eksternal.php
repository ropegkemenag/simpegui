<?php

namespace App\Controllers\v2;
use App\Controllers\BaseController;

class Eksternal extends BaseController
{
    public function index(): string
    {
        return view('v2/eksternal');
    }

    public function kalender()
    {
      return view('index');
      // code...
    }
}
