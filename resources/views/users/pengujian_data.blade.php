@extends('layouts.user')
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
                        {{-- <a class="btn btn-success" href=""><i class="icofont icofont-printer"></i> cetak data</a> --}}
                    </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 tablea-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Komoditi</th>
                            <th>Biaya</th>
                            <th>Tanggal permohonan</th>
                            <th>Tanggal Verifikasi</th>
                            <th>tanggal Pengujian</th>
                            <th>Estimasi</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                             <?php $no = 0 ?>
                            @foreach ($permohonan_pengujian as $d)
                        <tr>
                            <td>{{$no = $no + 1}}</td>
                            <td>{{ $d->retribusi->komoditi }}</td>
                            <td>Rp. {{ $d->retribusi->biaya }}</td>
                            <td>{{$d->created_at->format('d-m-Y')}}</td>
                            <td>{{ $d->pengujian->created_at->format('d-m-Y') }}</td>
                            <td>{{ $d->pengujian->tanggal }}</td>
                            <td>{{ $d->pengujian->estimasi }} Minggu</td>
                            <td>
                                @if($d->pengujian->status == 0)
                                <label class="label bg-danger">Ditolak</label>
                                    @elseif($d->pengujian->status == 2)
                                <label class="label bg-warning">Pending</label>
                                    @elseif($d->pengujian->status == 1)
                                <label class="label bg-info">Sedang Diuji</label>
                                    @elseif($d->pengujian->status == 3)
                                <label class="label bg-success">Selesai Diuji</label>
                                @endif
                            </td>
                            </td>
                            <td class="text-center">
                            @if($d->pengujian->status== 3)
                            <a href="{{Route('sertifikat_pengujian_user',['id'=>IDCrypt::Encrypt($d->id)])}}" class="btn btn-primary"> <i class="icofont icofont-edit-alt"></i> Cetak Sertifikat</a>
                            @else
                            <a href="#" class="btn btn-danger"> Belum Dapat Dicetak</a>
                            @endif
                            {{-- <a href="{{Route('pengujian_user_detail')}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icon-info"></i></a> --}}
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
