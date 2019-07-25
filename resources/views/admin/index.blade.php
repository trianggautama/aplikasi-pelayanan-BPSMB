@extends('layouts.admin')
@section('content')
<br>
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
                                        <td class="text-center"> {{$pengujian_dalam_proses->count()}}</td>
                                        <td class="text-center">{{$pengujian_selesai->count()}}</td>
                                    </tr>
                                    <tr>
                                        <td> Kalibrasi
                                        </td>
                                        <td class="text-center">
                                            {{$kalibrasi->count()}}
                                        </td>
                                        <td class="text-center">{{$kalibrasi_dalam_proses->count()}}</td>
                                        <td class="text-center">{{$kalibrasi_selesai->count()}}</td>
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
                    <h4>Perusahaan</h4>
                    </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table m-b-0 photo-table">
                                    <thead>
                                    <tr class="text-uppercase">
                                        <th>-</th>
                                        <th>Perusahaan</th>
                                        <th class="text-center">Jumlah</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <img class="img-fluid rounded-circle" src="assets/images/avatar-3.png" alt="User">
                                        </th>
                                        <td>  Perusahaan
                                        </td>
                                        <td class="text-center">
                                            {{$perusahaan->count()}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->



        <!-- Container-fluid ends -->
   
   
   
   
   
   
    </div>
    




<div class="container-fluid">@endsection
