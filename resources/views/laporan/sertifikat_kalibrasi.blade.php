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
        text-align: center;
        color: black;
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
         height: 2px;
         background-color: black;
         width:100%;
     }
     .ttd{
         text-align: center;
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
    <div class="container">
    <hr style="margin-top:3px; margin-bottom:3px;">
        <div class="isi" style="margin-top:5px;">
            <h2 style="text-align:center; margin-bottom:1px; margin-top:5px;" style="text-decoration:underline"><b>SERTIFIKAT KALIBRASI</b></h2>
            <p style="text-align:center; margin:0px;">CALIBRATION CERTIFICATE</p>
            <P style="text-align:center; margin:0px;">SERI NOMOR :1778/BPSMB/VIII/2019</P>
           <table style="width:30%;margin-left:350px; margin-top:20px;">
           <tr>
           <td>No.Order</td>
           <td>:</td>
           </tr>
           <tr>
           <td>Halaman</td>
           <td>:</td>
           </tr>
           <tr>
           <td>Page</td>
           <td>:</td>
           </tr>
           </table>
            <table>
            <tr style="padding:2px;">
            <td><p style="text-decoration:underline;">IDENTITAS ALAT</p></td>
            </tr>
            <tr style="padding:2px;">
            <td style="width:30%; text-decoration:underline;">NAMA</td>
            <td>: {{$kalibrasi->permohonan_kalibrasi->retribusi->nama}}</td>
            </tr style="padding:2px;">
            <tr>
            <td style="width:30%; text-decoration:underline;">MERK PABRIK</td>
            <td>: {{$kalibrasi->permohonan_kalibrasi->merk}}</td>
            </tr>
            <tr>
            <td style="width:30%; text-decoration:underline;">TYPE/ NOMOR SERI</td>
            <td>: {{$kalibrasi->permohonan_kalibrasi->no_seri}}</td>
            </tr>
            <tr>
            <td style="width:30%; text-decoration:underline;">Lain-lain </td>
            <td><br><br>
           <p style=" margin-top:0px; margin-bottom:0px;">: Kapasitas:-</p> <br>
           <p style="margin-left:8px; margin-top:0px; margin-bottom:0px;"> Identitas:-</p>
            </td>
            </tr>
            <tr>
            <td><p style="text-decoration:underline;">IDENTITAS PEMILIK</p></td>
            </tr>
            <tr>
            <td style="width:30%; text-decoration:underline;">NAMA</td>
            <td>: {{$kalibrasi->user->name}}</td>
            </tr>
            <tr>
            <td style="width:30%; text-decoration:underline;">ALAMAT</td>
            <td><p>: {{$kalibrasi->user->perusahaan->alamat}}</p></td>
            </tr>
            <br>
            </table>
            <table>
            <tr>
            <td >
            <div class="ttd">
                        <h5> <p>Mengetahui</p></h5>
                      <h5>Kepala Balai Sertifikasi dan Mutu Barang</h5>
                      <br>
                      <br>
                      <h5 style="text-decoration:underline;">Drs.Anang Aliansyah</h5>
                      <h5 style="margin-top:1px;">NIP.19580726 198403 1 007</h5>
                      </div>
            </td>
            <td>
            <div class="ttd">
                        <h5> <p>Diterbitkan Tanggal, {{ $tgl }}</p></h5>
                      <h5>Deputi Manager Teknik</h5>
                      <br>
                      <br>
                      <h5 style="text-decoration:underline; magin-bottom:1px;">R.O.Suharianto, ST</h5>
                      <h5 style="margin-top:1px;">NIP.19761027 200604 1 003</h5>
                      </div>
            </td>
            </tr>
            </table>
                      <br>
                      <br>
        <table style="width:40%;margin-left:310px; margin-top:20px;">
           <tr>
           <td>Seri</td>
           <td>:1773/BPSMB/VIII/2019</td>
           </tr>
           <tr>
           <td>No.Order</td>
           <td>:NA.390</td>
           </tr>
           <tr>
           <td>Halaman</td>
           <td>:2 dari 2</td>
           </tr>
           </table>
           <h2 style="text-align:center; font-family:serif; text-decoration:underline;">BALAI PENGUJIAN DAN SERTIFIKASI MUTU BARANG</h2>
           <table style="width:80%;margin-left:20px; margin-top:10px;">
           <tr>
           <td>Nama Alat</td>
           <td>: {{$kalibrasi->permohonan_kalibrasi->retribusi->nama}}</td>
           </tr>
           <tr>
           <td>Merk</td>
           <td>: {{$kalibrasi->permohonan_kalibrasi->merk}}</td>
           </tr>
           <tr>
           <td>No. Seri</td>
           <td>: {{$kalibrasi->permohonan_kalibrasi->no_seri}}</td>
           </tr>
           <tr>
           <td>Lain-lain / Kapasitas</td>
           <td>: {{$kalibrasi->permohonan_kalibrasi->retribusi->rentang_ukur}}</td>
           </tr>
           <tr>
           <td>Tempat Kalibrasi</td>
           <td>: Kantor BPSMB Prov.Kalsel</td>
           </tr>
           <tr>
           <td>Tanggal Kalibrasi</td>
           <td>: {{$kalibrasi->tanggal}}</td>
           </tr>
           </table>
           <table style="width:80%;margin-left:310px; margin-top:20px;">
           <tr>
           <td>Suhu</td>
           <td>: 25 -+ 1 C</td>
           </tr>
           <tr>
           <td>Kelembaban</td>
           <td>: 49 -+ 4%</td>
           </tr>
           </table>
           <br>
           <table style="border: 1px solid #708090; width:80%; margin:auto;" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="4" style="border: 1px solid #708090;">Thermometer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border: 1px solid #708090; text-align:center;">Alat ('C)</td>
                        <td style="border: 1px solid #708090; text-align:center;">Standard ('C)</td>
                        <td style="border: 1px solid #708090; text-align:center;">k</td>
                        <td style="border: 1px solid #708090; text-align:center;">U95 ('C)</td>
                    </tr>
                    @foreach($hasil as $d)
                    <tr>
                        <td style="border: 1px solid #708090; text-align:center;">{{$d->alat}}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{$d->standard}}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{$d->k}}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{$d->u}}</td>
                    </tr>
                    @endforeach
                    </tfoot>
            </table>
            <h5 style="margin-left:70 px;"><b>Catatan: Alat Tersebut di Kalibrasi Dengan Standard : Thermometer Fluke <br>
            Prosedur : 1k-KAL-25</b></h5>
            <br><br><br>
            <h5 style="margin-left:70 px;"><b>Petugas Kalibrasi: R.O Suharianto ,ST</b></h5>
                <hr>
                <ul>
                <li>Hasil Kalibrasi Hanya Berdasarkan Pada alat yang dikalibrasi</li>
                <li>Dilarang Mengutip/memperbanyak atau mempublikasikan sertifikat tanpa seirin BPSMB</li>
                <li>Sertifikat ini sah apabila dibubuhi cap BPSMB</li>
                <li>Hasil kalibrasi yang dilaporkantertelusur kesatuan pengukuran SI melalui PPM-LIPI</li>
                </ul>
                    </div>
             </div>
         </body>
</html>
