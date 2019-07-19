@extends('layouts.user')

@section('content')
<br>
<div class="container-fluid">

 <!-- Row end -->
 <div class="row">
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h5 class="card-header-text">Tambah Data Perusahaan</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="card-block">
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Perusahaan</label></div>
                        <div class="col-md-10"><input name="name" type="text" class="form-control" id="InputNormal"  placeholder="Nama Perusahaan"></div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Email</label></div>
                        <div class="col-md-10"><input name="email" type="email" class="form-control" id="InputNormal"  placeholder="Email"></div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Password</label></div>
                        <div class="col-md-10"><input name="password" type="password" class="form-control" id="InputNormal"  placeholder="Password"></div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Alamat</label></div>
                        <div class="col-md-10"><textarea name="alamat" id="" class="form-control"></textarea></div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">No Tlp</label></div>
                        <div class="col-md-10"><input name="telepon" type="text" class="form-control" id="InputNormal"  placeholder="No.Tlp"></div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Website</label></div>
                        <div class="col-md-10"><input type="text" name="website" class="form-control" id="InputNormal"  placeholder="Website"></div>
                    </div>
                    <div class="form-group row">
                            <label for="file" class="col-md-2 col-form-label form-control-label">Gambar/Logo</label>
                            <div class="col-md-9">
                                <label for="file" class="custom-file">
                                    <input type="file" name="foto" id="file" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>
                            {{ csrf_field() }}
                        </div>
                <div class="form-group row">
                <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Status Perusahan</label></div>
                <div class="col-md-10">
                    <select class="form-control" id="exampleSelect1" name="status">
                        <option value="0" >Banned/Belum Aktif</option>
                        <option value="1" >Aktif/Sudah Terverifikasi</option>
                    </select>
                </div>
                </div>
                {{-- <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Username</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Isi Jika ingin mengganti username"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Password</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Isi Jika ingin mengganti Password"></div>
                </div> --}}
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>
@endsection
