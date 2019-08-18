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
                        {{-- <a class="btn btn-inverse-primary" href="{{ route('admin_perusahaan_tambah') }}"><i class="icofont icon-arrow-add"></i>+ Tambah Data</a>
                        <a class="btn btn-inverse-success" href="{{ route('laporan_perusahaan_keseluruhan') }}" target="_blank"><i class="icofont icofont-printer"></i> cetak data</a>
                        <a class="btn btn-inverse-success" href="{{ route('laporan_perusahaan_filter_status') }}"><i class="icofont icofont-printer"></i> cetak data berdasarkan status</a> --}}
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
                            <th class="text-center">Cetak Riwayat Kalibrasi</th>
                            <th class="text-center">Cetak Riwayat Pengujian</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <?php $no = 0 ?>
                            @foreach ($Perusahaan as $p)
                            @if($p->user->status == 1)
                            <td>{{$no = $no + 1}}</td>
                            <td>{{$p->user->name}}</td>
                            <td class="text-center">
                                @if(isset($p->permohonan_kalibrasi))
                                <a  target="_blank" href="{{Route('kalibrasi_perusahaan_cetak',['id'=>IDCrypt::Encrypt($p->id)])}}" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Cetak Data"><i class="icofont icofont-print"></i></a>

                                 @else
                                @endif

                            </td>
                            <td class="text-center">
                                @if(isset($p->permohonan_pengujian))
                                <a  target="_blank" href="{{Route('pengujian_perusahaan_cetak',['id'=>IDCrypt::Encrypt($p->id)])}}" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Cetak Data"><i class="icofont icofont-print"></i></a>

                                 @else
                                @endif

                            </td>
                            @else
                            @endif
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
