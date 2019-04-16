@extends('layouts.admin')

@section('title', __('outlet.list'))

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
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Komoditi</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Nama Barang"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Biaya</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Biaya"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"> <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea></div>
                </div>
            </div>
            <div class="card-footer text-right">
            <a href="{{route('retribusi_pengujian_index')}}" class="btn btn-inverse-danger">Batal</a>
                <a href="" class="btn btn-inverse-primary">Ubah Data</a>
            </div>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
