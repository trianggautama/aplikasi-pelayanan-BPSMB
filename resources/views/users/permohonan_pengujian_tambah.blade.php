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
            <form  method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="card-block">
                <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Perusahaan</label></div>
                    <div class="col-md-10"><label for="exampleSelect1" class="form-control-label">{{$perusahaan->user->name}}</label>
                        {{-- <option value="Verifikasi permohonan pengujian">Verifikasi Permohonan</option> --}}
                        {{-- <option value="Hasil pengujian">Hasil Pengujian</option> --}}
                        {{-- </select> --}}
                    </div>
            </div>
                {{-- <div class="form-group row">
                <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Perusahaan </label></div>
                <div class="col-md-10">
                    <select class="form-control" id="exampleSelect1" name="perusahaan_id">
                        <option value="{{$perusahaan->id}}" >{{$perusahaan->user->name}}</option>
                    </select>
                </div>
                </div> --}}
                <div class="form-group row">
                <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Barang Yang Diuji </label></div>
                <div class="col-md-10">
                    <select class="form-control" id="exampleSelect1" name="retribusi_pengujian_id">
                        @foreach ($pengujian as $k)
                        <option value="{{$k->id}}" >{{$k->komoditi}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"><textarea name="keterangan" class="form-control" id="exampleTextarea" rows="4"></textarea>
                    </div>
                </div>
                {{ csrf_field() }}
            </div>
            <div class="card-footer text-right">
            <a href="{{route('permohonan_pengujian_index')}}" class="btn btn-inverse-danger">Batal</a>
            <button type="submit" class="btn btn-inverse-primary">Buat Permohonan</a>
            </div>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
