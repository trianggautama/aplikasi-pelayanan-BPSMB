<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Inbox;
use App\Kalibrasi;
use App\Pengujian;
use App\Perusahaan;
use App\Retribusi_kalibrasi;
use App\Retribusi_pengujian;
use App\Permohonan_kalibrasi;
use App\Permohonan_pengujian;

use Carbon\Carbon;
use IDCrypt;
use PDF;
use Auth;

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

    public function perusahaan_tambah(){
        return view('admin.perusahaan_tambah');
    }

    public function perusahaan_tambah_store(Request $request){

        $User = new User;

        //  $this->validate(request(),[
        //     'kode_rambu'=>'required',
        //     'name_rambu'=>'required',
        //     'keterangan'=>'required'
        // ]);
        $User->name     = $request->name;
        $User->email    = $request->email;
        $Password       = Hash::make($request->password);
        $User->password = $Password;
        $User->status    = $request->status;
        if($request->foto != null){
            $FotoExt  = $request->foto->getClientOriginalExtension();
            $FotoName = $request->user_id.' - '.$request->name;
            $foto   = $FotoName.'.'.$FotoExt;
            $request->foto->move('images/perusahaan', $foto);
            $User->foto       = $foto;
            }

        $User->save();
        $user_id = $User->id;

        $Perusahaan = new Perusahaan;



        $Perusahaan->alamat       = $request->alamat;
        $Perusahaan->telepon      = $request->telepon;
        $Perusahaan->website      = $request->website;
        $Perusahaan->user_id      = $user_id;

        $Perusahaan->save();
        return redirect(route('admin_perusahaan_index'))->with('success', 'Data Perusahaan '.$request->name.' Berhasil di tambah');
    }

    public function status_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $user = user::findOrFail($id);


        $user->status       = $request->status;

        $user->update();
        return redirect(route('admin_perusahaan_index'))->with('success', 'Data status '.$request->name.' Berhasil di ubah');
         }

    public function perusahaan_detail($id){
        $id = IDCrypt::Decrypt($id);
        $Perusahaan = Perusahaan::find($id);
        // dd($Perusahaan);
        return view('admin.perusahaan_detail',compact('Perusahaan'));
    }

    public function perusahaan_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $Perusahaan = Perusahaan::findOrFail($id);
        $User = User::find($Perusahaan->user_id);

        //  $this->validate(request(),[
        //     'kode_rambu'=>'required',
        //     'nama_rambu'=>'required',
        //     'keterangan'=>'required'
        // ]);
        $User->name     = $request->name;
        $User->email    = $request->email;
        if($request->password != null){
        $Password       = Hash::make($request->password);
        $User->password = $Password;
        }

        if($request->foto != null){
        $FotoExt  = $request->foto->getClientOriginalExtension();
        $FotoName = $request->user_id.' - '.$request->name;
        $foto   = $FotoName.'.'.$FotoExt;
        $request->foto->move('images/perusahaan', $foto);
        $User->foto       = $foto;
        }

        $Perusahaan->alamat       = $request->alamat;
        $Perusahaan->telepon      = $request->telepon;
        $Perusahaan->website      = $request->website;

        $User->update();
        $Perusahaan->update();
        return redirect(route('admin_perusahaan_index'))->with('success', 'Data Perusahaan '.$request->name.' Berhasil di ubah');
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
    $Kalibrasi     = Permohonan_kalibrasi::all();

    return view('admin.permohonan_kalibrasi_data',compact('Kalibrasi'));
    }

    public function permohonan_kalibrasi_edit(){

    return view('admin.permohonan_kalibrasi_edit');
    }

    //verifikasi kalibrasi
    public function halaman_verifikasi_kalibrasi(){
        return view('admin.halaman_verifikasi_kalibrasi');
       }

       public function halaman_verifikasi_kalibrasi_store(Request $request, $id){
       $id = IDCrypt::Decrypt($id);
       $status = permohonan_kalibrasi::findOrFail($id);
           $this->validate(request(),[
               'subjek'=>'required',
               'status'=>'required',
               'tanggal'=>'required',
               'keterangan'=>'required'
           ]);
       // dd($status->user_id);
       $status->status = $request->status;
       $status->update();
       // dd($request);
       $user_id = $status->user_id;
       // dd($user_id);
       $inbox = new inbox;

       $inbox->user_id           = $user_id;
       $inbox->permohonan_kalibrasi_id           = $id;
       $inbox->subjek           = $request->subjek;
       $inbox->tanggal        = $request->tanggal;
       $inbox->keterangan      = $request->keterangan;
       $inbox->save();

       $kalibrasi = new kalibrasi;

       $kalibrasi->user_id = $user_id;
       $kalibrasi->permohonan_kalibrasi_id           = $id;
       $kalibrasi->tanggal_verifikasi = $inbox->tanggal;
       $kalibrasi->status = $status->status;
       $kalibrasi->save();


       return redirect(route('permohonan_kalibrasi_index'));
          }

    public function permohonan_kalibrasi_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Kalibrasi=permohonan_kalibrasi::findOrFail($id);
        $Kalibrasi->delete();

        return redirect(route('permohonan_kalibrasi_index'))->with('success', 'Data permohonan kalibrasi berhasil di hapus');
    }//fungsi menghapus data retribusi kalibrasi

     //permohonan pengujian
   public function permohonan_pengujian_index(){
    $pengujian = permohonan_pengujian::all();
    return view('admin.permohonan_pengujian_data',compact('pengujian'));
    }

    public function permohonan_pengujian_edit(){

    return view('admin.permohonan_kalibrasi_edit');
    }

    public function permohonan_pengujian_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Pengujian=permohonan_pengujian::findOrFail($id);
        $Pengujian->delete();

        return redirect(route('permohonan_pengujian_index'))->with('success', 'Data permohonan pengujian berhasil di hapus');
    }//fungsi menghapus data retribusi pengujian

    //verifikasi pengujian
    public function halaman_verifikasi(){
     return view('admin.halaman_verifikasi');
    }

    public function halaman_verifikasi_store(Request $request, $id){
    $id = IDCrypt::Decrypt($id);
    $status = permohonan_pengujian::findOrFail($id);
        $this->validate(request(),[
            'subjek'=>'required',
            'status'=>'required',
            'tanggal'=>'required',
            'keterangan'=>'required'
        ]);
    // dd($status->user_id);
    $status->status = $request->status;
    $status->update();
    // dd($request);
    $user_id = $status->user_id;
    // dd($user_id);
    $inbox = new inbox;

    $inbox->user_id           = $user_id;
    $inbox->permohonan_pengujian_id           = $id;
    $inbox->subjek           = $request->subjek;
    $inbox->tanggal        = $request->tanggal;
    $inbox->keterangan      = $request->keterangan;
    $inbox->save();

    $pengujian = new pengujian;

    $pengujian->user_id = $user_id;
    $pengujian->permohonan_pengujian_id           = $id;
    $pengujian->tanggal_verifikasi = $inbox->tanggal;
    $pengujian->status = $status->status;
    $pengujian->save();


    return redirect(route('permohonan_pengujian_index'));
       }

    //fungsi kalibrasi data
    public function kalibrasi_index(){
    $kalibrasi=kalibrasi::all();

    return view('admin.kalibrasi_data',compact('kalibrasi'));
    }

    public function kalibrasi_detail(){

    return view('admin.kalibrasi_detail');
    }

    public function kalibrasi_edit(){

    return view('admin.kalibrasi_edit');
    }

    //fungsi pengujian data
    public function pengujian_index(){
    $pengujian=pengujian::all();

    return view('admin.pengujian_data',compact('pengujian'));
    }

    public function pengujian_detail(){

    return view('admin.pengujian_detail');
    }

    public function pengujian_edit(){

    return view('admin.pengujian_edit');
    }

    //user
    public function user_index(){
        $user = user::where('status',3)->get();
        // dd($user);
        return view('admin.user_data',compact('user'));

        // return view('admin.user_data');
    }

    public function user_store(Request $request){

        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required'
            // 'status'=>'required'
        ]);
        $user = new user;
        if($request->foto != null){
            $FotoExt  = $request->foto->getClientOriginalExtension();
            $FotoName = $request->user_id.' - '.$request->name;
            $foto   = $FotoName.'.'.$FotoExt;
            $request->foto->move('images/admin', $foto);
            $user->foto       = $foto;
            }
        $user->name            = $request->name;
        $user->email    = $request->email;
        $Password       = Hash::make($request->password);
        $user->password = $Password;
        $user->status           = 3;
        $user->save();
          return redirect(route('admin_user_index'))->with('success', 'Data user '.$request->name.' Berhasil di Tambahkan');
      }//fungsi menambahkan data user
     //user
     public function user_edit($id){
        $id = IDCrypt::Decrypt($id);
        $user = user::findOrFail($id);
        // dd($user);

        return view('admin.user_edit',compact('user'));
    }//menampilkan halaman edit user

    public function user_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $user = user::findOrFail($id);

        $this->validate(request(),[
           'name'=>'required',
           'email'=>'required',
           'biaya'=>'required',
           'keterangan'=>'required'
       ]);

       $user->name         = $request->name;
       $user->email = $request->email;
       $user->biaya        = $request->biaya;
       $user->keterangan   = $request->keterangan;

       $user->update();
       return redirect(route('user_index'))->with('success', 'Data user '.$request->name.' Berhasil di Ubah');
      }//fungsi mengubah data user

      public function user_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $user=user::findOrFail($id);
        $user->delete();

        return redirect(route('user_index'))->with('success', 'Data user berhasil di hapus');
    }//fungsi menghapus data user

