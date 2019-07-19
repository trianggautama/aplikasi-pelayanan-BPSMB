@extends('layouts.admin')
@section('content')
<div class="container-fluid" >
<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Tambah Hasil Pengujian</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{method_field('PUT') }}
                {{ csrf_field() }}
            <div class="card-block">
              <P><b>Alat</b></P>
              <hr>
              <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="alat1" class="form-control" id="InputNormal"  placeholder="Pengambilan 1" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="alat2" class="form-control" id="InputNormal"  placeholder="Pengambilan 2" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="alat3" class="form-control" id="InputNormal"  placeholder="Pengambilan 3" ></div>
                </div>
                <P><b>Standard</b></P>
              <hr>
              <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="standard1" class="form-control" id="InputNormal"  placeholder="Pengambilan 1" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="standard2" class="form-control" id="InputNormal"  placeholder="Pengambilan 2" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="standard3" class="form-control" id="InputNormal"  placeholder="Pengambilan 3" ></div>
                </div>
                <P><b>K</b></P>
              <hr>
              <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="k1" class="form-control" id="InputNormal"  placeholder="Pengambilan 1" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="k2" class="form-control" id="InputNormal"  placeholder="Pengambilan 2" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="k3" class="form-control" id="InputNormal"  placeholder="Pengambilan 3" ></div>
                </div>
                <P><b>U95</b></P>
              <hr>
              <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="u1" class="form-control" id="InputNormal"  placeholder="Pengambilan 1" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="u2" class="form-control" id="InputNormal"  placeholder="Pengambilan 2" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10"><input type="number" name="u3" class="form-control" id="InputNormal"  placeholder="Pengambilan 3" ></div>
                </div>
                {{-- {{ csrf_field() }} --}}
            </div>
            <div class="card-footer text-right">
                <a href="{{route('retribusi_kalibrasi_index')}}" class="btn btn-danger">Batal</a>
                <button type="submit" name="submit" class="btn btn-primary">Simpan Hasil Uji</button>
            </div>
            {{-- </form> --}}
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
