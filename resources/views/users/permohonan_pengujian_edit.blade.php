@extends('layouts.user')

@section('title', __('outlet.list'))

@section('content')
<div class="container-fluid" >


<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
    <br>
    <h3>Edit Permohonan Pengujian</h3>

        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Input Sizes</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{method_field('PUT') }}
                {{ csrf_field() }}
            <div class="card-block">
                 <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Perusahaan</label></div>
                    <div class="col-md-10"><label for="exampleSelect1" class="form-control-label">{{$pengujian->perusahaan->user->name}}</label>
                        {{-- <option value="Verifikasi permohonan pengujian">Verifikasi Permohonan</option> --}}
                        {{-- <option value="Hasil pengujian">Hasil Pengujian</option> --}}
                        {{-- </select> --}}
                    </div>
            </div>
                {{-- <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama Perusahaan </label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Nama Perusahaan" value="{{$pengujian->user->name}}"></div>
                </div> --}}
                <div class="form-group row">
                <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Nama Barang Yang Diuji </label></div>
                <div class="col-md-10">
                @php
                $id_retribusi = $pengujian->retribusi->id;
                @endphp
                <select class="form-control" id="exampleSelectGender" name="retribusi_pengujian_id">
                    @foreach ($retribusi as $k)
                    <option value="{{$k->id}}"
                        {{$id_retribusi == $k->id ? 'selected' : ''}}>Komoditi {{$k->komoditi}}</option>
                    @endforeach
                </select>
                </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"><textarea class="form-control" id="exampleTextarea" name="keterangan" rows="4">{{$pengujian->keterangan}}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
            <a href="{{route('permohonan_kalibrasi_user_index')}}" class="btn btn-inverse-danger">Batal</a>
            <input type="submit" class="btn btn-inverse-primary" value="ubah">
            </div>
        </div>
    </div>
    </form>
    <!--input sizes ends-->

</div>
</div>

@endsection
