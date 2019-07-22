@extends('layouts.admin')
@section('content')
<div class="container-fluid" >
<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card" style="margin-top:20px;">
            <div class="card-header">
                <div class="f2htDiproses href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                    <div class="f2htDiproses href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofon3-cSelesai-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{method_field('PUT') }}
                {{ csrf_field() }}
            <div class="card-block">
            <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Subjek</label></div>
                    <div class="col-md-10"><select class="form-control" id="exampleSelect1" name="subjek">
                        <option value="Verifikasi permohonan kalibrasi">Verifikasi Permohonan</option>
                        <option value="Hasil kalibrasi">Hasil Kalibrasi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Status</label></div>
                    <div class="col-md-10"><select class="form-control" id="exampleSelect1" name="status">
                        <option>Pilih Status</option>
                        <option value="0">Ditolak</option>
                        <option value="2">Diterima</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-md-2"><label for="InputNormal" class="form-control-label">Tanggal Antar Barang</label></div>
                <div class="col-md-10"><input type="date" name="tanggal" class="form-control" id="InputNormal"> </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"> <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"></textarea></div>
                </div>
                {{-- {{ csrf_field() }} --}}
        </div>
            <div class="card-footer text-right">
            waktu mengirim sekalian merubah status permohonan
                <a href="{{route('permohonan_kalibrasi_index')}}" class="btn btn-danger">Batal</a>
                <button type="submit" name="submit" class="btn btn-primary">Kirim Pesan</button>
            </div>
            {{-- </form> --}}
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection