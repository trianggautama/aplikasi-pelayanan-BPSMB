@extends('layouts.admin')
@section('content')
<div class="container-fluid" >
<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Upload Sertifikat hasil pengujian</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{method_field('PUT') }}
                {{ csrf_field() }}
            <div class="card-block">
                <div class="form-group row">
                    <label for="file" class="col-md-2 col-form-label form-control-label">Upload sertifikat</label>
                    <div class="col-md-9">
                        <label for="file" class="custom-file">
                            <input type="file" name="sertifikat" id="file" class="custom-file-input">
                            <span class="custom-file-control"></span>
                        </label>
                    </div>
                    {{ csrf_field() }}
                </div>
                {{-- {{ csrf_field() }} --}}
            </div>
            <div class="card-footer text-right">
                <a href="{{route('retribusi_kalibrasi_index')}}" class="btn btn-danger">Batal</a>
                <button type="submit" name="submit" class="btn btn-primary">Upload</button>
            </div>
            {{-- </form> --}}
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