//laporan
    public function laporan_perusahaan_keseluruhan(){
        $perusahaan=perusahaan::all();
        // $pejabat =pejabat::where('jabatan','Kepala Dinas')->get();

        $tgl= Carbon::now()->format('d-m-Y');

        $pdf =PDF::loadView('laporan.perusahaan_keseluruhan', ['perusahaan' => $perusahaan,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Perusahaan Keseluruhan.pdf');
       }//mencetak  perusahaan

       public function laporan_perusahaan_filter_status(){
        // $perusahaan = perusahaan::all();
        return view('admin.perusahaan_filter_status');
    }//redirect halaman filter perusahaan

    public function laporan_perusahaan_status(Request $Request){

        $status = $Request->status;

        $user = user::where('status', $status)->get();
        // dd($user);
        // dd($perusahaan);
        // $pejabat =pejabat::where('jabatan','Kepala Dinas')->get();
        if($status==0){
            $data='TIDAK AKTIF/BANNED';
        }else{
            $data='AKTIF';
        }
        // dd($data);
        $tgl= Carbon::now()->format('d-m-Y');

        $pdf =PDF::loadView('laporan.perusahaan_status', ['user' => $user,'tgl'=>$tgl,'data'=>$data]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan perusahaan berdasarkan status.pdf');
    }//cetak perusahaan berdasarkan status

    public function laporan_retribusi_kalibrasi(){
        $retribusi=retribusi_kalibrasi::all();
        // $pejabat =pejabat::where('jabatan','Kepala Dinas')->get();

        $tgl= Carbon::now()->format('d-m-Y');

        $pdf =PDF::loadView('laporan.retribusi_kalibrasi', ['retribusi' => $retribusi,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan retribusi kalibrasi.pdf');
       }//mencetak  retribusi kalibrasi

    public function laporan_retribusi_pengujian(){
        $retribusi=retribusi_pengujian::all();
        // $pejabat =pejabat::where('jabatan','Kepala Dinas')->get();

        $tgl= Carbon::now()->format('d-m-Y');

        $pdf =PDF::loadView('laporan.retribusi_pengujian', ['retribusi' => $retribusi,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan retribusi pengujian.pdf');
       }//mencetak  retribusi pengujian

       public function sertifikat_kalibrasi(){

        $pdf =PDF::loadView('laporan.sertifikat_kalibrasi');
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan retribusi pengujian.pdf');
       }//mencetak  retribusi pengujian

       public function sertifikat_pengujian(){

        $pdf =PDF::loadView('laporan.sertifikat_pengujian');
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan retribusi pengujian.pdf');
       }//mencetak  retribusi pengujian

       public function permohonan_kalibrasi_cetak(){
        $permohonan_kalibrasi=permohonan_kalibrasi::all();
        // $pejabat =pejabat::where('jabatan','Kepala Dinas')->get();

        $tgl= Carbon::now()->format('d-m-Y');

        $pdf =PDF::loadView('laporan.permohonan_kalibrasi', ['permohonan_kalibrasi' => $permohonan_kalibrasi,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Permohonan Kalibrasi Keseluruhan.pdf');
       }//mencetak  perusahaan

       public function permohonan_pengujian_cetak(){
        $permohonan_pengujian=permohonan_pengujian::all();
        // $pejabat =pejabat::where('jabatan','Kepala Dinas')->get();

        $tgl= Carbon::now()->format('d-m-Y');

        $pdf =PDF::loadView('laporan.permohonan_pengujian', ['permohonan_pengujian' => $permohonan_pengujian,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Permohonan pengujian Keseluruhan.pdf');
       }//mencetak  perusahaan

}
