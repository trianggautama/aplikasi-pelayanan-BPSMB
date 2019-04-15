<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){

        return view('admin.index');
    }

    public function perusahaan_index(){

        return view('admin.perusahaan_data');
    }

    public function retribusi_kalibrasi_index(){

        return view('admin.retribusi_kalibrasi_data');
    }


}
