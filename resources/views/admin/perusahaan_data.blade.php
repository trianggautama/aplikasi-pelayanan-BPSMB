@extends('layouts.admin')

@section('title', __('outlet.list'))

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>

    <div class="card">
        <div class="card-header ">
                <h4>Data Perusahaan</h4>
                <div class="text-right">
                        <a class="btn btn-inverse-primary" href="{{ route('admin_perusahaan_tambah') }}"><i class="icofont icon-arrow-add"></i>+ Tambah Data</a>
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
                            <th>Alamat Perusahaan</th>
                            <th>No Tlp</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <?php $no = 0 ?>
                            @foreach ($Perusahaan as $p)
                            <td>{{$no = $no + 1}}</td>
                            <td>{{$p->user->name}}</td>
                            <td>{{$p->alamat}}</td>
                            <td>{{$p->telepon}}</td>
                            <td>@if($p->status == 0)
                            <label class="label bg-success">Aktif</label>
                                @else
                            <label class="label bg-warning">Banned</label>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($p->status==0)
                                <form action="{{ route('status_update', ['id' => IDCrypt::Encrypt( $p->id)]) }}" method="POST">
                                        {{method_field('PUT') }}
                                        {{ csrf_field() }}
                                        {{-- <a href="" class="btn btn-inverse-warning" data-toggle="tooltip" data-placement="top" title="Banned" ><i class="icon-close"></i></i></a> --}}
                                        <button type="submit" class="btn btn-inverse-warning" data-toggle="tooltip" data-placement="top" title="Banned" name="status" value="1" ><i class="icon-close"></i></i></button>
                                    </form>
                                @else
                                <form action="{{ route('status_update', ['id' => IDCrypt::Encrypt( $p->id)]) }}" method="POST">
                                        {{method_field('PUT') }}
                                        {{ csrf_field() }}
                                        {{-- <a href="" class="btn btn-inverse-warning" data-toggle="tooltip" data-placement="top" title="Banned" ><i class="icon-close"></i></i></a> --}}
                                        <button type="submit" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Aktif" name="status" value="0" ><i class="icofont icofont-check-circled"></i></i></button>
                                    </form>
                                @endif
                                <a href="{{ route('admin_perusahaan_detail', ['id' => IDCrypt::Encrypt( $p->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a>
                                <a href="" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="hapus"><i class="icofont icofont-ui-delete"></i></a>
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
