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
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Nama Barang</th>
                            <th>Biaya</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php $no = 0 ?>
                            @foreach ($pengujian as $d)
                            <td>{{$no = $no + 1}}</td>
                            <td>{{$d->perusahaan->user->name}}</td>
                            <td>{{$d->retribusi->komoditi}}</td>
                            <td>{{$d->retribusi->biaya}}</td>
                            <td>{{$d->created_at->format('d-m-Y')}}</td>
                            <td>{{$d->keterangan}}</td>
                            <td class="text-center">
                            <a href="{{ route('permohonan_pengujian_user_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icofont icofont-edit-alt"></i></a>
                            {{-- <a href="{{ route('permohonan_pengujian_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-edit-alt"></i></a> --}}
                            {{-- <a href=" {{route('permohonan_pengujian_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-primary"> <i class=" far fa-edit"></i></a> --}}
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
