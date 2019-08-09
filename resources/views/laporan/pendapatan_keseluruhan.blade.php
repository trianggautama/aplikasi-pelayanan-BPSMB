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
            <h2 style="text-align:center;">DATA PENDAPATAN KALIBRASI KESELURUHAN</h2>
            <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Barang Kalibrasi</th>
                            <th>Tanggal Kalibrasi</th>
                            <th>Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 0 ?>
                            @foreach ($pendapatan_k as $d)
                        <tr>
                            <td>{{$no = $no + 1}}</td>
                            <td>{{ $d->kalibrasi->permohonan_kalibrasi->user->name }}</td>
                            <td>{{ $d->kalibrasi->permohonan_kalibrasi->retribusi->nama }}</td>
                            <td>{{ carbon\carbon::parse($d->kalibrasi->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ number_format($d->kalibrasi->permohonan_kalibrasi->retribusi->biaya) }}</td>
                            @php
                            $total =  0;
                            $total = $d->sum('pendapatan');
                            @endphp

                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="4">Total Pendapatan Kalibrasi </td>
                            <td>Rp.{{ number_format($total)}},-</td>
                        </tr>
                        </tbody>
                    </table>
                        <h2 style="text-align:center;">DATA PENDAPATAN PENGUJIAN KESELURUHAN</h2>
            <table class="table table-hover" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Barang Pengujian</th>
                            <th>tanggal Pengujian</th>
                            <th>Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 0 ?>
                            @foreach ($pendapatan_p as $d)
                        <tr>
                            <td>{{$no = $no + 1}}</td>
                            <td>{{ $d->pengujian->permohonan_pengujian->user->name }}</td>
                            <td>{{ $d->pengujian->permohonan_pengujian->retribusi->komoditi }}</td>\
                            <td>{{ carbon\carbon::parse($d->pengujian->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ number_format($d->pengujian->permohonan_pengujian->retribusi->biaya) }}</td>
                            @php
                            $total_p =  0;
                            $total_p = $d->sum('pendapatan');
                            @endphp


                        @endforeach
                    </tr>
                        <tr>
                                <td colspan="4">Total Pendapatan Pengujian </td>
                                <td>Rp.{{ number_format($total_p)}},-</td>
                            </tr>
                            <tr>
                                <td colspan="4">Total Pendapatan Keseluruhan </td>
                                <td>Rp.{{ number_format($total_p+$total)}},-</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <p>Total Pendapatan Pengujian Rp.{{ number_format($total_p)}},-</p>
                    <p>Total Pendapatan Keseluruhan Rp.{{ number_format($total_p+$total)}},-</p> --}}
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
