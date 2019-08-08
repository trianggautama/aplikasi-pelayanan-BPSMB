@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>

    <div class="card">
        <div class="card-header ">
                <h4>Data  Pengujian</h4>
                <div class="text-right">
                        <a class="btn btn-success" href="{{Route('pengujian_cetak')}}" target="_blank"><i class="icofont icofont-printer"></i> cetak data</a>
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
                            <th>Komoditi</th>
                            <th>Biaya</th>
                            <th>Tanggal Verifikasi</th>
                            <th>Tanggal Antar Barang</th>
                            <th>tanggal Pengujian</th>
                            <th>Estimasi</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                             <?php $no = 0 ?>
                            @foreach ($pengujian as $d)
                        <tr>
                            <td>{{$no = $no + 1}}</td>
                            <td>{{ $d->permohonan_pengujian->user->name }}</td>
                            <td>{{ $d->permohonan_pengujian->retribusi->komoditi }}</td>
                            <td>{{ number_format($d->permohonan_pengujian->retribusi->biaya)}}</td>
                            <td>{{ $d->created_at->format('d-m-Y') }}</td>
                            <td>{{ carbon\carbon::parse($d->permohonan_pengujian->inbox->tanggal)->format('d-m-Y') }}</td>
                            @if(isset($d->tanggal))
                            <td>{{ carbon\carbon::parse($d->tanggal)->format('d-m-Y') }}</td>
                            @else
                            <td></td>
                            @endif
                            <td>{{ $d->estimasi }}</td>
                            <td>
                                @if($d->status == 0)
                                <label class="label bg-danger">Ditolak</label>
                                    @elseif($d->status == 2)
                                <label class="label bg-warning">Verifikasi</label>
                                    @elseif($d->status == 1)
                                <label class="label bg-info">Sedang Diuji</label>
                                    @elseif($d->status == 3)
                                <label class="label bg-success">Selesai Diuji</label>
                                @endif
                            </td>
                            </td>
                            <td class="text-center">
                            <a href="{{Route('pengujian_detail',['id'=>IDCrypt::Encrypt($d->id)])}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icon-info"></i></a>
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
