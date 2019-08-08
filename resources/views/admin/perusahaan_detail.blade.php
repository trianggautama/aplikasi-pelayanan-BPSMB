@extends('layouts.admin')

@section('title', __('outlet.list'))

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Data Perusahaan</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Extras</a>
                        </li>
                        <li class="breadcrumb-item"><a href="profile.html">Profile</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- Header end -->
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="card faq-left">
                        <div class="social-profile">
                            <img class="img-fluid" src="{{asset('/images/admin/'.$Perusahaan->user->foto)}}" alt="">
                            <div class="profile-hvr m-t-15">
                                <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <h4 class="f-18 f-normal m-b-10 txt-primary text-center">{{ $Perusahaan->user->name }}</h4>
                        </div>
                    </div>
                    <!-- end of card-block -->
                </div>
                <!-- end of col-lg-3 -->

                <!-- start col-lg-9 -->
                <div class="col-xl-9 col-lg-8">
                    <!-- Nav tabs -->
                    <div class="tab-header">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Biodata Perusahaan</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#project" role="tab">Edit Data</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#questions" role="tab">Riwayat Kalibrasi </a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#members" role="tab">Riwayat Pengujian </a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- end of tab-header -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">
                            <div class="card">
                                <div class="card-header"><h5 class="card-header-text">BIODATA</h5>
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
                                                                    <td>{{ $Perusahaan->user->name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Nama Penanggung Jawab</th>
                                                                    <td> {{ $Perusahaan->nama_pj }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Alamat</th>
                                                                    <td> {{ $Perusahaan->alamat }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">No Tlp</th>
                                                                    <td>{{ $Perusahaan->telepon }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Status</th>
                                                                    @if($Perusahaan->user->status == 0)
                                                                    <td>    <label class="label bg-danger">Belum Terverifikasi / Banned</label></td>
                                                                    @else
                                                                    <td>    <label class="label bg-success">Sudah Terverifikasi</label></td>
                                                                    @endif
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Email</th>
                                                                    <td>{{ $Perusahaan->user->email }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Website</th>
                                                                    <td><a href="#!">{{ $Perusahaan->website }}</a></td>
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
                                    <!-- end of view-info -->
                                </div>
                                <!-- end of card-block -->
                            </div>
                            <!-- end of card-->
                        </div>
                        <!-- end of tab-pane -->
                        <!-- end of about us tab-pane -->

                        <!-- start tab-pane of project tab -->
                        <div class="tab-pane" id="project" role="tabpanel">
                            <div class="row">
                                <!--input sizes starts-->
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header"><h5 class="card-header-text">Edit Data</h5>
                                            <div class="f-right">
                                                <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                                            </div>
                                        </div>

                                        <form  method="post" action="">
                                            {{method_field('PUT') }}
                                            {{ csrf_field() }}
                                        <div class="card-block">
                                            <div class="form-group row">
                                                <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Perusahaan</label></div>
                                                <div class="col-md-10"><input type="text" name="name" class="form-control" id="InputNormal"  placeholder="Nama" value="{{ $Perusahaan->user->name }}"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2"><label for="InputNormal" class="form-control-label">Alamat</label></div>
                                                <div class="col-md-10"><input type="text" name="alamat" class="form-control" id="InputNormal"  placeholder="Alamat" value="{{ $Perusahaan->alamat }}"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2"><label for="InputNormal" class="form-control-label">No Tlp</label></div>
                                                <div class="col-md-10"><input type="text" name="telepon" class="form-control" id="InputNormal"  placeholder="No.Tlp" value="{{ $Perusahaan->telepon }}"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2"><label for="InputNormal" class="form-control-label">Website</label></div>
                                                <div class="col-md-10"><input type="text" name="website" class="form-control" id="InputNormal"  placeholder="Website" value="{{ $Perusahaan->website }}"></div>
                                            </div>
                                            <div class="form-group row">
                                                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Email</label></div>
                                                    <div class="col-md-10"><input type="email" name="email" class="form-control" id="InputNormal"  placeholder="Email" value="{{ $Perusahaan->user->email }}"></div>
                                                </div>
                                            <div class="form-group row">
                                                <div class="col-md-2"><label for="InputNormal" class="form-control-label">Password</label></div>
                                                <div class="col-md-10"><input type="password" name="password" class="form-control" id="InputNormal"  placeholder="Isi Jika ingin mengganti Password"></div>
                                            </div>
                                            {{ csrf_field() }}
                                        </div>
                                        <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-inverse-primary">Ubah</button>
                                            {{-- <a href="" class="btn btn-inverse-primary">Ubah Data</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <!--input sizes ends-->

                            </div>
                            <!-- end of card-main -->
                        </div>
                        <!-- end of project pane -->

                        <!-- start a question pane  -->

                        <div class="tab-pane" id="questions" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">RIWAYAT KALIBRASI</h5>
                                    <div class="f-right">
                                    <a href="{{Route('kalibrasi_perusahaan_cetak',['id'=>IDCrypt::Encrypt($Perusahaan->id)])}}" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Cetak Data"><i class="icofont icofont-print"></i></a>
                                    </div>
                                </div>
                                <!-- end of card-header  -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="project-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center txt-primary">TARIF KALIBRASI</th>
                                                        <th class="text-center txt-primary">TANGGAL KALIBRASI</th>
                                                        <th class="text-center txt-primary">ESTIMASI</th>
                                                        <th class="text-center txt-primary">STATUS</th>
                                                        <th class="text-center txt-primary">Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="text-center">
                                                    @foreach($Perusahaan->permohonan_kalibrasi as $p)
                                                    <tr>
                                                    <td>Rp.{{ $p->retribusi->biaya }}</td>
                                                    @if(isset($p->kalibrasi->tanggal))
                                                    <td>{{ $p->kalibrasi->tanggal }}</td>
                                                    <td>{{ $p->kalibrasi->estimasi }}</td>
                                                    <td>
                                                        @if($p->kalibrasi->status == 0)
                                                        <label class="label bg-danger">Ditolak</label>
                                                            @elseif($p->kalibrasi->status == 2)
                                                        <label class="label bg-warning">Pending</label>
                                                            @elseif($p->kalibrasi->status == 1)
                                                        <label class="label bg-info">Sedang Diuji</label>
                                                            @elseif($p->kalibrasi->status == 3)
                                                        <label class="label bg-success">Selesai Diuji</label>
                                                        @endif
                                                    </td>
                                                    @else
                                                    <td></td>
                                                    @endif
                                                    <td class="text-center">
                                                         {{-- <a href="{{Route('kalibrasi_detail')}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icon-info"></i></a> --}}
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <!-- end of table -->
                                            </div>
                                            <!-- end of table responsive -->
                                        </div>
                                        <!-- end of project table -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                        <!-- end of tab pane question -->

                        <!-- start memeber ship tab pane -->

                        <div class="tab-pane" id="members" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">RIWAYAT PENGUJIAN</h5>
                                    <div class="f-right">
                                    <a href="{{Route('pengujian_perusahaan_cetak',['id'=>IDCrypt::Encrypt($Perusahaan->id)])}}" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Cetak Data"><i class="icofont icofont-print"></i></a>
                                    </div>
                                </div>
                                <!-- end of card-header  -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="project-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                    <th class="text-center txt-primary">KOMODITI</th>
                                                        <th class="text-center txt-primary">TARIF</th>
                                                        <th class="text-center txt-primary">TANGGAL PENGUJIAN</th>
                                                        <th class="text-center txt-primary">STATUS</th>
                                                        <th class="text-center txt-primary">Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="text-center">
                                                    @foreach($permohonan_pengujian as $p)
                                                    {{-- @foreach($Perusahaan->permohonan_pengujian as $p) --}}
                                                    <tr>
                                                    <td>{{ $p->retribusi->komoditi }}</td>
                                                    <td>Rp. {{ $p->retribusi->biaya }}</td>
                                                    @if(isset($p->pengujian))
                                                    <td>{{ $p->pengujian->tanggal }}</td>
                                                    <td>
                                                        @if($p->pengujian->status == 0)
                                                        <label class="label bg-danger">Ditolak</label>
                                                            @elseif($p->pengujian->status == 2)
                                                        <label class="label bg-warning">Pending</label>
                                                            @elseif($p->pengujian->status == 1)
                                                        <label class="label bg-info">Sedang Diuji</label>
                                                            @elseif($p->pengujian->status == 3)
                                                        <label class="label bg-success">Selesai Diuji</label>
                                                        @endif
                                                    </td>
                                                    @else
                                                    <td></td>
                                                    @endif
                                                    <td class="text-center">
                                                         {{-- <a href="{{Route('kalibrasi_detail')}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icon-info"></i></a> --}}
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <!-- end of table -->
                                            </div>
                                            <!-- end of table responsive -->
                                        </div>
                                        <!-- end of project table -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of memebership tab pane -->

                    </div>
                    <!-- end of main tab content -->
                </div>
            </div>

        </div>
        <!-- Container-fluid ends -->

@endsection
