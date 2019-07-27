@extends('layouts.user')
@section('content')
<div class="container-fluid">
            <!-- Main content starts -->
            <div >
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Inbox</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Apps</a>
                                </li>
                                <li class="breadcrumb-item"><a href="read-mail.html">Read Mail</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Header end -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-12">
                                        <div class="list-group compose-list-group">
                                            <a href="inbox.html" class="list-group-item active">
                                                <i class="icofont icofont-download-alt"></i> Inbox <b class="m-l-5">{{$inbox_count->count()}}</b>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-12">

                                        <br>
                                        <div>
                                            <div class="card email-card">
                                                <div class="card-header">
                                                    {{-- @if($inbox->permohonan_pengujian->status) --}}
                                                    <h5 class="card-header-text text-capitalize d-inline-block">Hallo</h5>
                                                    <h6 class="f-right">{{ $date->format('g:i A') }}</h6>
                                                </div>
                                                <div class="card-block">
                                                    <div class="media m-b-20">
                                                        <div class="mr-3 photo-table">
                                                            <a href="#">
                                                                <img class="media-object rounded-circle" src="{{asset('assets/images/avatar-3.png')}}" alt="E-mail User">
                                                            </a>
                                                        </div>
                                                        <div class="media-body photo-contant">

                                                                <a href="#"><h6 class="user-name txt-primary">Admin</h6></a>
                                                                <a class="user-mail txt-muted" href="#"><h6>From:admin@gmail.com</h6></a>

                                                            <div>
                                                                <p class="email-welcome-txt">Silahkan antar barang ke kantor BPSMB pada : {{ $inbox->tanggal }}</p>
                                                                <br>
                                                                <p class="email-welcome-txt"> Pesan : {{ $inbox->subjek }}</p>
                                                                <p class="email-content">
                                                                    {{ $inbox->keterangan }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid ends -->

@endsection
