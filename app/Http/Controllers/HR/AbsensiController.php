<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('hr.absensi');
    }

    public function absensiKaryawan(){
        return view('karyawan.absensi');
    }
}
