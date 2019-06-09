<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Perusahaan;
use App\Permohonan_kalibrasi;

class userController extends Controller
{

        //dashboard admin
        public function index(){

            return view('users.index');
        }

        public function edit_profile_perusahaan(){

            return view('users.edit_profile_perusahaan');
        }

       //permohonan kalibarsi user
        public function permohonan_kalibrasi_index(){
        $id = auth::id();
        $Kalibrasi     = Permohonan_kalibrasi::where('id_user', $id)->get();
        // $Kalibrasi->dd();
        return view('users.permohonan_kalibrasi_data',compact('Kalibrasi'));
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
