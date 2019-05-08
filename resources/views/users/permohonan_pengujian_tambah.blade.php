@extends('layouts.user')

@section('title', __('outlet.list'))

@section('content')
<div class="container-fluid" >


<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
    <br>
    <h3>Tambah Permohonan Pengujian</h3>

        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Input Sizes</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>

            <div class="card-block">
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Perusahaan </label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="terisi otomatis "></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Barang pengujian</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Rentang Ukur"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Biaya</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Biaya"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Tanggal Permohonan (ambil otomatis aja dari carbon)</label></div>
                    <div class="col-md-10"><input type="date" class="form-control" id="InputNormal" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"><textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
            <a href="{{route('permohonan_kalibrasi_index')}}" class="btn btn-inverse-danger">Batal</a>
                <a href="" class="btn btn-inverse-primary">Buat Permohonan</a>
            </div>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
