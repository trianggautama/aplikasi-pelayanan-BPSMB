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


        //permohonan pengujjian user
       public function permohonan_pengujian(){

        return view('users.permohonan_pengujian_data');
        }
    
        // tambah permohonan pengujian user
        public function permohonan_pengujian_tambah(){

            return view('users.permohonan_pengujian_tambah');
        }
    
    
        //edit permohonan pengujjian user
        public function permohonan_pengujian_edit(){
    
        return view('users.permohonan_pengujian_edit');
        }
    
}
