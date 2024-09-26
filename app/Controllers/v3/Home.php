<?php

namespace App\Controllers\v3;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v3/index');
    }

    public function personal(): string
    {
        return view('v3/personal');
    }

    public function peremajaan(): string
    {
        return view('v3/peremajaan');
    }

    public function layanan(): string
    {
        return view('v3/layanan');
    }

    public function eksternal(): string
    {
        return view('v3/eksternal');
    }
}
