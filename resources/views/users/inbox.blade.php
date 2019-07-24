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
                                    <li class="breadcrumb-item"><a href="#!">Email</a></li>
                                    <li class="breadcrumb-item"><a href="#">Inbox</a></li>
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
                                                <a href="inbox.html" class="list-group-item active w-100">
                                                    <i class="icofont icofont-download-alt"></i> Inbox <b class="email-count">(7)</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-12">
                                            <div class="email-icon">
                                                <div class="btn-group waves-effect waves-light" role="group">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
                                                        <i class="icofont icofont-exclamation-circle"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
                                                        <i class="icofont icofont-inbox"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
                                                        <i class="icofont icofont-ui-delete"></i>
                                                    </button>
                                                </div>
                                                <div class="dropdown-primary dropdown">
                                                    <button class="btn btn-primary dropdown-shadow dropdown-toggle waves-effect waves-light text-capitalize" type="button" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <i class="icofont icofont-ui-folder"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                        <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                        <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                        <a class="dropdown-item waves-light waves-effect" href="#">Something else here</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown-primary dropdown">
                                                    <button class="btn btn-primary dropdown-shadow dropdown-toggle waves-effect waves-light text-capitalize" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">More
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                        <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                        <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                        <a class="dropdown-item waves-light waves-effect" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-responsive" style="margin-top:10px !important;">
                                                <table class="table table-hover email-table">
                                                    <tbody class="email-body">
                                                    @foreach ($inbox as $d)
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="checkbox-fade fade-in-primary checkbox">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                </label>
                                                            </div>
                                                            <i class="icofont icofont-star txt-muted"></i>
                                                            <i class="icofont icofont-disc txt-warning"></i>
                                                        </td>
                                                        {{-- <a href="{{ route('admin_perusahaan_detail', ['id' => IDCrypt::Encrypt( $p->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-eye-alt"></i></a> --}}
                                                        <td><a href="{{Route('show_message', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="email-name">{{ $d->subjek }}</a></td>
                                                        <td><a href="{{Route('show_message', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="email-name">{{ $d->keterangan }}</a></td>
                                                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                        <td class="email-time">08:01 AM</td>

                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
