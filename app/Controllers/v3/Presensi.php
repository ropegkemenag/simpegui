<?php

namespace App\Controllers\v3;
use App\Controllers\BaseController;

class Presensi extends BaseController
{
    public function index(): string
    {
        $this->kehadiran();
    }

    public function kehadiran(): string
    {
        return view('v3/presensi/kehadiran');
    }

    public function peremajaan(): string
    {
        return view('v3/peremajaan');
    }

    public function cuti(): string
    {
        return view('v3/cuti');
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
