@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- Row end -->
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><h5 class="card-header-text">Cetak Data Berdasarkan Status</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="card-block">
                <div class="form-group row">
                        <div class="col-md-2"><label for="InputNormal" class="form-control-label">Filter Status</label></div>
                        <div class="col-md-10">
                            <select class="form-control" name="status">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif/Banned</option>
                            </select>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="text-right">
                                <a href="{{Route('admin_perusahaan_index')}}" class="btn btn-danger">Batal</a>
                                <input class="btn btn-primary" type="submit" name="submit" value="Cetak Data" target="_blank">
                                {{csrf_field() }}
                            </div>
                        </div>

                    </form>
                    <!-- end form login -->

                </div>
            </div>

        </div>
    </div>

@endsection
