@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
        </div>
    </div>
    <div class="card">
        <div class="card-header ">
                <h4>Data Retribusi Pengujian</h4>
                <div class="text-right">
                        <a class="btn btn-inverse-primary" href=""  data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-arrow-add"></i> + Tambah Data</a>
                        <a class="btn btn-inverse-success" href="{{ route('laporan_retribusi_pengujian') }}" target="_blank"><i class="icofont icofont-printer"></i> cetak data</a>
                    </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                @include('layouts.alert')
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Komoditi </th>
                            <th>Biaya</th>
                            <th>Keterangan</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php $no = 0 ?>
                                @foreach ($Pengujian as $d)
                                <td>{{$no = $no + 1}}</td>
                                <td>{{$d->komoditi}}</td>
                                <td>{{ number_format($d->biaya)}}</td>
                                <td>{{$d->keterangan}}</td>
                                <td class="text-center">
                                        <a href="{{ route('retribusi_pengujian_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icofont icofont-edit-alt"></i></a>
                                        <a href="{{ route('retribusi_pengujian_hapus', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="hapus"><i class="icofont icofont-ui-delete"></i></a>
                                    </td>
                              </tr>
                              @endforeach
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form  method="post" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="md-input-wrapper">
                            <input type="text" name="komoditi" class="md-form-control md-static"/>
                            <label>Komoditi</label>
                        </div>
                        <div class="md-input-wrapper">
                            <input type="text" data-type="currency" name="biaya" class="md-form-control md-static" id="currency-field" pattern="^\Rp.\d{1,3}(,\d{3})*(\.\d+)?$" />
                            <label>Biaya</label>
                        </div>
                            <div class="md-input-wrapper">
                                    <textarea name="keterangan" class="md-form-control md-static" cols="2" rows="4"></textarea>
                                    <label>Keterangan </label>
                                </div>
                                {{csrf_field() }}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-inverse-danger" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-inverse-primary">Simpan</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
@endsection
