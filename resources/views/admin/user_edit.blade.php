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
                <div class="col-md-10"><input type="text" name="name" class="form-control" id="InputNormal"  placeholder="Nama Barang" value="{{ $user->name }}"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Email</label></div>
                    <div class="col-md-10"><input type="email" name="email" class="form-control" id="InputNormal"  placeholder="Rentang Ukur" value="{{ $user->email }}"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Password</label></div>
                    <div class="col-md-10"><input type="password" name="password" class="form-control" id="InputNormal"  placeholder="Isi Jika Ingin Mengganti Password" ></div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Foto</label></div>
                        <div class="col-md-10">
                            <label for="file" class="custom-file">
                                <input type="file" name="foto" id="file" class="custom-file-input">
                                <span class="custom-file-control"></span>
                            </label>
                            <p>Isi Jika Ingin Mengubah Gambar</p>
                        </div>

                    </div>

                        {{csrf_field() }}
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
