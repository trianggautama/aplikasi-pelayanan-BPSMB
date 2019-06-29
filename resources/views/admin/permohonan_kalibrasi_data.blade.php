@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>

    <div class="card">
        <div class="card-header ">
                <h4>Data Permohonan Kalibrasi</h4>
                <div class="text-right">
                        <a class="btn btn-inverse-success" href=""><i class="icofont icofont-printer"></i> cetak data</a>
                    </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Barang Kalibrasi</th>
                            <th>Biaya</th>
                            <th>Tanggal</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0 ?>                                
                            @foreach ($Kalibrasi as $d) 
                            <tr>
                            <td>{{$no = $no + 1}}</td>
                            <td>{{$d->perusahaan->user->name}}</td>
                            <td>{{$d->retribusi->nama}}</td>
                            <td>Rp. {{$d->retribusi->biaya}}</td>
                            <td>{{$d->tanggal}}</td>
                            <td class="text-center">
                            <a href="" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"> <i class="icon-eye"></i></i></a>
                            <a href="" class="btn btn-inverse-success" data-toggle="tooltip" data-placement="top" title="Verifikasi" ><i class="icon-check"></i></a>
                            <button type="button" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="Hapus"
                            onclick="Hapus('{{Crypt::encryptString($d->id)}}')"><b><i class="icon-trash"></i></b></button>
                        </td>
                        </tr>
                        @endforeach   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
