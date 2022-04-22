<!DOCTYPE html>
<html>

<head>
   <title>E-Parkiran</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

   <center>
      <h3 class="my-5">Daftar Lapangan Belum Parkir</h3>
   </center>
   <table class="table table-striped table-hover table-bordered text-center" align="center">
      <thead class="table-primary">
      <tr>
         <th>No</th>
         <th>Plat</th>
         <th>Masuk</th>
         <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
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
            <a href="/admin/lapangan/edit/{{$dp->plat}}"><button class="btn btn-warning">Edit</button></a>
         </td>
      </tr>
      @endforeach
      </tbody>
   </table>
   </div>