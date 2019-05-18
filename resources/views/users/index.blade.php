@extends('layouts.user')

@section('title', __('outlet.list'))

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
                    <div class="col-sm-12 card dashboard-product">
                        <span>Perusahaan</span>
                        <h2 class="dashboard-total-products counter">12</h2>
                        <span class="label label-warning">Perusahaan </span>Terdaftar
                        <div class="side-box bg-warning">
                            <i class="icon-social-soundcloud"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>kalibrasi</span>
                        <h2 class="dashboard-total-products counter">120</h2>
                        <span class="label label-primary">Riwayat</span>Kalibrasi
                        <div class="side-box bg-primary">
                            <i class="icon-social-soundcloud"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Pengujian</span>
                        <h2 class="dashboard-total-products"><span class="counter">102</span></h2>
                        <span class="label label-success">Riwayat</span>Pengujian
                        <div class="side-box bg-success">
                            <i class="icon-bubbles"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Permohonan</span>
                        <h2 class="dashboard-total-products"><span class="counter">4</span></h2>
                        <span class="label label-danger">Permohonan</span>Kalibrasi
                        <div class="side-box bg-danger">
                            <i class="icon-bubbles"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Permohonan</span>
                        <h2 class="dashboard-total-products"><span class="counter">4</span></h2>
                        <span class="label label-info">perm   ohonan</span>pengujian
                        <div class="side-box bg-info">
                            <i class="icon-bubbles"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>
@endsection
