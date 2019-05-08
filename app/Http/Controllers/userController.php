<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    
        //dashboard admin
        public function index(){

            return view('users.index');
        }

       //permohonan kalibarsi user
       public function permohonan_kalibrasi(){

        return view('users.permohonan_kalibrasi_data');
        }
        // tambah permohonan kalibarsi user
        public function permohonan_kalibrasi_tambah(){

        return view('users.permohonan_kalibrasi_tambah');
    }
      //edit permohonan kalibarsi user
      public function permohonan_kalibrasi_edit(){

        return view('users.permohonan_kalibrasi_edit');
    }
    
}
