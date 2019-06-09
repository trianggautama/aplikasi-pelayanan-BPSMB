<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Perusahaan;
use App\Permohonan_kalibrasi;
use App\Retribusi_kalibrasi;
use Carbon\Carbon;

class userController extends Controller
{
    
        //dashboard admin
        public function index(){

            return view('users.index');
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
        $id = auth::id();    
        $Kalibrasi  = Retribusi_kalibrasi::all();
        $Perusahaan = Perusahaan::where('id_user',$id)->first();
        $Date = Carbon::now();
        return view('users.permohonan_kalibrasi_tambah',compact('Kalibrasi','Perusahaan','Date'));
         }

        public function permohonan_kalibrasi_store(Request $request){

        $Kalibrasi = new Permohonan_kalibrasi;
        
        // $Date = Carbon::now()->toDateString();

        $Kalibrasi->id_user                 = $request->id_user;
        $Kalibrasi->id_perusahaan           = $request->id_perusahaan;
        $Kalibrasi->id_retribusi_kalibrasi  = $request->id_retribusi_kalibrasi;
        // $Kalibrasi->tanggal                 = $Date;
        $Kalibrasi->tanggal                    = $request->tanggal;
        $Kalibrasi->merk                    = $request->merk;
        $Kalibrasi->no_seri                 = $request->no_seri;
    // dd($request);

        $Kalibrasi->save();
       
          return redirect(route('permohonan_kalibrasi_user_index'))->with('success', 'Data permohonan kalibrasi '.$request->merk.' Berhasil di Tambahkan');
      }//fungsi menambahkan data permohonan kalibrasi


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
