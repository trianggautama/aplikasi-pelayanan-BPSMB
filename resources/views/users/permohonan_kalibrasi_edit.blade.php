@extends('layouts.user')

@section('title', __('outlet.list'))

@section('content')
<div class="container-fluid" >


<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
    <br>
    <h3>Edit Permohonan Kalibrasi</h3>

        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Input Sizes</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{method_field('PUT') }}
                {{ csrf_field() }}

            <div class="card-block">
                <div class="form-group row">
                <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Perusahaan </label></div>
                <div class="col-md-10">
                    <select class="form-control" id="exampleSelect1" name="perusahaan_id">
                        <option value="{{$perusahaan->id}}" >{{$perusahaan->user->name}}</option>
                    </select>
                </div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Kalibrasi </label></div>
                        <div class="col-md-10">
                            <select class="form-control" id="exampleSelect1" name="retribusi_kalibrasi_id">
                                <option value="{{$retribusi->id}}" >{{$retribusi->nama}}</option>
                            </select>
                        </div>
                        </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Tanggal Permohonan</label></div>
                    <div class="col-md-10"><input name="tanggal" type="date" value="{{ $kalibrasi->tanggal }}" class="form-control" id="InputNormal" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Merk</label></div>
                    <div class="col-md-10"><input type="text" name="merk" class="form-control" id="InputNormal"  placeholder="Merk" value=" {{ $kalibrasi->merk }}"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">No Seri</label></div>
                    <div class="col-md-10"><input type="text" name="no_seri" class="form-control" id="InputNormal"  placeholder="No Seri" value="{{ $kalibrasi->no_seri }}"></div>
                </div>
                {{ csrf_field() }}
            </div>
            <div class="card-footer text-right">
            <a href="{{route('permohonan_kalibrasi_user_index')}}" class="btn btn-inverse-danger">Batal</a>
            <button type="submit" name="submit" class="btn btn-primary">Ubah Permohonan</button>
            </div>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
