<!DOCTYPE html>
<html>

<head>
   <title>E-Parkiran</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

   <center>
      <h3 class="my-5">Daftar Record Parkir</h3>
   </center>
   <table class="table table-striped table-hover table-bordered text-center" align="center">
      <thead class="table-primary">
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
      </thead>
      <tbody>
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
            <a href="/admin/keluar/delete/{{$dp->id}}/{{$dp->tempat}}" onclick="return confirm('Admin Yakin ingin mengeluarkanya?');"><button class="btn btn-danger">Keluar</button></a>
         </td>
      </tr>
      @endforeach
      </tbody>
   </table>
   </div>