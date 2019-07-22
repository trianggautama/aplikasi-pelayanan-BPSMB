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
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kode Contoh</label></div>
                <div class="col-md-10"><input type="text" name="kode" class="form-control" id="InputNormal"  placeholder="kode Contoh" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">No BPSMB</label></div>
                    <div class="col-md-10"><input type="text" name="no_bpsmb" class="form-control" id="InputNormal"  placeholder="No BPSMB" ></div>
                </div>
                <br>
              <P><b>Kandungan</b></P>
              <hr>
              <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kadar Air</label></div>
                    <div class="col-md-10"><input type="number" name="kadar_air" class="form-control" id="InputNormal"  placeholder="Kadar Air" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kadar Abu</label></div>
                    <div class="col-md-10"><input type="number" name="kadar_abu" class="form-control" id="InputNormal"  placeholder="Kadar Abu" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kadar Protein</label></div>
                    <div class="col-md-10"><input type="number" name="kadar_protein" class="form-control" id="InputNormal"  placeholder="kadar Protein" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kadar Lemak</label></div>
                    <div class="col-md-10"><input type="number" name="kadar_lemak" class="form-control" id="InputNormal"  placeholder="Kadar Lemak" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Kadar Serat</label></div>
                    <div class="col-md-10"><input type="number" name="kadar_serat" class="form-control" id="InputNormal"  placeholder="kadar Serat" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Energi Metabolisme</label></div>
                    <div class="col-md-10"><input type="number" name="energi_metabolisme" class="form-control" id="InputNormal"  placeholder="Energi Metabolisme" ></div>
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
