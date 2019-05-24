<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Perusahaan;
use IDCrypt;
use Auth;
use Hash;

class adminController extends Controller
{
    //dashboard admin
    public function index(){

        return view('admin.index');
    }

    //function perusahaan
    public function perusahaan_index(){
        $Perusahaan = Perusahaan::with('user')->get();
        return view('admin.perusahaan_data',compact('Perusahaan'));
    }

    public function perusahaan_detail($id){
        $id = IDCrypt::Decrypt($id);
        $Perusahaan = Perusahaan::find($id);
        $User = User::find($Perusahaan->id_user);
        return view('admin.perusahaan_detail',compact('Perusahaan','User'));
    }

    //retribusi kalibrasi
    public function retribusi_kalibrasi_index(){

        return view('admin.retribusi_kalibrasi_data');
    }
     //retribusi kalibrasi
     public function retribusi_kalibrasi_edit(){

         return view('admin.retribusi_kalibrasi_edit');
    }

      //retribusi Pengujian
      public function retribusi_pengujian_index(){

        return view('admin.retribusi_pengujian_data');
    }
       //retribusi kalibrasi
       public function retribusi_pengujian_edit(){

        return view('admin.retribusi_pengujian_edit');
   }

   //permohonan Kalibrasi
   public function permohonan_kalibrasi_index(){

    return view('admin.permohonan_kalibrasi_data');
    }

    public function permohonan_kalibrasi_edit(){

    return view('admin.permohonan_kalibrasi_edit');
    }

     //permohonan pengujian
   public function permohonan_pengujian_index(){

    return view('admin.permohonan_pengujian_data');
    }

    public function permohonan_pengujian_edit(){

    return view('admin.permohonan_kalibrasi_edit');
    }



}
