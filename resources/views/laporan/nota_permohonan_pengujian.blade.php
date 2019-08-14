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
      }
      th{
        background-color: #708090;
        text-align: center;
        color: white;
      }
      td{
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
                <p style="margin:0px;">Jalan Panglima Batur Banjarbaru, Kode Pos 70711</p>
                <p style="margin:0px;">Telp.(0511)4772237 Fax.(0511)4772237</p>
            </div>
            <br>
            <br>
            <hr>
    </div>

    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;" style="margin:0px;">Tanda Terima Pengujian</h2>
            {{-- <p class="text-right" style="margin-right:20px; margin-top:0px;">Nomor:</p> --}}
            {{-- <div class="ttd"> --}}
            <p class="text-right" style="margin-right:2e0px; margin-top:0px;">Nomor:  &nbsp; &nbsp; &nbsp; &nbsp;  /BPSMB/TU/VIII/2019</p>
            {{-- </div> --}}
            <table>
            <tr>
            <td style="width:30%;">Nama Perusahaan</td>
            <td>: {{ $pengujian->user->name }}</td>
            </tr>
            <tr>
            <td style="width:30%;"> Nama Barang</td>
            <td>: {{ $pengujian->permohonan_pengujian->retribusi->komoditi }}</td>
            </tr>
            <br>
            <tr style="height:50px;">
            <td style="width:30%;">Biaya Yang Harus Dibayar</td>
            <td>: Rp.{{ $pengujian->permohonan_pengujian->retribusi->biaya }},-</td>
            </tr>
            <tr>
            <td style="width:30%;"> Tanggal Verifikasi</td>
            <td>: {{ $pengujian->created_at->format('d M Y') }}</td>
            </tr>
            <tr>
            <td style="width:30%;"> Tanggal pengujian</td>
            <td>: {{ carbon\carbon::parse($pengujian->tanggal)->format('d M Y')}}</td>
            </tr>
            <tr>
            <td style="width:30%;"> Estimasi</td>
            <td>: {{ $pengujian->estimasi }}</td>
            </tr>
            <tr>
            <td style="width:30%;"> Metode Pembayaran</td>
            <td>: @if($pengujian->metode_pembayaran==1)
                Cash
                @elseif($pengujian->metode_pembayaran==2)
                Transfer
                @else
                Belum Dibayar
                @endif
            </td>

            </tr>
            <tr>
            <td style="width:30%;"> Lain-lain</td>
            <td>: {{ $pengujian->lainnya }}</td>
            </tr>
            <tr>
            <td style="width:30%;"> Keterangan</td>
            <td>: {{ $pengujian->keterangan }}</td>
            </tr>
            </table>
                      <br>
                      <br>
                      <table style="border:none;">
                      <tr style="border:none;">
                      <td style="width:70%; border:none;"></td>
                      <td style="text-align:center; border:none;">
                      <h5> <p>Banjarbaru, {{ $tgl }}</p></h5>
                        <h6>Mengetahui</h6>
                        <h5>Kepala Balai Pengujian dan Sertifikasi Mutu Barang</h5>
                        <br>
                        <br>
                        <h5 style="text-decoration:underline;">Drs.Anang Aliansyah</h5>
                        <h5>NIP. 19580726 1984 03 1 007</h5>
                      </td>
                      </tr>
                      </table>
                    </div>
             </div>
         </body>
</html>
