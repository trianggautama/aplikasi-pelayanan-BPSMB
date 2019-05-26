<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Perusahaan;
use App\Retribusi_kalibrasi;

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

    public function perusahaan_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $Perusahaan = Perusahaan::findOrFail($id);
        $User = User::find($Perusahaan->id_user);

        //  $this->validate(request(),[
        //     'kode_rambu'=>'required',
        //     'nama_rambu'=>'required',
        //     'keterangan'=>'required'
        // ]);
        $User->name     = $request->name;
        $User->email    = $request->email;
        $Password       = Hash::make($request->password);
        $User->password = $Password;
        
        if($request->gambar != null){
        $FotoExt  = $request->gambar->getClientOriginalExtension();
        $FotoName = $request->id_user.' - '.$request->nama_perusahaan;
        $gambar   = $FotoName.'.'.$FotoExt;
        $request->gambar->move('images/perusahaan', $gambar);
        $Perusahaan->gambar       = $gambar;
        }

        $Perusahaan->nama         = $request->nama;
        $Perusahaan->alamat       = $request->alamat;
        $Perusahaan->telepon      = $request->telepon;

        $User->update();
        $Perusahaan->update();
        return redirect(route('perusahaan_index'))->with('success', 'Data Perusahaan '.$request->nama.' Berhasil di ubah');
         }

    //retribusi kalibrasi
    public function retribusi_kalibrasi_index(){
        $Kalibrasi = Retribusi_kalibrasi::all();
        return view('admin.retribusi_kalibrasi_data',compact('Kalibrasi'));

        // return view('admin.retribusi_kalibrasi_data');
    }
     //retribusi kalibrasi
     public function retribusi_kalibrasi_edit($id){
        $id = IDCrypt::Decrypt($id);
        $Kalibrasi = Retribusi_kalibrasi::findOrFail($id);
        dd($Kalibrasi);

        return view('admin.retribusi_kalibrasi_edit',compact('Kalibrasi'));
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
