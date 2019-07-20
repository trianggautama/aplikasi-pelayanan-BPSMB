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
            <h2 style="text-align:center; margin-bottom:1px; margin-top:5px;" style="text-decoration:underline"><b>LAPORAN HASIL PENGUJIAN</b></h2>
            <P style="text-align:center; margin:0px;">Nomor :1778/BPSMB/VIII/2019</P>
            <br><br>
            <p style="margin-left:35px;">yang menerangkan di bawah ini bahwa contoh sebagai berikut :</p>
            <table style="width:90%; margin:auto;">
            <tr>
            <td>1. Nama Komoditi</td>
            <td>: {{$pengujian->permohonan_pengujian->retribusi->komoditi}}</td>
            </tr>
            <tr>
            <td>2. Pemilik Contoh</td>
            <td>: {{ $pengujian->user->name }}</td>
            </tr>
            <tr>
            <td>3. Alamat</td>
            <td>: {{$pengujian->user->perusahaan->alamat}}</td>
            </tr>
            <tr>
            <td>4. Tanggal terima Contoh</td>
            <td>: {{$pengujian->tanggal}}</td>
            </tr>
            <tr>
            <td>5. Tanggal Pengujian</td>
            <td>: {{$pengujian->tanggal}}</td>
            </tr>
            <tr>
            <td>6. Metode uji</td>
            <td>: SNI 01-2891-1992</td>
            </tr>
            <tr>
            <td>7. Jumlah Contoh</td>
            <td>: {{ $count }} Contoh</td>
            </tr>
            <tr>
            <td>8. Kode Contoh</td>
            <td>: {{ $kode_contoh->kode }}</td>
            </tr>
            </table>
            <br>
            <table style="border: 1px solid #708090; width:80%; margin:auto;" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th rowspan="2" style="border: 1px solid #708090;">No</th>
                        <th rowspan="2" style="border: 1px solid #708090;">Kode Contoh</th>
                        <th rowspan="2" style="border: 1px solid #708090;">No BPSMB</th>
                        <th colspan="5" style="border: 1px solid #708090;">Hasil Analisa</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border: 1px solid #708090; text-align:center;">Kadar Air</td>
                        <td style="border: 1px solid #708090; text-align:center;">Kadar Abu</td>
                        <td style="border: 1px solid #708090; text-align:center;">Kadar Protein</td>
                        <td style="border: 1px solid #708090; text-align:center;">Kadar Lemak</td>
                        <td style="border: 1px solid #708090; text-align:center;">Kadar Serat</td>
                        <td style="border: 1px solid #708090; text-align:center;">Energi Metabolisme</td>
                    </tr>
                    <?php $no = 0 ?>
                    @foreach($hasil as $d)
                    <tr>
                        <td style="border: 1px solid #708090; text-align:center;">{{ $no = $no+1 }}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{ $d->kode }}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{ $d->no_bpsmb }}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{ $d->kadar_air }}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{ $d->kadar_abu }}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{ $d->kadar_protein }}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{ $d->kadar_lemak }}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{ $d->kadar_serat }}</td>
                        <td style="border: 1px solid #708090; text-align:center;">{{ $d->energi_metabolisme }}</td>
                    </tr>
                    @endforeach
                    </tfoot>
            </table>
            <p style="margin-left:35px;">Hasil Pengujian diatsa  berdasarkan kepada contoh uji yang bersangkutan berlaku 90 hari sejak diterbitkan, dan dilarang diperbanyak kecuali atas persetujuan dari laboratorium.</p>
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

                    </div>
             </div>
         </body>
</html>
