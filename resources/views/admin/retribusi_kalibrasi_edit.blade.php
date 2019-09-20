@extends('layouts.admin')
@section('content')
<div class="container-fluid" >
<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Edit Data</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{method_field('PUT') }}
                {{ csrf_field() }}
            <div class="card-block">
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama</label></div>
                <div class="col-md-10"><input type="text" name="nama" class="form-control" id="InputNormal"  placeholder="Nama Barang" value="{{ $Kalibrasi->nama }}"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Rentang Ukur</label></div>
                    <div class="col-md-10"><input type="text" name="rentang_ukur" class="form-control" id="InputNormal"  placeholder="Rentang Ukur" value="{{ $Kalibrasi->rentang_ukur }}"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Biaya</label></div>
                    <div class="col-md-10"><input type="text" data-type="currency" name="biaya" class="form-control" id="currency-field" pattern="^\Rp.\d{1,3}(,\d{3})*(\.\d+)?$" value="{{ $Kalibrasi->biaya }}"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"> <textarea name="keterangan" class="form-control" id="" cols="30" rows="10">{{ $Kalibrasi->keterangan }}</textarea></div>
                </div>
                {{-- {{ csrf_field() }} --}}
            </div>
            <div class="card-footer text-right">
                <a href="{{route('retribusi_kalibrasi_index')}}" class="btn btn-inverse-danger">Batal</a>
                {{-- <button type="submit" class="btn btn-inverse-primary">Ubah Data</button> --}}
                <button type="submit" name="submit" class="btn btn-inverse-primary">Ubah</button>
            </div>
            {{-- </form> --}}
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
