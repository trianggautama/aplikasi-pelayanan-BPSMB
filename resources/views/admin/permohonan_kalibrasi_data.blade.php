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
                        <a class="btn btn-inverse-success" href="{{Route('permohonan_kalibrasi_cetak')}}"><i class="icofont icofont-printer"></i> cetak data</a>
                        <a class="btn btn-inverse-success" href="{{Route('permohonan_kalibrasi_filter_bulan')}}"target="_blank"><i class="icofont icofont-printer"></i> cetak data berdasarkan bulan</a>
                        <a class="btn btn-inverse-success" href="{{Route('permohonan_kalibrasi_filter_tahun')}}"target="_blank"><i class="icofont icofont-printer"></i> cetak data berdasarkan tahun</a>
                        <a class="btn btn-inverse-success" href="{{Route('permohonan_kalibrasi_filter_status')}}"target="_blank"><i class="icofont icofont-printer"></i> cetak data berdasarkan status</a>
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
                                {{-- <th>Biaya</th> --}}
                                <th>Tanggal Permohonan</th>
                                <th>Merk</th>
                                <th>No Seri</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                             <?php $no = 0 ?>
                                @foreach ($Kalibrasi as $d)
                                <td>{{$no = $no +1}}</td>
                                <td>{{$d->perusahaan->user->name}}</td>
                                <td>{{$d->retribusi->nama}}</td>
                                {{-- <td>{{ number_format($d->retribusi->biaya)}}</td> --}}
                                <td>{{$d->created_at->format('d-m-Y')}}</td>
                                <td>{{$d->merk}}</td>
                                <td>{{$d->no_seri}}</td>
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
                                @if($d->status == 2 ||$d->status == 3)
                                @else
                                <a href="{{Route('halaman_verifikasi_kalibrasi', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-success" data-toggle="tooltip" data-placement="top" title="Verifikasi" ><i class="icon-check"></i></a>
                                @endif
                                {{-- <a href="{{ route('permohonan_kalibrasi_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icofont icofont-edit-alt"></i></a> --}}
                                <a href="{{ route('permohonan_kalibrasi_hapus', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="hapus"><i class="icofont icofont-ui-delete"></i></a>
                                {{-- <a href="{{ route('permohonan_kalibrasi_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-edit-alt"></i></a> --}}
                                {{-- <a href=" {{route('permohonan_kalibrasi_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-primary"> <i class=" far fa-edit"></i></a> --}}
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
