@extends('layouts.user')

@section('title', __('outlet.list'))

@section('content')
<div class="container-fluid" >


<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
    <br>
    <h3>Tambah Permohonan Kalibrasi</h3>

        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Input Sizes</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="card-block">
                {{-- <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Perusahaan </label></div>
                <div class="col-md-10"><input type="text" name="id_perusahaan" class="form-control" id="InputNormal"  placeholder="terisi otomatis " disabled value="{{ $Perusahaan->nama }}"></div>
                </div> --}}
                <div class="card-block">
                <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Perusahaan</label></div>
                    <div class="col-md-10"><label for="exampleSelect1" class="form-control-label">{{$perusahaan->user->name}}</label>
                        {{-- <option value="Verifikasi permohonan pengujian">Verifikasi Permohonan</option> --}}
                        {{-- <option value="Hasil pengujian">Hasil Pengujian</option> --}}
                        {{-- </select> --}}
                    </div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Alamat</label></div>
                        <div class="col-md-10"><label for="exampleSelect1" class="form-control-label">{{$perusahaan->alamat}}</label>
                            {{-- <option value="Verifikasi permohonan pengujian">Verifikasi Permohonan</option> --}}
                            {{-- <option value="Hasil pengujian">Hasil Pengujian</option> --}}
                            {{-- </select> --}}
                        </div>
                    </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">No Telepon</label></div>
                        <div class="col-md-10"><label for="exampleSelect1" class="form-control-label">{{$perusahaan->telepon}}</label>
                            {{-- <option value="Verifikasi permohonan pengujian">Verifikasi Permohonan</option> --}}
                            {{-- <option value="Hasil pengujian">Hasil Pengujian</option> --}}
                            {{-- </select> --}}
                        </div>
                    </div>
                {{-- <div class="form-group row">
                <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Perusahaan </label></div>
                <div class="col-md-10">
                    <select class="form-control" id="exampleSelect1" name="perusahaan_id">
                        <option value="{{$perusahaan->id}}" >{{$perusahaan->user->name}}</option>
                    </select>
                </div>
                </div> --}}
                <div class="form-group row">
                <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Barang </label></div>
                <div class="col-md-10">
                    <select class="form-control" id="exampleSelect1" name="retribusi_kalibrasi_id">
                        @foreach ($kalibrasi as $k)
                        <option value="{{$k->id}}" >{{$k->nama}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                {{-- <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Barang Kalibrasi</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal" value="{{ $Kalibrasi->biaya }}" placeholder="Rentang Ukur"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Biaya</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Biaya"></div>
                </div> --}}
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Tanggal Permohonan</label></div>
                    <div class="col-md-10"><input type="date" name="tanggal" class="form-control" id="InputNormal" value="{{ $Date->toDateString() }}" ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Merk</label></div>
                    <div class="col-md-10"><input type="text" name="merk" class="form-control" id="InputNormal"  placeholder="Merk"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">No Seri</label></div>
                    <div class="col-md-10"><input type="text" name="no_seri" class="form-control" id="InputNormal"  placeholder="No Seri"></div>
                </div>
                {{ csrf_field() }}
            </div>
            <div class="card-footer text-right">
            <a href="{{route('permohonan_kalibrasi_user_index')}}" class="btn btn-inverse-danger">Batal</a>
                <button type="submit" class="btn btn-inverse-primary">Buat Permohonan</a>
            </div>
            </form>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>

@endsection
