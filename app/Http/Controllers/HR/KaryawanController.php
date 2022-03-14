<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('hr.karyawan');
    }

    public function absensi()
    {
        return view('hr.absensi');
    }

    public function gaji(){
        return view('hr.gaji');
    }
}
