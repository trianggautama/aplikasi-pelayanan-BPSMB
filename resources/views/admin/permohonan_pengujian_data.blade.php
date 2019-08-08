@extends('layouts.admin')
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
                        <a class="btn btn-inverse-success" href="{{Route('permohonan_pengujian_cetak')}}"><i class="icon-arrow-add"></i>cetak data</a>
                        <a class="btn btn-inverse-success" href="{{Route('permohonan_pengujian_filter_bulan')}} "target="_blank"><i class="icofont icofont-printer"></i> cetak data berdasarkan bulan</a>
                        <a class="btn btn-inverse-success" href="{{Route('permohonan_pengujian_filter_tahun')}} "target="_blank"><i class="icofont icofont-printer"></i> cetak data berdasarkan tahun</a>
                        <a class="btn btn-inverse-success" href="{{Route('permohonan_pengujian_filter_status')}} "target="_blank"><i class="icofont icofont-printer"></i> cetak data berdasarkan status</a>
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
                            <th>Barang Pengujian</th>
                            <th>Biaya</th>
                            <th>Tanggal Permohonan</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                <?php $no = 0 ?>
                                @foreach ($pengujian as $d)
                                <tr>
                                <td>{{$no = $no + 1}}</td>
                                <td>{{$d->perusahaan->user->name}}</td>
                                <td>{{$d->retribusi->komoditi}}</td>
                                <td>{{ number_format($d->retribusi->biaya)}}</td>
                                <td>{{$d->created_at->format('d-m-Y')}}</td>
                                <td>{{$d->keterangan}}</td>
                                <td>
                                @if($d->status == 3)
                                <label class="label bg-danger">Ditolak</label>
                                    @elseif($d->status == 1)
                                <label class="label bg-warning">Pending</label>
                                    @elseif($d->status == 2)
                                <label class="label bg-info">Verifikasi</label>
                                    @endif
                                </td>
                                <td class="text-center">
                                        {{-- <a href="{{ route('admin_perusahaan_detail', ['id' => IDCrypt::Encrypt( $p->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a> --}}
                                {{-- <a href="" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"> <i class="icon-eye"></i></i></a> --}}
                                @if($d->status == 2 ||$d->status == 3)
                                @else
                                <a href="{{Route('halaman_verifikasi', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-success" data-toggle="tooltip" data-placement="top" title="Verifikasi" ><i class="icon-check"></i></a>
                                @endif
                                <a href="{{ route('permohonan_pengujian_hapus', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="hapus"><i class="icofont icofont-ui-delete"></i></a>
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
