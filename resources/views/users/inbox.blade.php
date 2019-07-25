@extends('layouts.user')
@section('content')
            <div class="container-fluid">
                <!-- Main content starts -->
                <div >
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                            <div class="card-header">
                            <h4>Notifikasi</h4>
                            </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-12">
                                            <div class="list-group compose-list-group">
                                                <a href="inbox.html" class="list-group-item active w-100">
                                                    <i class="icofont icofont-inbox"></i> Pemberitahuan <b class="email-count">{{$inbox->count()}}</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-12">

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
