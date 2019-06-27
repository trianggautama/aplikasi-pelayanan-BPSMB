@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>

    <div class="card">
        <div class="card-header ">
                <h4>Data  Kalibrasi</h4>
                <div class="text-right">
                        <a class="btn btn-inverse-success" href=""><i class="icofont icofont-printer"></i> cetak data</a>
                    </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 tablea-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Barang Kalibrasi</th>
                            <th>Biaya</th>
                            <th>Tanggal Verifikasi</th>
                            <th>tanggal Klaibrasi</th>
                            <th>Estimasi</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php $no = 0 ?>                                
                            <td>{{$no = $no + 1}}</td>
                            <td>cv.abdi jaya plus</td>
                            <td>kalibrasi alat ukur beras</td>
                            <td>Rp.1.500.000</td>
                            <td>15 juli 2019</td>
                            <td>-</td>
                            <td>2 Bulan</td>
                            <td> <label for="" class="text-success">Lulus Uji</label></td>
                            <td class="text-center">
                            <a href="{{Route('kalibrasi_detail')}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icon-info"></i></a>
                        </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
