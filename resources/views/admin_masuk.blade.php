<!DOCTYPE html>
<html>

<head>
   <title>E-Parkiran</title>
   <link rel="stylesheet" type="text/css" href="/css/user.css">
</head>

<body>

   <center>
      <h3>Daftar Input Parkir</h3>
   </center>
   <a href="{{URL('admin/masuk/tambah')}}"><button class="right hide-on-med-and-down">Tambah</button></a>
   <table class="table1" align="center">
      <tr>
         <th>No</th>
         <th>Plat</th>
         <th>Masuk</th>
         <th>Keluar</th>
         <th>Kondisi</th>
      </tr>
      <?php $no = 1; ?>
      @foreach ($data as $dp)
      <?php if (empty($dp->keluar)==true) {
         $kondisi = "Ada Mobil";
         $masuk = date('G:m:s',strtotime($dp->masuk));
         $keluar = "-";
      } else {
         $kondisi = "Kosong";
         $masuk = date('G:m:s',strtotime($dp->masuk));
         $keluar = date('G:m:s',strtotime($dp->keluar));
      }; ?>

      <tr>
         <td>{{$no++}}</td>
         <td>{{$dp->plat}}</td>
         <td>{{$masuk}}</td>
         <td>{{$keluar}}</td>
         <td>{{$kondisi}}</td>
      </tr>
      @endforeach
      </tbody>
   </table>
   </div>