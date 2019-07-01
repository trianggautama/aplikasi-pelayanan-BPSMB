@extends('layouts.user')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Beranda User</h4>
        </div>
    </div>
    <!-- 4-blocks row start -->
    <div class="row m-b-30 dashboard-header">
    <div class="col-lg-4 col-sm-6">
                    <div class="dashboard-primary bg-primary">
                        <div class="sales-primary">
                          <i class="icon-envelope-open"></i>
                            <div class="f-right">
                                <h2 class="counter">2</h2>
                            </div>
                        </div>
                        <div class="bg-dark-primary">
                        <a href="{{Route('inbox')}}">
                            <p class="week-sales">Pesan Baru diterima</p>
                            <p class="total-sales">2</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="bg-success dashboard-success">
                        <div class="sales-success">
                        <i class="icon-basket"></i>
                            <div class="f-right">
                                <h2 class="counter">5</h2>
                            </div>
                        </div>
                        <div class="bg-dark-success">
                            <p class="week-sales">Transaksi Kalibrasi</p>
                            <p class="total-sales ">5 kali</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="bg-warning dasboard-warning">
                        <div class="sales-warning">
                            <i class="icon-basket-loaded"></i>
                            <div class="f-right">
                                <h2 class="counter">8</h2>
                            </div>
                        </div>
                        <div class="bg-dark-warning">
                            <p class="week-sales">Transaksi Pengujian</p>
                            <p class="total-sales">8 kali</p>
                        </div>
                    </div>
                </div>
                    <div class="col-md-12" style="margin-top:20px;">
                        <div class="card">
                            <div class="card-header">
                                <h5>PENGUMUMAN !!!</h5>
                            </div>
                            <div class="card-block">
                            <a href="{{ route('perusahaan_tambah')}}" class="btn btn-primary">Klik Disini Untuk Melengkapi/mengubah Profil Anda</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
</div>

@endsection
