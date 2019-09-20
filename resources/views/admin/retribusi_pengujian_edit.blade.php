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
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Komoditi</label></div>
                <div class="col-md-10"><input type="text" name="komoditi" class="form-control" id="InputNormal" value="{{ $Pengujian->komoditi }}" placeholder="Komoditi"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Biaya</label></div>
                    <div class="col-md-10"><input type="text" data-type="currency" name="biaya" class="form-control" id="currency-field" pattern="^\Rp.\d{1,3}(,\d{3})*(\.\d+)?$" value="{{ $Pengujian->biaya }}"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"> <textarea name="keterangan" class="form-control" id="" cols="30" rows="10">{{ $Pengujian->keterangan }}</textarea></div>
                </div>
            </div>
            <div class="card-footer text-right">
            <a href="{{route('retribusi_pengujian_index')}}" class="btn btn-inverse-danger">Batal</a>
                <button type="submit" class="btn btn-inverse-primary">Ubah Data</a>
            </div>
        </form>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
