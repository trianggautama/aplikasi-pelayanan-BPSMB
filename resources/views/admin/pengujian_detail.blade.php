@extends('layouts.admin')
@section('content')
<div class="container-fluid" >
<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Detail Pengujian</h5>
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
                                            <td>{{ $pengujian->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pengujian</th>
                                            <td> {{ $pengujian->permohonan_pengujian->retribusi->komoditi }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Biaya</th>
                                            <td>Rp.{{ $pengujian->permohonan_pengujian->retribusi->biaya }},-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Verifikasi</th>
                                            <td> {{ $pengujian->created_at->format('d M Y') }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Pengujian</th>
                                            <td>{{ $pengujian->tanggal }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estimasi</th>
                                            <td>{{ $pengujian->estimasi }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">keterangan uji</th>
                                            <td>
                                                @if($pengujian->status == 0)
                                                    <label class="label bg-danger">Gagal Uji</label>
                                                        @elseif($pengujian->status == 2)
                                                    <label class="label bg-warning">Pending</label>
                                                        @elseif($pengujian->status == 1)
                                                    <label class="label bg-info">Sedang Diuji</label>
                                                        @elseif($pengujian->status == 3)
                                                    <label class="label bg-success">Selesai Diuji</label>
                                                    @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Metode Pembayaran</th>
                                            <td>
                                                @if($pengujian->metode_pembayaran == 1)
                                                    <label class="label bg-info">Cash</label>
                                                    @elseif($pengujian->metode_pembayaran == 2)
                                                    <label class="label bg-success">Transfer</label>
                                                    @else
                                                    <label class="label bg-warning">Belum Dibayar</label>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Lain-lain</th>
                                            <td>{{ $pengujian->lainnya }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Keterangan</th>
                                            <td>{{ $pengujian->keterangan }}</td>
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
            <a href="{{Route('pengujian_edit',['id'=>IDCrypt::Encrypt($pengujian->id)])}}" class="btn btn-info"><i class="icofont icofont-edit-alt"></i> Edit Data</a>
            @if(isset($pengujian->tanggal))
            <a href="{{Route('nota_permohonan_pengujian',['id'=>IDCrypt::Encrypt($pengujian->id)])}}" class="btn btn-primary"> <i class="icofont icofont-printer"></i> Cetak Tanda Terima</a>
            <a href="{{Route('hasil_pengujian_tambah',['id'=>IDCrypt::Encrypt($pengujian->id)])}}" class="btn btn-success"> <i class="icofont "></i> input Hasil pengujian</a>
            @else
            @endif
            @if(isset($pengujian->hasil_pengujian->id))
            <a href="{{Route('sertifikat_pengujian',['id'=>IDCrypt::Encrypt($pengujian->id)])}}" class="btn btn-primary"> <i class="icofont icofont-edit-alt"></i> Cetak Sertifikat</a>
            <a href="{{Route('pengujian_sertifikat_edit',['id'=>IDCrypt::Encrypt($pengujian->id)])}}" class="btn btn-primary"> <i class="icofont icofont-edit-alt"></i> Upload Sertifikat</a>
            @else
            @endif

        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
