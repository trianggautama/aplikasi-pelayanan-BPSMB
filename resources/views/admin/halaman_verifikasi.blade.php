@extends('layouts.admin')
@section('content')
<div class="container-fluid" >
<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card" style="margin-top:20px;">
            <div class="card-header">
                    <h4>Verifikasi Permohonan Pengujian</h4>
                    <div class="f2htDiproses href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofon3-cSelesai-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{method_field('PUT') }}
                {{ csrf_field() }}
            <div class="card-block">
                    {{-- {{$permohonan_pengujian->retribusi->komoditi}} --}}
            <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Perusahaan</label></div>
                    <div class="col-md-10"><label for="exampleSelect1" class="form-control-label">{{ $permohonan_pengujian->user->name }}</label>
                        {{-- <option value="Verifikasi permohonan pengujian">Verifikasi Permohonan</option> --}}
                        {{-- <option value="Hasil pengujian">Hasil Pengujian</option> --}}
                        {{-- </select> --}}
                    </div>
            </div>
            <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Alamat Perusahaan</label></div>
                    <div class="col-md-10"><label for="exampleSelect1" class="form-control-label">{{ $permohonan_pengujian->perusahaan->alamat }}</label>
                        {{-- <select class="form-control" id="exampleSelect1" name="subjek"> --}}
                        {{-- <option value="Verifikasi permohonan pengujian">Verifikasi Permohonan</option> --}}
                        {{-- <option value="Hasil pengujian">Hasil pengujian</option> --}}
                        {{-- </select> --}}
                    </div>
                </div>
            <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nomor Telepon</label></div>
                    <div class="col-md-10"><label for="exampleSelect1" class="form-control-label">{{ $permohonan_pengujian->perusahaan->telepon }}</label>
                        {{-- <select class="form-control" id="exampleSelect1" name="subjek"> --}}
                        {{-- <option value="Verifikasi permohonan pengujian">Verifikasi Permohonan</option> --}}
                        {{-- <option value="Hasil pengujian">Hasil pengujian</option> --}}
                        {{-- </select> --}}
                    </div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Barang Uji</label></div>
                        <div class="col-md-10"><label for="exampleSelect1" class="form-control-label">{{$permohonan_pengujian->retribusi->komoditi   }}</label>
                            {{-- <select class="form-control" id="exampleSelect1" name="subjek"> --}}
                            {{-- <option value="Verifikasi permohonan kalibrasi">Verifikasi Permohonan</option> --}}
                            {{-- <option value="Hasil kalibrasi">Hasil Kalibrasi</option> --}}
                            {{-- </select> --}}
                        </div>
                    </div>
            <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Subjek</label></div>
                    <div class="col-md-10"><label for="exampleSelect1" class="form-control-label">Verifikasi Permohonan</label>
                        {{-- <option value="Verifikasi permohonan pengujian">Verifikasi Permohonan</option> --}}
                        {{-- <option value="Hasil pengujian">Hasil Pengujian</option> --}}
                        {{-- </select> --}}
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Status</label></div>
                    <div class="col-md-10"><select class="form-control" id="exampleSelect1" name="status">
                        <option value="2">Diterima</option>
                        <option value="3">Ditolak</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-md-2"><label for="InputNormal" class="form-control-label">Tanggal Antar Barang</label></div>
                <div class="col-md-10"><input type="date" name="tanggal" class="form-control" id="InputNormal" value="{{ carbon\carbon::now()->addDay(3)->toDateString() }}"> </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"> <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"></textarea></div>
                </div>
                {{-- {{ csrf_field() }} --}}
        </div>
            <div class="card-footer text-right">
                <a href="{{route('retribusi_kalibrasi_index')}}" class="btn btn-danger">Batal</a>
                <button type="submit" name="submit" class="btn btn-primary">Kirim Pesan</button>
            </div>
            {{-- </form> --}}
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
