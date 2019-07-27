<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
// use App\User;
use IDCrypt;
use Hash;
Use File;
Use PDF;

class userController extends Controller
{

        //dashboard admin
        public function index(){
            $user = User::findOrFail(Auth::user()->id);
            $perusahaan = $user->perusahaan;
            // dd($perusahaan->user->status);
            if(isset($perusahaan)){
                $perusahaans = 1;
            }else{
                $perusahaans = 0;
            }


            // if($perusahaan == 0){
            //   $perusahaans = 'Sudah Terverifikasi';
            //   }
            //   $perusahaans = 'Belum Terverifikasi';

            return view('users.index',compact('perusahaans'));
        }

    public function inbox(){
        $id = Auth::user()->id;
        // dd($id);
        $inbox_pengujian = inbox::first();
        // dd($inbox->permohonan_pengujian->user_id);
        $inbox = inbox::where('user_id',$id)->get();
        // dd($inbox);

          return view('users.inbox',compact('inbox'));
      }

      public function show_message($id){
        $id = IDCrypt::Decrypt($id);
        // dd($id);
        $inbox = inbox::find($id);
        $date = carbon::parse($inbox->created_at);
        // dd($date);
        // dd($inbox);

        return view('users.show_message',compact('inbox','date'));
    }

        public function perusahaan_tambah(){
            $user = User::findOrFail(Auth::user()->id);
            // dd($user);
            $perusahaan = $user->perusahaan;
            // // dd($perusahaan);
            // $perusahaan = count($perusahaan);
            if(isset($perusahaan)){
                $perusahaans = 1;
              }else{
                $perusahaans = 0;
              }
            //dd($perusahaan);
            if($perusahaans == 0){
                return view('users.perusahaan_tambah');
            }
                $perusahaan_data = perusahaan::where('user_id',Auth::user()->id)->first();
                return view('users.perusahaan_edit',compact('perusahaan_data'));
        }

