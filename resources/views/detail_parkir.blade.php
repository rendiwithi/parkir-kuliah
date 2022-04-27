<!DOCTYPE html>
<html>

<head>
   <title>E-Parkiran</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="d-flex justify-content-end">
      <a href="/login"><button type="submit" class="btn btn-danger m-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-door-open" viewBox="0 0 17 21">
               <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
               <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
            </svg>Logout</button>
      </a>
   </div>

   <center>
      <h3 class="mt-2">Daftar Record Parkir</h3>
   </center>
   <!-- <h3>Tambah User<a class="right hide-on-med-and-down" href="{{URL('user/tambah')}}"><img src="assets/img/add.png" width="30" height="30" /></a></h3> -->
   <table class="table table-striped table-hover table-bordered text-center" align="center">
      <thead class="table-primary">
      <tr>
         <th>No</th>
         <th>Tempat</th>
         <th>Plat</th>
         <th>Masuk</th>
         <th>Keluar</th>
         <th>Pendapatan</th>
      </tr>
      </thead>
      <tbody>
      <?php $no = 1;
      $pendapatan = 0; ?>
      @foreach ($data as $dp)
      <?php 
      $harga = number_format( $dp->harga, 2, '.', '.' ); 
      if (empty($dp->keluar) == true) {
         $masuk = date('G:m:s', strtotime($dp->masuk));
         $keluar = "-";
      } else {
         $masuk = date('G:m:s', strtotime($dp->masuk));
         $keluar = date('G:m:s', strtotime($dp->keluar));
      }; $pendapatan+=$dp->harga
      ?>
      ?>

      <tr>
         <td>{{$no++}}</td>
         <td>{{$dp->tempat}}</td>
         <td>{{$dp->plat}}</td>
         <td>{{$masuk}}</td>
         <td>{{$keluar}}</td>
         <td>{{$harga}}</td>
      </tr>
      @endforeach
      <?php 
      $pendapatanF = number_format( $pendapatan, 2, '.', '.' ); ?>
      <tr>
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