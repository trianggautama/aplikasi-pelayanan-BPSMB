@extends('layouts.admin')
@section('content')
<div class="container-fluid" >
<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Edit Data Pengujian</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{method_field('PUT') }}
                {{ csrf_field() }}
            <div class="card-block">
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Tanggal Verifikasi</label></div>
                <div class="col-md-10"><input type="date" name="nama" class="form-control" id="InputNormal"  placeholder="Nama Barang" value=""></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Tanggal Pengujian</label></div>
                    <div class="col-md-10"><input type="date" name="rentang_ukur" class="form-control" id="InputNormal"  placeholder="Rentang Ukur" value=""></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Metode pembayaran</label></div>
                    <div class="col-md-10"><select class="form-control" id="exampleSelect1">
                        <option>Cash</option>
                        <option>Transfer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Status Proses</label></div>
                    <div class="col-md-10"><select class="form-control" id="exampleSelect1">
                        <option>Tahap Pengujian</option>
                        <option>Lulus Uji</option>
                        <option>Gagal Uji</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">lain-lain</label></div>
                    <div class="col-md-10"><input type="text" name="lain-lain" class="form-control" id="InputNormal"  placeholder="kada tahu jua ini apa" value=""></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"> <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"></textarea></div>
                </div>
                {{-- {{ csrf_field() }} --}}
            </div>
            <div class="card-footer text-right">
                <a href="{{route('retribusi_kalibrasi_index')}}" class="btn btn-danger">Batal</a>
                <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
            </div>
            {{-- </form> --}}
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
