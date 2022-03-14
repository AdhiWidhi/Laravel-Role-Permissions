<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index(){
        return view('hr.gaji');
    }

    public function gajiKaryawan(){
        return view('karyawan.gaji');
    }
    public function editGaji(){
        return view('hr.editGaji');
    }
    public function printgaji(){
        return view('keuangan.printgaji');
    }
}
