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
                                            <td>CV. ABDI JAYA PLUS</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Kalibrasi</th>
                                            <td> Kalibrasi Aalat ukur kadar abu</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Biaya</th>
                                            <td>Rp.1.500.000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Verifikasi</th>
                                            <td> 15 Juni 2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Kalibrasi</th>
                                            <td>28 Juni 2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estimasi</th>
                                            <td>2 bulan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">keterangan uji</th>
                                            <td><label class="label bg-success">Lulus Uji</label></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Metode Pembayaran</th>
                                            <td><label class="label bg-warning">Transfer</label></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Lain-lain</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Keterangan</th>
                                            <td>-</td>
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
            <a href="{{Route('kalibrasi_edit')}}" class="btn btn-info"><i class="icofont icofont-edit-alt"></i> Edit Data</a>
            <a href="" class="btn btn-primary"> <i class="icofont icofont-printer"></i> Cetak Detail Data</a>
            <a href="{{Route('hasil_kalibrasi_tambah')}}" class="btn btn-success"> <i class="icofont "></i> input Hasil Kalibrasi</a>
            <a href="{{Route('sertifikat_kalibrasi')}}" class="btn btn-primary"> <i class="icofont icofont-edit-alt"></i> Input Hasil Uji</a>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
