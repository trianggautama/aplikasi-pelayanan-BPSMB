<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //dashboard
    public function index(){

        return view('admin.index');
    }

    //function perusahaan
    public function perusahaan_index(){

        return view('admin.perusahaan_data');
    }

    public function perusahaan_detail(){

        return view('admin.perusahaan_detail');
    }

    //retribusi kalibrasi
    public function retribusi_kalibrasi_index(){

        return view('admin.retribusi_kalibrasi_data');
    }


}
