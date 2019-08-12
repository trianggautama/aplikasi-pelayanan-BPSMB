@extends('layouts.admin')
@section('content')
<div class="container-fluid" >
<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Input Sizes</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <div class="card-block">
                <form  method="post" action="" enctype="multipart/form-data">
                {{method_field('PUT') }}
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Laboratorium</label></div>
                <div class="col-md-10"><input type="text" name="nama_laboratorium" class="form-control" id="InputNormal" value="{{ $laboratorium->nama_laboratorium }}" placeholder="Nama Laboratorium"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Penanggung Jawab</label></div>
                    <div class="col-md-10"><input type="text" name="nama_pj" class="form-control" id="InputNormal" value="{{ $laboratorium->nama_pj }}" placeholder="Nama Penanggung Jawab"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"> <textarea name="keterangan" class="form-control" id="" cols="30" rows="10">{{ $laboratorium->keterangan }}</textarea></div>
                </div>
            </div>
            <div class="card-footer text-right">
            <a href="{{route('laboratorium_index')}}" class="btn btn-inverse-danger">Batal</a>
                <button type="submit" class="btn btn-inverse-primary">Ubah Data</a>
            </div>
        </form>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
