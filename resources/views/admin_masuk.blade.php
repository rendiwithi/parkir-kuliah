<!DOCTYPE html>
<html>

<head>
   <title>E-Parkiran</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

   <center>
      <h3 class="mt-5">Daftar Input Parkir</h3>
   </center>
   <a href="{{URL('admin/masuk/tambah')}}"><button type="submit" class="btn btn-success m-2">Tambah</button></a>
   <table class="table table-striped table-hover table-bordered text-center" align="center">
      <thead class="table-primary">
      <tr>
         <th>No</th>
         <th>Plat</th>
         <th>Masuk</th>
         <th>Keluar</th>
         <th>Kondisi</th>
      </tr>
      </thead>
      <tbody>
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
   <script src="/js/user.js"></script>