<!DOCTYPE html>
<html>

<head>
   <title>E-Parkiran</title>
   <link rel="stylesheet" type="text/css" href="/css/user.css">
</head>

<body>

   <center>
      <h3>Daftar Lapangan Belum Parkir</h3>
   </center>
   <table class="table1" align="center">
      <tr>
         <th>No</th>
         <th>Plat</th>
         <th>Masuk</th>
         <th>Aksi</th>
      </tr>
      <?php $no = 1; ?>
      @foreach ($data as $dp)
      <?php if (empty($dp->keluar)==true) {
         $masuk = date('G:m:s',strtotime($dp->masuk));
      } else {
         $masuk = date('G:m:s',strtotime($dp->masuk));
      }; ?>

      <tr>
         <td>{{$no++}}</td>
         <td>{{$dp->plat}}</td>
         <td>{{$masuk}}</td>
         <td>
            <a href="/admin/lapangan/edit/{{$dp->plat}}"><button class="btn waves-effect orange white-text">Edit</button></a>
         </td>
      </tr>
      @endforeach
      </tbody>
   </table>
   </div>