<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Perusahaan;
use App\Retribusi_kalibrasi;
use App\Retribusi_pengujian;
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

    public function retribusi_kalibrasi_store(Request $request){

        $this->validate(request(),[
            'nama'=>'required',
            'rentang_ukur'=>'required',
            'biaya'=>'required',
            'keterangan'=>'required'
        ]);
        $Kalibrasi = new Retribusi_kalibrasi;
        $Kalibrasi->nama            = $request->nama;
        $Kalibrasi->rentang_ukur    = $request->rentang_ukur;
        $Kalibrasi->biaya           = $request->biaya;
        $Kalibrasi->keterangan      = $request->keterangan;
        $Kalibrasi->save();
          return redirect(route('retribusi_kalibrasi_index'))->with('success', 'Data retribusi kalibrasi '.$request->nama.' Berhasil di Tambahkan');
      }//fungsi menambahkan data retribusi kalibrasi
     //retribusi kalibrasi
     public function retribusi_kalibrasi_edit($id){
        $id = IDCrypt::Decrypt($id);
        $Kalibrasi = Retribusi_kalibrasi::findOrFail($id);
        // dd($Kalibrasi);

        return view('admin.retribusi_kalibrasi_edit',compact('Kalibrasi'));
    }//menampilkan halaman edit retribusi kalibrasi

    public function retribusi_kalibrasi_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $Kalibrasi = Retribusi_kalibrasi::findOrFail($id);

        $this->validate(request(),[
           'nama'=>'required',
           'rentang_ukur'=>'required',
           'biaya'=>'required',
           'keterangan'=>'required'
       ]);

       $Kalibrasi->nama         = $request->nama;
       $Kalibrasi->rentang_ukur = $request->rentang_ukur;
       $Kalibrasi->biaya        = $request->biaya;
       $Kalibrasi->keterangan   = $request->keterangan;

       $Kalibrasi->update();
       return redirect(route('retribusi_kalibrasi_index'))->with('success', 'Data retribusi kalibrasi '.$request->nama.' Berhasil di Ubah');
      }//fungsi mengubah data retribusi kalibrasi

      public function retribusi_kalibrasi_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Kalibrasi=Retribusi_kalibrasi::findOrFail($id);
        $Kalibrasi->delete();
       
        return redirect(route('retribusi_kalibrasi_index'))->with('success', 'Data retribusi kalibrasi berhasil di hapus');
    }//fungsi menghapus data retribusi kalibrasi



      //retribusi Pengujian
      public function retribusi_pengujian_index(){
        $Pengujian = Retribusi_pengujian::all();
        return view('admin.retribusi_pengujian_data',compact('Pengujian'));

        // return view('admin.retribusi_pengujian_data');
    }

        public function retribusi_pengujian_store(Request $request){
            $this->validate(request(),[
                'komoditi'=>'required',
                'biaya'=>'required',
                'keterangan'=>'required'
            ]);
        $Pengujian = new Retribusi_pengujian;
          
        $Pengujian->komoditi        = $request->komoditi;
        $Pengujian->biaya           = $request->biaya;
        $Pengujian->keterangan      = $request->keterangan;

        $Pengujian->save();
       
          return redirect(route('retribusi_pengujian_index'))->with('success', 'Data retribusi pengujian '.$request->komoditi.' Berhasil di Tambahkan');
      }//fungsi menambahkan data retribusi pengujian
       
       public function retribusi_pengujian_edit($id){
        $id = IDCrypt::Decrypt($id);
        $Pengujian = Retribusi_pengujian::findOrFail($id);
        // dd($Pengujian);

        return view('admin.retribusi_pengujian_edit',compact('Pengujian'));
   }
   public function retribusi_pengujian_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $Pengujian = Retribusi_pengujian::findOrFail($id);

        $this->validate(request(),[
           'komoditi'=>'required',
           'biaya'=>'required',
           'keterangan'=>'required'
       ]);

       $Pengujian->komoditi     = $request->komoditi;
       $Pengujian->biaya        = $request->biaya;
       $Pengujian->keterangan   = $request->keterangan;

       $Pengujian->update();
       return redirect(route('retribusi_pengujian_index'))->with('success', 'Data retribusi pengujian '.$request->komoditi.' Berhasil di Ubah');
      }//fungsi mengubah data retribusi pengujian

      public function retribusi_pengujian_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Pengujian=Retribusi_pengujian::findOrFail($id);
        $Pengujian->delete();
       
        return redirect(route('retribusi_pengujian_index'))->with('success', 'Data retribusi pengujian berhasil di hapus');
    }//fungsi menghapus data retribusi pengujian

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

    //fungsi kalibrasi data
    public function kalibrasi_index(){
    
    return view('admin.kalibrasi_data');
    }

    public function kalibrasi_detail(){
    
    return view('admin.kalibrasi_detail');
    }

    public function kalibrasi_edit(){
    
    return view('admin.kalibrasi_edit');
    }

    //fungsi pengujian data
    public function pengujian_index(){
    
    return view('admin.pengujian_data');
    }

    public function pengujian_detail(){
    
    return view('admin.pengujian_detail');
    }

    public function pengujian_edit(){
    
    return view('admin.pengujian_edit');
    }


}
