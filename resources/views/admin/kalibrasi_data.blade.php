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
                        <a class="btn btn-inverse-success" href="{{Route('kalibrasi_cetak')}}"><i class="icofont icofont-printer"></i> cetak data</a>
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
                            <th>Tanggal Antar Barang</th>
                            <th>Tanggal Kalibrasi</th>
                            <th>Estimasi</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 0 ?>
                            @foreach ($kalibrasi as $d)
                        <tr>
                            <td>{{$no = $no + 1}}</td>
                            <td>{{ $d->permohonan_kalibrasi->user->name }}</td>
                            <td>{{ $d->permohonan_kalibrasi->retribusi->nama }}</td>
                            <td>{{ number_format($d->permohonan_kalibrasi->retribusi->biaya)}}</td>
                            {{-- <td>Rp.{{ $d->permohonan_kalibrasi->retribusi->biaya }},-</td> --}}
                            <td>{{ $d->created_at->format('d-m-Y') }}</td>
                            <td>{{ carbon\carbon::parse($d->permohonan_kalibrasi->inbox->tanggal)->format('d-m-Y') }}</td>
                            @if(isset($d->tanggal))
                            <td>{{ carbon\carbon::parse($d->tanggal)->format('d-m-Y') }}</td>
                            @else
                            <td></td>
                            @endif
                            <td>{{ $d->estimasi }}</td>
                            <td>
                                @if($d->status == 0 || $d->status == 2)
                                <label class="label bg-warning">Pending</label>
                                    @elseif($d->status == 1)
                                <label class="label bg-info">Sedang Diuji</label>
                                    @elseif($d->status == 3)
                                <label class="label bg-success">Selesai Diuji</label>
                                @endif
                            </td>
                            <td class="text-center">
                                    {{-- <a href="{{ route('admin_perusahaan_detail', ['id' => IDCrypt::Encrypt( $p->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a> --}}
                            <a href="{{Route('kalibrasi_detail',['id'=>IDCrypt::Encrypt($d->id)])}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icon-info"></i></a>
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
