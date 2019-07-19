@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>
    <div class="card">
        <div class="card-header ">
                <h4>Data Tarif Retribusi Kalibrasi</h4>
                <div class="text-right">
                        <a class="btn btn-inverse-primary" href=""  data-toggle="modal" data-target="#exampleModalCenter"><i class="icofont icon-arrow-add"></i>+ Tambah Data</a>
                        {{-- <a class="btn btn-inverse-success" href="{{ route('laporan_user') }}"><i class="icofont icofont-printer"></i> cetak data</a> --}}
                    </div>
        </div>
        <div class="card-block">
        @include('layouts.alert')

            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php $no = 0 ?>
                                @foreach ($user as $d)
                                <td>{{$no = $no + 1}}</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->email}}</td>
                                <td class="text-center">
                                    @if(Auth::user()->id==$d->id)
                                        <a href="{{ route('admin_user_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icofont icofont-edit-alt"></i></a>
                                        {{-- <a href="{{ route('admin_user_hapus', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-danger" data-toggle="tooltip" data-placement="top" title="hapus"><i class="icofont icofont-ui-delete"></i></a> --}}
                                    @else
                                    @endif
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
            <form  method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="modal-body">

                        <div class="md-input-wrapper">
                            <input type="text" name="name" class="md-form-control md-static" />
                            <label>Nama Admin</label>
                        </div>
                        <div class="md-input-wrapper">
                            <input type="text" name="email" class="md-form-control md-static" />
                            <label>Email</label>
                        </div>
                        <div class="md-input-wrapper">
                                <input type="password" name="password" class="md-form-control md-static" />
                                <label>Password</label>
                        </div>
                        <div class="md-input-wrapper">
                                <label>Foto</label>
                                <div class="md-form-control md-static">
                                    <label for="file" class="custom-file">
                                        <input type="file" name="foto" id="file" class="custom-file-input">
                                        <span class="custom-file-control"></span>
                                    </label>
                                </div>
                            </div>

                                {{csrf_field() }}

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-inverse-danger" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-inverse-primary">Simpan Data</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->

@endsection
