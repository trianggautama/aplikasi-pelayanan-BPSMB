@extends('layouts.admin')
@section('content')
<div class="container-fluid" >
<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Detail Kalibrasi</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <div class="card-block">
            <div class="view-info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="general-info">
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <table class="table m-0">
                                        <tbody>
                                        <tr>
                                            <th scope="row">Nama Perusahaan</th>
                                            <td>{{ $kalibrasi->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Kalibrasi</th>
                                            <td>{{ $kalibrasi->permohonan_kalibrasi->retribusi->nama }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Biaya</th>
                                            <td>Rp.{{ $kalibrasi->permohonan_kalibrasi->retribusi->biaya }},-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Verifikasi</th>
                                            <td> {{ $kalibrasi->created_at->format('d-m-Y') }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Antar Barang</th>
                                            <td>{{ carbon\carbon::parse($kalibrasi->permohonan_kalibrasi->inbox->tanggal)->format('d-m-Y') }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Terima Barang</th>
                                            @if(isset($kalibrasi->tanggal_terima))
                                            <td>{{ carbon\carbon::parse($kalibrasi->tanggal_terima)->format('d-m-Y') }}</td>
                                            @else
                                            <td></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Kalibrasi</th>
                                            @if(isset($kalibrasi->tanggal))
                                            <td>{{ carbon\carbon::parse($kalibrasi->tanggal)->format('d-m-Y') }}</td>
                                            @else
                                            <td></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th scope="row">Estimasi</th>
                                            <td>{{ $kalibrasi->estimasi }}</td>
                                        </tr>
                                        @if($kalibrasi->status==3)
                                        <tr>
                                            <th scope="row">Tanggal Selesai</th>
                                            @if(isset($kalibrasi->updated_at))
                                            <td>{{ carbon\carbon::parse($kalibrasi->updated_at)->format('d-m-Y') }}</td>
                                            @else
                                            <td></td>
                                            @endif
                                        </tr>
                                        @else
                                        @endif
                                        @if($kalibrasi->status==3)
                                        <tr>
                                            <th scope="row">Tanggal Upload Sertifikat</th>
                                            @if(isset($kalibrasi->updated_at))
                                            <td>{{ carbon\carbon::parse($kalibrasi->updated_at)->format('d-m-Y') }}</td>
                                            @else
                                            <td></td>
                                            @endif
                                        </tr>
                                        @else
                                        @endif
                                        <tr>
                                            <th scope="row">keterangan uji</th>
                                            <td>
                                                    @if(isset($kalibrasi->sertifikat))
                                                    <label class="label bg-success">Terverifikasi</label>
                                                    @else
                                                    @if($kalibrasi->status == 0)
                                                    <label class="label bg-danger">Gagal Uji</label>
                                                        @elseif($kalibrasi->status == 2)
                                                    <label class="label bg-warning">Verifikasi</label>
                                                        @elseif($kalibrasi->status == 1)
                                                    <label class="label bg-info">Sedang Diuji</label>
                                                        @elseif($kalibrasi->status == 3)
                                                    <label class="label bg-success">Selesai Diuji</label>
                                                    @endif
                                                    @endif
                                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Metode Pembayaran</th>
                                                <td>
                                                    @if($kalibrasi->metode_pembayaran == 1)
                                                    <label class="label bg-info">Cash</label>
                                                    @elseif($kalibrasi->metode_pembayaran == 2)
                                                    <label class="label bg-success">Transfer</label>
                                                    @else
                                                    <label class="label bg-warning">Belum Dibayar</label>
                                                    @endif
                                                </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Lain-lain</th>
                                            <td>{{ $kalibrasi->lainnya }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Keterangan</th>
                                            <td>{{ $kalibrasi->keterangan }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of general info -->
                    </div>
                    <!-- end of col-lg-12 -->
                </div>
                <!-- end of row -->
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="{{ route('kalibrasi_hapus', ['id' => IDCrypt::Encrypt( $kalibrasi->id)])}}" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="hapus"><i class="icofont icofont-ui-delete"></i>Hapus Data</a>
            @if($kalibrasi->status==3)
            {{-- <a href="" class="btn btn-danger"><i class="icofont icofont-ui-delete"></i> Hapus Data</a> --}}
            @else
            <a href="{{Route('kalibrasi_edit',['id'=>IDCrypt::Encrypt($kalibrasi->id)])}}" class="btn btn-info"><i class="icofont icofont-edit-alt"></i> Edit Data</a>
            @endif
            @if(isset($kalibrasi->tanggal))
            <a href="{{Route('nota_permohonan_kalibrasi',['id'=>IDCrypt::Encrypt($kalibrasi->id)])}}" class="btn btn-primary"> <i class="icofont icofont-printer"></i> Cetak Tanda Terima</a>
            @else
            @endif
            @if(isset($kalibrasi->hasil_kalibrasi->id))
            @elseif($kalibrasi->status==3)
            <a href="{{Route('hasil_kalibrasi_tambah',['id'=>IDCrypt::Encrypt($kalibrasi->id)])}}" class="btn btn-success"> <i class="icofont "></i> input Hasil Kalibrasi</a>
            @endif
            @if(isset($kalibrasi->hasil_kalibrasi->id))
            <a href="{{Route('sertifikat_kalibrasi',['id'=>IDCrypt::Encrypt($kalibrasi->id)])}}" class="btn btn-primary"> <i class="icofont icofont-printer"></i> Cetak Sertifikat</a>
            @else
            @endif
            @if(isset($kalibrasi->sertifikat))
            @else
            <a href="{{Route('kalibrasi_sertifikat_edit',['id'=>IDCrypt::Encrypt($kalibrasi->id)])}}" class="btn btn-primary"> <i class="icofont icofont-upload"></i> Upload Sertifikat</a>
            @endif
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
