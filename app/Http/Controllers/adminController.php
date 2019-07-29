<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Inbox;
use App\Kalibrasi;
use App\Pengujian;
use App\Perusahaan;
use App\Hasil_kalibrasi;
use App\Hasil_pengujian;
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
        $perusahaan = Perusahaan::all();
        $pengujian= Pengujian::all();
        $pengujian_dalam_proses= Pengujian::where('status',1)->get();
        $pengujian_pending= Pengujian::where('status',2)->get();
        $pengujian_selesai= Pengujian::where('status',3)->get();

        $kalibrasi = Kalibrasi::all();
        $kalibrasi_dalam_proses= Kalibrasi::where('status',1);
        $kalibrasi_pending= Kalibrasi::where('status',2);
        $kalibrasi_selesai= Kalibrasi::where('status',3);

        $permohonan_pengujian= Permohonan_pengujian::all();
        $permohonan_pengujian_diterima= Permohonan_pengujian::where('status',2)->get();
        $permohonan_pengujian_ditolak= Permohonan_pengujian::where('status',0)->get();
        $permohonan_kalibrasi= Permohonan_kalibrasi::all();
        $permohonan_kalibrasi_diterima= Permohonan_kalibrasi::where('status',2)->get();
        $permohonan_kalibrasi_ditolak= Permohonan_kalibrasi::where('status',0)->get();

        return view('admin.index',compact('perusahaan','pengujian','pengujian_dalam_proses','pengujian_selesai','kalibrasi','kalibrasi_dalam_proses','kalibrasi_selesai','permohonan_pengujian','permohonan_pengujian_diterima','permohonan_pengujian_ditolak','permohonan_kalibrasi','permohonan_kalibrasi_diterima','permohonan_kalibrasi_ditolak','kalibrasi_pending','pengujian_pending'));
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
    public function halaman_verifikasi_kalibrasi($id)
    {
        $id = IDCrypt::Decrypt($id);
        $permohonan_kalibrasi = Permohonan_kalibrasi::findOrFail($id);
        return view('admin.halaman_verifikasi_kalibrasi',compact('permohonan_kalibrasi'));
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

       if($request->status==2){
        $kalibrasi = new kalibrasi;
        $kalibrasi->user_id = $user_id;
        $kalibrasi->permohonan_kalibrasi_id           = $id;
        $kalibrasi->status = $status->status;
        $kalibrasi->save();
       }else{

       }




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
    public function halaman_verifikasi($id){
    $id = IDCrypt::Decrypt($id);
    $permohonan_pengujian=permohonan_pengujian::findOrFail($id);
     return view('admin.halaman_verifikasi',compact('permohonan_pengujian'));
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
    $pengujian->status = $status->status;
    $pengujian->save();


    return redirect(route('permohonan_pengujian_index'));
       }

    //fungsi kalibrasi data
    public function kalibrasi_index(){
    $kalibrasi=kalibrasi::all();

    return view('admin.kalibrasi_data',compact('kalibrasi'));
    }

    public function kalibrasi_detail($id){
        $id = IDCrypt::Decrypt($id);
        $kalibrasi = kalibrasi::find($id);

    return view('admin.kalibrasi_detail',compact('kalibrasi'));
    }

    public function kalibrasi_edit($id){
        $id = IDCrypt::Decrypt($id);
        $kalibrasi = kalibrasi::find($id);

    return view('admin.kalibrasi_edit',compact('kalibrasi'));
    }

    public function kalibrasi_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $kalibrasi = kalibrasi::findOrFail($id);
        $kalibrasi->status   = $request->status;
        $kalibrasi->metode_pembayaran     = $request->metode_pembayaran;
        $kalibrasi->tanggal     = $request->tanggal;
        $kalibrasi->estimasi        = $request->estimasi;
        $kalibrasi->lainnya   = $request->lainnya;
        $kalibrasi->keterangan   = $request->keterangan;
    //    dd($request);

        $kalibrasi->update();
       return redirect(route('kalibrasi_index'))->with('success', 'Data kalibrasi '.$request->komoditi.' Berhasil di Ubah');
      }//fungsi mengubah data kalibrasi

      public function kalibrasi_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $Kalibrasi=kalibrasi::findOrFail($id);
        $Kalibrasi->delete();

        return redirect(route('kalibrasi_index'))->with('success', 'Data retribusi kalibrasi berhasil di hapus');
    }//fungsi menghapus data retribusi kalibrasi

    public function kalibrasi_sertifikat_edit($id){
        $id = IDCrypt::Decrypt($id);
        $kalibrasi = kalibrasi::find($id);

    return view('admin.kalibrasi_sertifikat_edit',compact('kalibrasi'));
    }

    public function kalibrasi_sertifikat_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $kalibrasi = kalibrasi::findOrFail($id);

        $file = $request->file('file');
        if($request->sertifikat != null){
            $sertifikatExt  = $request->sertifikat->getClientOriginalExtension();
            $sertifikatName = $request->sertifikat->getClientOriginalName();;
            // dd($sertifikatName);
            $sertifikat   = $sertifikatName.'.'.$sertifikatExt;
            $request->sertifikat->move('sertifikat/kalibrasi', $sertifikat);
            $kalibrasi->sertifikat       = $sertifikat;
            $kalibrasi->update();
            }else {
                return redirect(route('kalibrasi_index'));
            }
       return redirect(route('kalibrasi_index'))->with('success', 'Data Sertifikat '.$request->$sertifikat.' Berhasil di Upload');
      }//fungsi mengubah data kalibrasi


    public function hasil_kalibrasi_tambah($id){

    return view('admin.tambah_hasil_kalibrasi');
    }

    public function hasil_kalibrasi_store(Request $request, $id){

        // dd($request);
        $id = IDCrypt::Decrypt($id);
            $this->validate(request(),[
                'no_seri'=>'required',
                'no_order'=>'required',
                'alat1'=>'required',
                'alat2'=>'required',
                'alat3'=>'required',
                'standard1'=>'required',
                'standard2'=>'required',
                'standard3'=>'required',
                'k1'=>'required',
                'k2'=>'required',
                'k3'=>'required',
                'u1'=>'required',
                'u2'=>'required',
                'u3'=>'required'
            ]);
        $hasil = new hasil_kalibrasi;

        $hasil->kalibrasi_id  = $id;

        $hasil->no_seri     = $request->no_seri;
        $hasil->no_order    = $request->no_order;
        $hasil->alat        = $request->alat1;
        $hasil->standard    = $request->standard1;
        $hasil->k           = $request->k1;
        $hasil->u           = $request->u1;
        $hasil->save();

        $hasil2 = new hasil_kalibrasi;
        $hasil2->kalibrasi_id  = $id;
        $hasil->no_seri      = $request->no_seri;
        $hasil->no_order     = $request->no_order;
        $hasil2->alat        = $request->alat2;
        $hasil2->standard    = $request->standard2;
        $hasil2->k           = $request->k2;
        $hasil2->u           = $request->u2;
        $hasil2->save();

        $hasil3 = new hasil_kalibrasi;
        $hasil3->kalibrasi_id  = $id;
        $hasil->no_seri      = $request->no_seri;
        $hasil->no_order     = $request->no_order;
        $hasil3->alat        = $request->alat3;
        $hasil3->standard    = $request->standard3;
        $hasil3->k           = $request->k3;
        $hasil3->u           = $request->u3;
        $hasil3->save();

        return redirect(route('kalibrasi_index'));
           }

    //fungsi pengujian data
    public function pengujian_index(){
    $pengujian=pengujian::all();

    return view('admin.pengujian_data',compact('pengujian'));
    }

    public function pengujian_detail($id){
        $id = IDCrypt::Decrypt($id);
        $pengujian = pengujian::find($id);
    return view('admin.pengujian_detail',compact('pengujian'));
    }

    public function pengujian_edit($id){
        $id = IDCrypt::Decrypt($id);
        $pengujian = pengujian::find($id);

    return view('admin.pengujian_edit',compact('pengujian'));
    }

    public function pengujian_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $pengujian = pengujian::findOrFail($id);
        $pengujian->status   = $request->status;
        $pengujian->metode_pembayaran     = $request->metode_pembayaran;
        $pengujian->tanggal     = $request->tanggal;
        $pengujian->estimasi        = $request->estimasi;
        $pengujian->lainnya   = $request->lainnya;
        $pengujian->keterangan   = $request->keterangan;
    //    dd($request);

        $pengujian->update();
       return redirect(route('pengujian_index'))->with('success', 'Data pengujian '.$request->komoditi.' Berhasil di Ubah');
      }//fungsi mengubah data pengujian

      public function pengujian_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $pengujian=pengujian::findOrFail($id);
        $pengujian->delete();

        return redirect(route('pengujian_index'))->with('success', 'Data pengujian berhasil di hapus');
    }//fungsi menghapus data pengujian

      public function pengujian_sertifikat_edit($id){
        $id = IDCrypt::Decrypt($id);
        $pengujian = pengujian::find($id);

    return view('admin.pengujian_sertifikat_edit',compact('pengujian'));
    }

    public function pengujian_sertifikat_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $pengujian = pengujian::findOrFail($id);

        $file = $request->file('file');
        if($request->sertifikat != null){
            $sertifikatExt  = $request->sertifikat->getClientOriginalExtension();
            $sertifikatName = $request->sertifikat->getClientOriginalName();;
            // dd($sertifikatName);
            $sertifikat   = $sertifikatName.'.'.$sertifikatExt;
            $request->sertifikat->move('sertifikat/pengujian', $sertifikat);
            $pengujian->sertifikat       = $sertifikat;
            $pengujian->update();
            }else {
                return redirect(route('pengujian_index'));
            }
       return redirect(route('pengujian_index'))->with('success', 'Data Sertifikat '.$request->$sertifikat.' Berhasil di Upload');
      }//fungsi mengubah data pengujian

    public function hasil_pengujian_tambah(){

    return view('admin.tambah_hasil_uji');
    }

    public function hasil_pengujian_store(Request $request, $id){

        // dd($request);
        $id = IDCrypt::Decrypt($id);
            $this->validate(request(),[
                'kode'=>'required',
                'no_bpsmb'=>'required',
                'kadar_air'=>'required',
                'kadar_abu'=>'required',
                'kadar_protein'=>'required',
                'kadar_lemak'=>'required',
                'kadar_serat'=>'required',
                'energi_metabolisme'=>'required'
            ]);
        $hasil = new hasil_pengujian;

        $hasil->pengujian_id  = $id;

        $hasil->kode                = $request->kode;
        $hasil->no_bpsmb            = $request->no_bpsmb;
        $hasil->kadar_air           = $request->kadar_air;
        $hasil->kadar_abu           = $request->kadar_abu;
        $hasil->kadar_protein       = $request->kadar_protein;
        $hasil->kadar_lemak         = $request->kadar_lemak;
        $hasil->kadar_serat         = $request->kadar_serat;
        $hasil->energi_metabolisme  = $request->energi_metabolisme;
        $hasil->save();

        return redirect(route('pengujian_index'));
           }

    //user
    public function user_index(){
        $user = user::where('role',2)->get();
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
            }else {
                $user->foto  = 'default.jpg';
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
            'email'=>'required'
            // 'status'=>'required'
        ]);
        if($request->foto != null){
            $FotoExt  = $request->foto->getClientOriginalExtension();
            $FotoName = $request->user_id.' - '.$request->name;
            $foto   = $FotoName.'.'.$FotoExt;
            $request->foto->move('images/admin', $foto);
            $user->foto       = $foto;
            }else {
                $user->foto  = $user->foto;
            }
        $user->name            = $request->name;
        $user->email    = $request->email;
        if($request->password != null){
        $Password       = Hash::make($request->password);
        $user->password = $Password;
        }else{

        }

       $user->update();
       return redirect(route('admin_user_index'))->with('success', 'Data user '.$request->name.' Berhasil di Ubah');
      }//fungsi mengubah data user

      public function user_hapus($id){
        $id = IDCrypt::Decrypt($id);
        $user=user::findOrFail($id);
        $user->delete();

        return redirect(route('admin_user_index'))->with('success', 'Data user berhasil di hapus');
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

       public function sertifikat_kalibrasi($id){

        $id = IDCrypt::Decrypt($id);
        $hasil=hasil_kalibrasi::where('kalibrasi_id',$id)->get();
        $no_seri=hasil_kalibrasi::where('kalibrasi_id',$id)->first();
        $no_order=hasil_kalibrasi::where('kalibrasi_id',$id)->first();
        $kalibrasi = Kalibrasi::findOrFail($id);
        // dd($data);
        $tgl= Carbon::now()->format('d F Y');

        $pdf =PDF::loadView('laporan.sertifikat_kalibrasi', ['hasil' => $hasil,'kalibrasi' => $kalibrasi,'tgl'=>$tgl,'no_seri'=>$no_seri,'no_order'=>$no_order]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan hasil kalibrasi.pdf');
       }//mencetak  hasil pengujian

       public function sertifikat_pengujian($id){
        $id = IDCrypt::Decrypt($id);
        $hasil=hasil_pengujian::where('pengujian_id',$id)->get();
        // dd($hasil);
        $count=hasil_pengujian::where('pengujian_id',$id)->get()->count();
        // dd($count);
        $kode_contoh=hasil_pengujian::where('pengujian_id',$id)->first();
        $pengujian = pengujian::findOrFail($id);
        // dd($data);
        $tgl= Carbon::now()->format('d F Y');

        $pdf =PDF::loadView('laporan.sertifikat_pengujian', ['hasil' => $hasil,'count' => $count,'kode_contoh' => $kode_contoh,'pengujian' => $pengujian,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan hasil pengujian.pdf');
       }//mencetak  hasil pengujian

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

       public function kalibrasi_cetak(){
        $kalibrasi = kalibrasi::all();
        $tgl= Carbon::now()->format('d-m-Y');

        $pdf =PDF::loadView('laporan.kalibrasi_keseluruhan', ['kalibrasi' => $kalibrasi,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Permohonan Kalibrasi Keseluruhan.pdf');
       }

       public function kalibrasi_perusahaan_cetak($id){
        $id = IDCrypt::Decrypt($id);
        $Perusahaan = Perusahaan::find($id);
        $tgl= Carbon::now()->format('d-m-Y');

        $pdf =PDF::loadView('laporan.kalibrasi_perusahaan', ['Perusahaan' => $Perusahaan,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Permohonan Kalibrasi Perusahaan.pdf');
       }

       public function pengujian_cetak(){
        $pengujian = pengujian::all();
        $tgl= Carbon::now()->format('d-m-Y');

        $pdf =PDF::loadView('laporan.pengujian_keseluruhan', ['pengujian' => $pengujian,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Permohonan pengujian Keseluruhan.pdf');
       }


       public function pengujian_perusahaan_cetak($id){
        $id = IDCrypt::Decrypt($id);
        $Perusahaan = Perusahaan::find($id);
        $tgl= Carbon::now()->format('d-m-Y');

        $pdf =PDF::loadView('laporan.kalibrasi_perusahaan', ['Perusahaan' => $Perusahaan,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Permohonan Kalibrasi Perusahaan.pdf');
       }

       public function nota_permohonan_kalibrasi($id){
            $id = IDCrypt::Decrypt($id);
            $kalibrasi = kalibrasi::findOrFail($id);
            $tgl= Carbon::now()->format('d F Y');
            $pdf =PDF::loadView('laporan.nota_permohonan_kalibrasi', ['kalibrasi' => $kalibrasi,'tgl'=>$tgl]);
            $pdf->setPaper('a4', 'potrait');
            return $pdf->stream('Nota terima kalibrasi.pdf');
        }

        public function nota_permohonan_pengujian($id){
            $id = IDCrypt::Decrypt($id);
            $pengujian = pengujian::findOrFail($id);
            $tgl= Carbon::now()->format('d F Y');
            $pdf =PDF::loadView('laporan.nota_permohonan_pengujian', ['pengujian' => $pengujian,'tgl'=>$tgl]);
            $pdf->setPaper('a4', 'potrait');
            return $pdf->stream('Nota terima pengujian.pdf');
        }

}
