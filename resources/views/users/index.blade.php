@extends('layouts.user')

@section('content')

<div class="container-fluid">
        <!-- 2-1 block start -->
        <div class="row">
                 <div class="col-xl-12 col-lg-12">
                     <div class="card">
                     <div class="card-header">
                     <h4> Permohonan</h4>
                     </div>
                         <div class="card-block">
                             <div class="table-responsive">
                                 <table class="table m-b-0 photo-table">
                                     <thead>
                                     <tr class="text-uppercase">
                                         <th>Jenis Permohonan</th>
                                         <th class="text-center">Jumlah</th>
                                         <th class="text-center">Ditolak</th>
                                         <th class="text-center">Diterima</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr>
                                         <td> Permohonan Pengujian
                                         </td>
                                         <td class="text-center">
                                             {{$permohonan_pengujian->count()}}
                                         </td>
                                         <td class="text-center">{{$permohonan_pengujian_ditolak->count()}}</td>
                                         <td class="text-center">{{$permohonan_pengujian_diterima->count()}}</td>
                                     </tr>
                                     <tr>
                                         <td>permohonan Kalibrasi
                                         </td>
                                         <td class="text-center">{{$permohonan_kalibrasi->count()}}</td>
                                         <td class="text-center">{{$permohonan_kalibrasi_ditolak->count()}}</td>
                                         <td class="text-center">{{$permohonan_kalibrasi_diterima->count()}}</td>
                                     </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-12 col-lg-12">
                     <div class="card">
                     <div class="card-header">
                     <h4> Pelayanan</h4>
                     </div>
                         <div class="card-block">
                             <div class="table-responsive">
                                 <table class="table m-b-0 photo-table">
                                     <thead>
                                     <tr class="text-uppercase">
                                         <th>Jenis pelayanan</th>
                                         <th class="text-center">Jumlah</th>
                                         <th class="text-center">Pending</th>
                                         <th class="text-center">Dalam Proses</th>
                                         <th class="text-center">Selesai Proses</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr>
                                         <td>  Pengujian
                                         </td>
                                         <td class="text-center">
                                             {{$pengujian->count()}}
                                         </td>
                                         <td class="text-center"> {{$pengujian_pending->count()}}</td>
                                         <td class="text-center"> {{$pengujian_dalam_proses->count()}}</td>
                                         <td class="text-center">{{$pengujian_selesai->count()}}</td>
                                     </tr>
                                     <tr>
                                         <td> Kalibrasi
                                         </td>
                                         <td class="text-center">
                                             {{$kalibrasi->count()}}
                                         </td>
                                         <td class="text-center"> {{$kalibrasi_pending->count()}}</td>
                                         <td class="text-center">{{$kalibrasi_dalam_proses->count()}}</td>
                                         <td class="text-center">{{$kalibrasi_selesai->count()}}</td>
                                     </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
             <!-- 2-1 block end -->

         <!-- Main content ends -->



         <!-- Container-fluid ends -->






     </div>

                    <div class="col-md-12" style="margin-top:20px;">
                        <div class="card">
                            <div class="card-header">
                                @if(Auth::user()->status==0)
                                <h5>PENGUMUMAN !!! <label class="label bg-danger">Akun Anda Belum Terverifikasi</label></h5>
                                    <br>

                                    {{-- @if($perusahaans==0) --}}
                                    <p>Selamat datang di dashboard perusahaan, silahkan tunggu verifikasi dari admin</p>

                                    {{-- @else --}}

                                    {{-- @endif --}}
                                    <p>Anda tidak bisa melakukan permohonan pengujian ataupun kalibrasi sebelum akun anda diverifikasi oleh admin </p>
                                    <p>Silahkan Lengkapi Profil Anda Terlebih Dahulu</p>
                                @else
                                <h5>PENGUMUMAN !!! </h5>
                                @endif
                            </div>
                            {{-- @if(Auth::user()->status==0) --}}
                            <div class="card-block">
                            </div>
                            {{-- @else --}}
                            <div class="card-block">
                            <a href="{{ route('perusahaan_tambah')}}" class="btn btn-primary">Klik Disini Untuk Melengkapi/mengubah Profil Anda</a>
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
