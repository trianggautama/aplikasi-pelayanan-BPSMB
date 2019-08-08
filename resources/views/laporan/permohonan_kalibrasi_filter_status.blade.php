<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-family:sans-serif;
        }
        table{
        border-collapse: collapse;
        width:100%;
      }
      table, th, td{
        border: 1px solid black;
      }
      th{
        background-color: #708090;
        text-align: center;
        color: white;
      }
      td{
        text-align: left;
        margin-left: 10px !important;
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         margin-bottom: 0px;
         text-align: center;
         height: 150px;
         padding: 0px;
     }
     .pemko{
         width:150px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 15%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         float:right;
         margin-left: 0px;
         width: 75%;
         padding-left:0px;
         padding-right:10%;
     }
     hr{
         margin-top: 10%;
         height: 4px;
         background-color: black;
         width:100%;
     }
     .ttd{
         margin-left:70%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-right{
         text-align:right;
     }
     .isi{
         padding:10px;
     }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="images/logo_pemprov.png">
            </div>
            <div class="headtext">
                <h4 style="margin:0px;">PEMERINTAH PROVINSI KALIMANTAN </h4>
                <h3 style="margin:0px;">DINAS PERDAGANGAN </h3>
                <h3 style="margin:0px;">UNIT PELAKSANA TEKNIS</h3>
                <h3 style="margin:0px;">BALAI PENGUJIAN DAN SERTIFIKASI MUTU BARANG</h3>
                <p style="margin:0px;">JaLan Panglima Batur Banjarbaru, Kode Pos 70711</p>
                <p style="margin:0px;">Telp.(0511)4772237 Fax.(0511)4772237</p>
            </div>
            <br>
    </div>
    <hr style="margin-top:1px;">
    <div class="container">
        <div class="isi">
            @if($status==1)
            <h2 style="text-align:center;">DATA PERMOHONAN KALIBRASI STATUS PENDING</h2>
            @else
            <h2 style="text-align:center;">DATA PERMOHONAN KALIBRASI STATUS DITERIMA</h2>
            @endif
            <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Barang</th>
                                <th>Tanggal Permohonan</th>
                                <th>Merk</th>
                                <th>No Seri</th>
                                <th>Status</th>
                                <th>Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $no = 0 ?>
                                @foreach ($kalibrasi as $d)
                            <tr>
                                <td>{{ $no=$no + 1 }}</td>
                                <td>{{$d->perusahaan->user->name}}</td>
                                <td>{{$d->retribusi->nama}}</td>
                                <td>{{$d->created_at->format('d-m-Y')}}</td>
                                <td>{{$d->merk}}</td>
                                <td>{{$d->no_seri}}</td>
                                <td>
                                @if($d->status == 3)
                                <label class="label bg-danger">Ditolak</label>
                                @elseif($d->status == 1)
                                <label class="label bg-warning">Pending</label>
                                @elseif($d->status == 2)
                                <label class="label bg-info">Verifikasi</label>
                                @endif
                                </td>
                                <td>{{ number_format($d->retribusi->biaya) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                      <br>
                      <br>
                      <div class="ttd">
                        <h5> <p>Banjarbaru, {{ $tgl }}</p></h5>
                       <h6>Mengetahui</h6>
                      <h5>Kepala Balai Pengujian dan Sertifikasi Mutu Barang</h5>
                      <br>
                      <br>
                      <h5 style="text-decoration:underline;">Drs.Anang Aliansyah</h5>
                      <h5>NIP. 19580726 1984 03 1 007</h5>
                      </div>
                    </div>
             </div>
         </body>
</html>
