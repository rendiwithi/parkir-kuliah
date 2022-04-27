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
         <th>Aksi</th>
         <th>Pendapatan</th>
      </tr>
      <?php $no = 1;
      $pendapatan = 0; ?>
      @foreach ($data as $dp)
      <?php if (empty($dp->keluar) == true) {
         $masuk = date('G:m:s', strtotime($dp->masuk));
         $keluar = "-";
      } else {
         $masuk = date('G:m:s', strtotime($dp->masuk));
         $keluar = date('G:m:s', strtotime($dp->keluar));
      }; $pendapatan+=$dp->harga?>

      <tr>
         <td>{{$no++}}</td>
         <td>{{$dp->tempat}}</td>
         <td>{{$dp->plat}}</td>
         <td>{{$masuk}}</td>
         <td>{{$keluar}}</td>
         <td>
            <a href="/parkir/delete/{{$dp->id}}/{{$dp->tempat}}" onclick="return confirm('Admin Yakin ingin mengeluarkanya?');"><button class="btn waves-effect red white-text">Keluar</button></a>
            <a href="/parkir/edit/{{$dp->plat}}"><button class="btn waves-effect orange white-text">Edit</button></a>
         </td>
      </tr>
      @endforeach
      <?php 
      $pendapatanF = number_format( $pendapatan, 2, '.', '.' ); ?>
      <tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td>Total</td>
         <td>Rp. {{$pendapatanF}}</td>
      </tr>
      </tbody>
   </table>
   </div>