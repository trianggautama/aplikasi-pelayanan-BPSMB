@extends('layouts.user')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="main-header">

        </div>
    </div>

    <div class="card">
        <div class="card-header ">
                <h4>Data Permohonan Kalibrasi</h4>
                <div class="text-right">
                @if($status == 1)
                        <a class="btn btn-inverse-primary" href="{{route('permohonan_kalibrasi_user_tambah')}}"><i class="icon-arrow-add"></i>+ Buat Permohonan</a>
                @else
                <a class="btn btn-disable btn-danger" href="{{ route('perusahaan_tambah')}}"><i class="icon-arrow-add"></i>Data Anda Belum terverifikasi / belum lengkap</a>
                @endif
                    </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Barang Kalibrasi</th>
                            <th>Biaya</th>
                            <th>Tanggal</th>
                            <th>Merk</th>
                            <th>No Seri</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                         <?php $no = 0 ?>
                            @foreach ($kalibrasi as $d)
                            <td>{{$no = $no + 1}}</td>
                            <td>{{$d->perusahaan->user->name}}</td>
                            <td>{{$d->retribusi->nama}}</td>
                            <td>{{$d->retribusi->biaya}}</td>
                            <td>{{$d->tanggal->format('d F Y')}}</td>
                            <td>{{$d->merk}}</td>
                            <td>{{$d->no_seri}}</td>
                            <td>
                            @if($d->status == 0)
                            <label class="label bg-danger">Ditolak</label>
                                @elseif($d->status == 1)
                            <label class="label bg-warning">Pending</label>
                                @elseif($d->status == 2)
                            <label class="label bg-info">Diterima</label>
                                @endif
                            </td>
                            <td class="text-center">
                            <a href="{{ route('permohonan_kalibrasi_user_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icofont icofont-edit-alt"></i></a>
                            {{-- <a href="{{ route('permohonan_kalibrasi_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-inverse-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="icofont icofont-edit-alt"></i></a> --}}
                            {{-- <a href=" {{route('permohonan_kalibrasi_edit', ['id' => IDCrypt::Encrypt( $d->id)])}}" class="btn btn-primary"> <i class=" far fa-edit"></i></a> --}}
                        </td>

                        </tr>
                        @endforeach
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
                            <label>Nama</label>
                        </div>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control md-static" />
                            <label>Rentang Ukur</label>
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
              <button type="button" class="btn btn-inverse-primary">Save changes</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
@endsection
