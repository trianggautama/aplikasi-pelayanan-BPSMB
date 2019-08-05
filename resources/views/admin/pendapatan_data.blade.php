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
                        <a class="btn btn-inverse-success" href="{{Route('pendapatan_cetak')}}" target="_blank"><i class="icofont icofont-printer"></i> cetak data</a>
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
                            <th>Tanggal Kalibrasi</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 0 ?>
                            @foreach ($pendapatan_k as $d)
                        <tr>
                            <td>{{$no = $no + 1}}</td>
                            <td>{{ $d->kalibrasi->permohonan_kalibrasi->user->name }}</td>
                            <td>{{ $d->kalibrasi->permohonan_kalibrasi->retribusi->nama }}</td>
                            <td>{{ number_format($d->kalibrasi->permohonan_kalibrasi->retribusi->biaya)}}</td>
                            @if(isset($d->kalibrasi->tanggal))
                            <td>{{ carbon\carbon::parse($d->kalibrasi->tanggal)->format('d-m-Y') }}</td>
                            @else
                            <td></td>
                            @endif
                            <td>{{ $d->kalibrasi->estimasi }}</td>
                        </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                    <div class="col-sm-12 tablea-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Komoditi</th>
                            <th>Biaya</th>
                            <th>tanggal Pengujian</th>
                        </tr>
                        </thead>
                        <tbody>
                             <?php $no = 0 ?>
                            @foreach ($pendapatan_p as $d)
                        <tr>
                            <td>{{$no = $no + 1}}</td>
                            <td>{{ $d->pengujian->permohonan_pengujian->user->name }}</td>
                            <td>{{ $d->pengujian->permohonan_pengujian->retribusi->komoditi }}</td>
                            <td>{{ number_format($d->pengujian->permohonan_pengujian->retribusi->biaya)}}</td>
                            @if(isset($d->pengujian->tanggal))
                            <td>{{ carbon\carbon::parse($d->pengujian->tanggal)->format('d-m-Y') }}</td>
                            @else
                            <td></td>
                            @endif


                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h1>Total Pendapatan Kalibrasi Rp.{{ number_format($total_pendapatan_k)}},-</h1>
                    <h1>Total Pendapatan Pengujian Rp.{{ number_format($total_pendapatan_p)}},-</h1>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