        public function perusahaan_tambah_store(Request $request){
            $user_id = Auth::user()->id;

            $user = new User;

            if ($request->foto!=null) {
                $FotoExt  = $request->foto->getClientOriginalExtension();
                $FotoName = 'perusahaan'.$request->user_id;
                $foto     = $FotoName.'.'.$FotoExt;
                $request->foto->move('images/perusahaan', $foto);
                $user->foto= $foto;
            }else {
                $user->foto = 'default.jpg';
              }
            $perusahaan = new perusahaan;

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

        public function perusahaan_update(Request $request, $id){
            $user_id = Auth::user()->id;
            $user = user::findOrFail($user_id);
            // dd($user_id);
            // $user = User::find($perusahaan->user_id);

            // //  $this->validate(request(),[
            // //     'kode_rambu'=>'required',
            // //     'nama_rambu'=>'required',
            // //     'keterangan'=>'required'
            // // ]);
            // $user->name     = $request->name;
            // $user->email    = $request->email;
            // // $user->password    = $request->password;
            // $password       = Hash::make($request->password);
            // $user->password = $password;

            if($request->foto != null){
            $FotoExt  = $request->foto->getClientOriginalExtension();
            $FotoName = $request->user_id.' - '.$request->nama_perusahaan;
            $foto   = $FotoName.'.'.$FotoExt;
            $request->foto->move('images/perusahaan', $foto);
            $user->foto       = $foto;
            }

            $id = IDCrypt::Decrypt($id);
            $perusahaan = Perusahaan::findOrFail($id);

            $perusahaan->alamat       = $request->alamat;
            $perusahaan->telepon      = $request->telepon;
            $perusahaan->website      = $request->website;

            // $user->update();
            $perusahaan->update();
            return redirect(route('user_index'))->with('success', 'Data Perusahaan '.$request->name.' Berhasil di ubah');
             }

       //permohonan kalibarsi user
        public function permohonan_kalibrasi_index(){
        $id = auth::id();
        $perusahaan= perusahaan::where('user_id',$id)->first();
        if(isset($perusahaan)){
            $status=1;
        }else{
            $status=0;
        }

        $kalibrasi     = Permohonan_kalibrasi::where('user_id', $id)->get();
        // $kalibrasi->dd();
        return view('users.permohonan_kalibrasi_data',compact('kalibrasi','perusahaan','status'));
        }

        // tambah permohonan kalibarsi user
        public function permohonan_kalibrasi_tambah(){
        $id = auth::id();
        $kalibrasi  = Retribusi_kalibrasi::all();
        $perusahaan = Perusahaan::where('user_id',$id)->first();
        $Date = Carbon::now();
        return view('users.permohonan_kalibrasi_tambah',compact('kalibrasi','perusahaan','Date'));
         }

        public function permohonan_kalibrasi_store(Request $request){

        $kalibrasi = new Permohonan_kalibrasi;

        // $Date = Carbon::now()->toDateString();
        $user_id = auth::id();
        $kalibrasi->user_id                 = $user_id;
        $kalibrasi->perusahaan_id           = $request->perusahaan_id;
        $kalibrasi->retribusi_kalibrasi_id  = $request->retribusi_kalibrasi_id;
        // $kalibrasi->tanggal                 = $Date;
        $kalibrasi->tanggal                    = $request->tanggal;
        $kalibrasi->merk                    = $request->merk;
        $kalibrasi->no_seri                 = $request->no_seri;
    // dd($request);

        $kalibrasi->save();

          return redirect(route('permohonan_kalibrasi_user_index'))->with('success', 'Data permohonan kalibrasi '.$request->merk.' Berhasil di Tambahkan');
      }//fungsi menambahkan data permohonan kalibrasi


      //edit permohonan kalibarsi user
      public function permohonan_kalibrasi_edit($id){
        $id = IDCrypt::Decrypt($id);
        $kalibrasi=permohonan_kalibrasi::findOrFail($id)->first();
        $user_id = auth::id();
        $retribusi = retribusi_kalibrasi::where('id',$kalibrasi->retribusi_kalibrasi_id)->first();
        $perusahaan = Perusahaan::where('user_id',$user_id)->first();
        // dd($kalibrasi);
        return view('users.permohonan_kalibrasi_edit',compact('kalibrasi','perusahaan','retribusi'));
         }

      public function permohonan_kalibrasi_update(Request $request, $id){
        $id = IDCrypt::Decrypt($id);
        $kalibrasi = permohonan_kalibrasi::findOrFail($id);

    //     $this->validate(request(),[
    //        'komoditi'=>'required',
    //        'biaya'=>'required',
    //        'keterangan'=>'required'
    //    ]);


        $kalibrasi->perusahaan_id           = $request->perusahaan_id;
        $kalibrasi->retribusi_kalibrasi_id  = $request->retribusi_kalibrasi_id;
        // $kalibrasi->tanggal                 = $Date;
        $kalibrasi->tanggal                    = $request->tanggal;
        $kalibrasi->merk                    = $request->merk;
        $kalibrasi->no_seri                 = $request->no_seri;


        $kalibrasi->update();
       return redirect(route('permohonan_kalibrasi_user_index'))->with('success', 'Data retribusi pengujian '.$request->komoditi.' Berhasil di Ubah');
      }//fungsi mengubah data retribusi pengujian

      //permohonan pengujian user
      public function permohonan_pengujian_index(){
        $id = auth::id();
        $pengujian     = Permohonan_pengujian::where('user_id', $id)->get();
        $perusahaan= perusahaan::where('user_id',$id)->first();
        if(isset($perusahaan)){
            $status=1;
        }else{
            $status=0;
        }
        // $pengujian->dd();
        return view('users.permohonan_pengujian_data',compact('pengujian','perusahaan','status'));
        }

        // tambah permohonan pengujian user
        public function permohonan_pengujian_tambah(){
        $id = auth::id();
        $pengujian  = Retribusi_pengujian::all();
        $perusahaan = Perusahaan::where('user_id',$id)->first();
        $Date = Carbon::now();
        return view('users.permohonan_pengujian_tambah',compact('pengujian','perusahaan','Date'));
         }

        public function permohonan_pengujian_store(Request $request){

        $pengujian = new Permohonan_pengujian;
        //dd($request);
        //$Date = Carbon::now()->toDateString();
        $user_id = auth::id();
        $pengujian->user_id                 = $user_id;
        $pengujian->perusahaan_id           = $request->perusahaan_id;
        $pengujian->retribusi_pengujian_id  = $request->retribusi_pengujian_id;
        //$pengujian->tanggal              = $Date;
        //$pengujian->tanggal                 = $request->tanggal;
        $pengujian->keterangan              = $request->keterangan;
        // dd($request);

        $pengujian->save();

          return redirect(route('permohonan_pengujian_user_index'))->with('success', 'Data permohonan pengujian '.$request->merk.' Berhasil di Tambahkan');
      }//fungsi menambahkan data permohonan pengujian


      //edit permohonan kalibarsi user
      public function permohonan_pengujian_edit($id){
        $id = IDCrypt::Decrypt($id);
        $pengujian=permohonan_pengujian::findOrFail($id)->first();
        $retribusi= retribusi_pengujian::all();
        // dd($pengujian);
        return view('users.permohonan_pengujian_edit',compact('pengujian','retribusi'));
         }

      public function permohonan_pengujian_update(Request $request, $id){
        //dd('tes');
        $id = IDCrypt::Decrypt($id);
        $pengujian = permohonan_pengujian::findOrFail($id);

    //     $this->validate(request(),[
    //        'komoditi'=>'required',
    //        'biaya'=>'required',
    //        'keterangan'=>'required'
    //    ]);


        $pengujian->retribusi_pengujian_id  = $request->retribusi_pengujian_id;
        $pengujian->keterangan              = $request->keterangan;


        $pengujian->update();
       return redirect(route('permohonan_pengujian_user_index'))->with('success', 'Data retribusi pengujian '.$request->komoditi.' Berhasil di Ubah');
      }//fungsi mengubah data retribusi pengujian

      public function kalibrasi_index(){
        $id = auth::id();
        $perusahaan= perusahaan::where('user_id',$id)->first();
        if(isset($perusahaan)){
            $status=1;
        }else{
            $status=0;
        }
        $permohonan_kalibrasi     = Permohonan_kalibrasi::where('user_id', $id)->get();
        // $kalibrasi->dd();
        return view('users.kalibrasi_data',compact('permohonan_kalibrasi','perusahaan','status'));
        }

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

        public function download_sertifikat_kalibrasi($id) {
        // $file = CommUploads::where('id', $fileID)->first();
        // dd($id);
        $id = IDCrypt::Decrypt($id);
        $file = Kalibrasi::where('id',$id)->first();
        // dd($file);
        // if (Auth::user()->id == $file->user_id || Auth::user()->id == $file->artist_id) {
        return response()->download(storage_path('sertifikat/kalibrasi' . $file->sertifikat));
            // }
        }

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

        public function pengujian_index(){
            $id = auth::id();
            $perusahaan= perusahaan::where('user_id',$id)->first();
            if(isset($perusahaan)){
                $status=1;
            }else{
                $status=0;
            }
            $permohonan_pengujian     = Permohonan_pengujian::where('user_id', $id)->get();
            // $kalibrasi->dd();
            return view('users.pengujian_data',compact('permohonan_pengujian','perusahaan','status'));
            }


}
