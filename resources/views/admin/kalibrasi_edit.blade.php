@extends('layouts.admin')
@section('content')
<div class="container-fluid" >
<div class="row" >
    <!--input sizes starts-->
    <div class="col-lg-12">
        <div class="card" style="margin-top:20px;">
            <div class="card-header"><h5 class="card-header-text">Edit Data kalibrasi</h5>
                <div class="f-right">
                    <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                </div>
            </div>
            <form  method="post" action="" enctype="multipart/form-data">
                {{method_field('PUT') }}
                {{ csrf_field() }}
            <div class="card-block">
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Tanggal Kalibrasi</label></div>
                    <div class="col-md-10"><input type="date" name="tanggal" class="form-control" id="InputNormal"  placeholder="Rentang Ukur"
                        @if(isset($kalibrasi->tanggal))
                        value="{{ $kalibrasi->tanggal }}"
                        @else
                        value="{{ carbon\carbon::now()->toDateString() }}"
                        @endif
                        ></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Metode pembayaran</label></div>
                    <div class="col-md-10"><select class="form-control" id="exampleSelect1" name="metode_pembayaran">
                            @if($kalibrasi->metode_pembayaran == 0)
                            <option value="1" {{  $kalibrasi->metode_pembayaran == 1 ? 'selected' : ''}}>
                                    Cash
                            </option>
                            <option value="2" {{  $kalibrasi->metode_pembayaran == 2 ? 'selected' : ''}}>
                                    Transfer
                            </option>
                            @elseif($kalibrasi->metode_pembayaran == 1)
                            <option value="1" {{  $kalibrasi->metode_pembayaran == 1 ? 'selected' : ''}}>
                                    Cash
                            </option>
                            @elseif($kalibrasi->metode_pembayaran == 2)
                            <option value="2" {{  $kalibrasi->metode_pembayaran == 2 ? 'selected' : ''}}>
                                    Transfer
                            </option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                        <div class="col-md-2"><label for="exampleSelect1" class="form-control-label">Status kalibrasi</label></div>
                        <div class="col-md-10">
                            <select class="form-control" id="exampleSelect1" name="status">
                                {{-- @foreach ($kalibrasi as $d) --}}
                                        @if($kalibrasi->status == 0 || $kalibrasi->status == 2)
                                        <option value="1" {{  $kalibrasi->status == 1 ? 'selected' : ''}}>
                                                Tahap Uji
                                        </option>
                                        <option value="2" {{  $kalibrasi->status == 2 ? 'selected' : ''}}>
                                                Pending
                                        </option>
                                        <option value="3" {{  $kalibrasi->status == 3 ? 'selected' : ''}}>
                                                Selesai diuji
                                        </option>
                                        @elseif($kalibrasi->status == 1)
                                        <option value="1" {{  $kalibrasi->status == 1 ? 'selected' : ''}}>
                                                Tahap Uji
                                        </option>
                                        <option value="3" {{  $kalibrasi->status == 3 ? 'selected' : ''}}>
                                                Selesai diuji
                                        </option>
                                        @elseif($kalibrasi->status == 3)
                                        <option value="3" {{  $kalibrasi->status == 3 ? 'selected' : ''}}>
                                                Selesai diuji
                                        </option>
                                        @endif

                                {{-- @endforeach --}}
                            </select>
                        </div>
                        </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Estimasi</label></div>
                    <div class="col-md-10"><input type="text" name="estimasi" class="form-control" id="InputNormal"  placeholder="Estimasi" value="{{ $kalibrasi->estimasi }}"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Lain-lain</label></div>
                    <div class="col-md-10"><input type="text" name="lainnya" class="form-control" id="InputNormal"  placeholder="Lainnya" value="{{ $kalibrasi->lainnya }}"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2"><label for="InputNormal" class="form-control-label">Keterangan</label></div>
                    <div class="col-md-10"> <textarea name="keterangan" class="form-control" id="" cols="30" rows="10">{{ $kalibrasi->keterangan }}</textarea></div>
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
