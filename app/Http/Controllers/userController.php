<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Perusahaan;
use App\Permohonan_kalibrasi;
use App\Retribusi_kalibrasi;
use Carbon\Carbon;
use App\User;
use IDCrypt;
Use File;

class userController extends Controller
{

        //dashboard admin
        public function index(){

            return view('users.index');
        }

        public function perusahaan_tambah(){
            $user = User::findOrFail(Auth::user()->id);
            $perusahaan = $user->perusahaan;
            $perusahaan = count($perusahaan);
            //dd($perusahaan);
            if($perusahaan == 0){
                return view('users.perusahaan_tambah');
            }   
                $perusahaan_data = perusahaan::where('id_user',Auth::user()->id)->first();
                return view('users.perusahaan_edit',compact('perusahaan_data'));

        }

        public function perusahaan_tambah_store(Request $request){
            $user_id = Auth::user()->id;
            $perusahaan = new perusahaan;

            if ($request->gambar) {
                $FotoExt  = $request->gambar->getClientOriginalExtension();
                $FotoName = 'perusahaan'.$request->user_id.'-'. $request->name;
                $gambar     = $FotoName.'.'.$FotoExt;
                $request->gambar->move('images/perusahaan', $gambar);
                $perusahaan->gambar= $gambar;
            }else {
                $perusahaan->gambar = 'default.jpg';
              }


            $perusahaan->alamat       = $request->alamat;
            $perusahaan->telepon      = $request->telepon;
            $perusahaan->website      = $request->website;
            $perusahaan->user_id      = $user_id;


            $perusahaan->save();

              return redirect(route('user_index'))->with('success', 'Data perusahaan '.$perusahaan->user->name.' Berhasil di Tambahkan');
          }//fungsi menambahkan data perusahaan

          public function perusahaan_detail($id){
            $id = IDCrypt::Decrypt($id);
            $perusahaan = perusahaan::find($id);
            // dd($perusahaan);

            return view('users.perusahaan_detail',compact('perusahaan'));
        }//menampilkan halaman detail perusahaan

       //permohonan kalibarsi user
        public function permohonan_kalibrasi_index(){
        $id = auth::id();
        $Kalibrasi     = Permohonan_kalibrasi::where('user_id', $id)->get();
        // $Kalibrasi->dd();
        return view('users.permohonan_kalibrasi_data',compact('Kalibrasi'));
        }

        // tambah permohonan kalibarsi user
        public function permohonan_kalibrasi_tambah(){
        $id = auth::id();
        $Kalibrasi  = Retribusi_kalibrasi::all();
        $Perusahaan = Perusahaan::where('user_id',$id)->first();
        $Date = Carbon::now();
        return view('users.permohonan_kalibrasi_tambah',compact('Kalibrasi','Perusahaan','Date'));
         }

        public function permohonan_kalibrasi_store(Request $request){

        $Kalibrasi = new Permohonan_kalibrasi;

        // $Date = Carbon::now()->toDateString();

        $Kalibrasi->user_id                 = $request->user_id;
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
