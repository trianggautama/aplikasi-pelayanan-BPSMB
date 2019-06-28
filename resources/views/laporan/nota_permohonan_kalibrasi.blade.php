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
                    <img  class="pemko" src="{{asset('images/logo_pemprov.png')}}">
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
            <hr>
    </div>

    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;" style="margin:0px;">KWITANSI</h2>
            <p class="text-right" style="margin-right:20px; margin-top:0px;">Nomor:......................</p>
            <table>
            <tr>
            <td style="width:30%;">Telah Terima Uang Dari</td>
            <td>: CV.ABDI JAYA PLUS</td>
            </tr>
            <tr>
            <td style="width:30%;"> Untuk Keperluan</td>
            <td>: Kalibrasi alat Ukur Kadar Abu</td>
            </tr>
            <br>
            <tr style="height:50px;">
            <td style="width:30%;">Total</td>
            <td>: Rp.1.500.000</td>
            </tr>
            </table>
                      <br>
                      <br>
                      <div class="ttd">
                        <h5> <p>Banjarbaru, tanggal bulan 2019</p></h5>
                      <h5>pimpinan</h5>
                      <br>
                      <br>
                      <h5 style="text-decoration:underline;">nama pimpinan</h5>
                      </div>
                    </div>
             </div>
         </body>
</html>