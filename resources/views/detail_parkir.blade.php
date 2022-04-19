<!DOCTYPE html>
<html>

<head>
   <title>E-Parkiran</title>
   <link rel="stylesheet" type="text/css" href="/css/user.css">
</head>

<body>

   <center>
      <h3>Daftar Record Parkir</h3>
   </center>
   <!-- <h3>Tambah User<a class="right hide-on-med-and-down" href="{{URL('user/tambah')}}"><img src="assets/img/add.png" width="30" height="30" /></a></h3> -->
   <a href="{{URL('parkir/tambah')}}"><button class="right hide-on-med-and-down">Tambah</button></a>
   <table class="table1" align="center">
      <tr>
         <th>No</th>
         <th>Tempat</th>
         <th>Plat</th>
         <th>Masuk</th>
         <th>Keluar</th>
         <th>Kondisi</th>
         <th>Jenis Parkir</th>
         <th>Nama Mall</th>
         <th>Aksi</th>
      </tr>
      <?php $no = 1; ?>
      @foreach ($data as $dp)
      <?php if ($dp->kondisi || empty($dp->keluar)==true) {
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
         <td>{{$dp->tempat}}</td>
         <td>{{$dp->plat}}</td>
         <td>{{$masuk}}</td>
         <td>{{$keluar}}</td>
         <td>{{$kondisi}}</td>
         <td>{{$dp->jenis_parkir}}</td>
         <td>{{$dp->mall}}</td>
         <td>
            <a href="/parkir/delete/{{$dp->id}}/{{$dp->tempat}}" onclick="return confirm('Admin Yakin ingin mengeluarkanya?');"><button class="btn waves-effect red white-text">Keluar</button></a>
            <a href="/parkir/edit/{{$dp->plat}}"><button class="btn waves-effect orange white-text">Edit</button></a>
         </td>
      </tr>
      @endforeach
      </tbody>
   </table>
   </div>