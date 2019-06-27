@extends('layouts.user')

@section('content')
<br>
<div class="container-fluid">

 <!-- Row end -->
 <div class="row">
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h5 class="card-header-text">Input Sizes</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>

            <div class="card-block">
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
                        <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="No.Tlp"></div>
                    </div>
                    <div class="form-group row">
                            <label for="file" class="col-md-2 col-form-label form-control-label">Gambar/Logo</label>
                            <div class="col-md-9">
                                <label for="file" class="custom-file">
                                    <input type="file" id="file" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>
                        </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Username</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Isi Jika ingin mengganti username"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Password</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Isi Jika ingin mengganti Password"></div>
                </div>
                <div class="card-footer text-right">
                    <a href="" class="btn btn-inverse-primary">Ubah Data</a>
                </div>
            </div>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>
@endsection
