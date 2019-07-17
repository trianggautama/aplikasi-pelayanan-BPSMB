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
                           
                        @endforeach   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
