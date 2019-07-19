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
                                            <td> {{ $kalibrasi->created_at->format('d M Y') }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Kalibrasi</th>
                                            <td>{{ $kalibrasi->tanggal }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estimasi</th>
                                            <td>{{ $kalibrasi->estimasi }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">keterangan uji</th>
                                            <td>
                                                    @if($kalibrasi->status == 0)
                                                    <label class="label bg-danger">Gagal Uji</label>
                                                        @elseif($kalibrasi->status == 2)
                                                    <label class="label bg-warning">Pending</label>
                                                        @elseif($kalibrasi->status == 1)
                                                    <label class="label bg-info">Sedang Diuji</label>
                                                        @elseif($kalibrasi->status == 3)
                                                    <label class="label bg-success">Selesai Diuji</label>
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
            <a href="" class="btn btn-danger"><i class="icofont icofont-ui-delete"></i> Hapus Data</a>
            <a href="{{Route('kalibrasi_edit',['id'=>IDCrypt::Encrypt($kalibrasi->id)])}}" class="btn btn-info"><i class="icofont icofont-edit-alt"></i> Edit Data</a>
            <a href="" class="btn btn-primary"> <i class="icofont icofont-printer"></i> Cetak Detail Data</a>
            <a href="{{Route('hasil_kalibrasi_tambah',['id'=>IDCrypt::Encrypt($kalibrasi->id)])}}" class="btn btn-success"> <i class="icofont "></i> input Hasil Kalibrasi</a>
            <a href="{{Route('sertifikat_kalibrasi',['id'=>IDCrypt::Encrypt($kalibrasi->id)])}}" class="btn btn-primary"> <i class="icofont icofont-edit-alt"></i> Input Hasil Uji</a>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
