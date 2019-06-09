@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>
    <div class="card">
        <div class="card-header ">
                <h4>Data Permohonan Pengujian</h4>
                <div class="text-right">
                        <a class="btn btn-inverse-primary" href="{{route('permohonan_pengujian_user_tambah')}}"><i class="icon-arrow-add"></i>BuaT Permohonan</a>
                        <a class="btn btn-inverse-success" href=""><i class="icon-arrow-add"></i>cetak data</a>
                    </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Perusahaan</th>
                            <th>Barang Pengujian</th>
                            <th>Biaya</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>UPT PKB</td>
                            <td>Speedometer</td>
                            <td>Rp.12.000.000</td>
                            <td>1 Mei 2019</td>
                            <td>-</td>
                            <td class="text-center">\
                            <a href="{{route('permohonan_pengujian_user_edit')}}" class="btn btn-inverse-primary"> edit</a>
                            <a href="" class="btn btn-inverse-danger"> hapus</a>
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
