@extends('layouts.admin')

@section('title', __('outlet.list'))

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
                        <a class="btn btn-inverse-primary" href=""  data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-arrow-add"></i>Tambah Data</a>
                        <a class="btn btn-inverse-success" href=""><i class="icon-arrow-add"></i>cetak data</a>
                    </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Komoditi </th>
                            <th>Biaya</th>
                            <th>Keterangan</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>kada tahu jua ini apa</td>
                            <td>Rp.5.000.000</td>
                            <td> isi keterangan singkat</td>
                            <td class="text-center">
                            <a href="{{route('retribusi_pengujian_edit')}}" class="btn btn-inverse-primary"> edit</a>
                                <a href="" class="btn btn-inverse-danger"> hapus</a>
                            </td>
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

                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" />
                            <label>Komoditi</label>
                        </div>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" />
                            <label>Biaya</label>
                        </div>
                            <div class="md-input-wrapper">
                                    <textarea class="md-form-control md-static" cols="2" rows="4"></textarea>
                                    <label>Keterangan </label>
                                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-inverse-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-inverse-primary">Save </button>
            </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
@endsection
