<!DOCTYPE html>
<html>

<head>
   <title>E-Parkiran</title>
   <link rel="stylesheet" type="text/css" href="/css/user.css">
</head>

<body>

   <center>
      <h3>Daftar Karyawan</h3>
   </center>
   <!-- <h3>Tambah User<a class="right hide-on-med-and-down" href="{{URL('user/tambah')}}"><img src="assets/img/add.png" width="30" height="30" /></a></h3> -->
   <a href="{{URL('pegawai/tambah')}}" ><button  class="right hide-on-med-and-down">Tambah</button></a>
   <table class="table1" align="center">
      <tr>
         <th>No</th>
         <th>Nama</th>
         <th>Nama Mall</th>
         <th>Tipe</th>
         <th>Aksi</th>
      </tr>
      <?php $no = 1; ?>
      @foreach ($akun as $usr)
      <tr>
         <td>{{$no++}}</td>
         <td>{{$usr->nama}}</td>
         <td>{{$usr->nama_mall}}</td>
         <td>{{$usr->tipe}}</td>
         <td>
            <a href="/pegawai/delete/{{$usr->id}}" onclick="return confirm('Admin Yakin ingin menghapusnya?');"><button class="btn waves-effect red white-text">Hapus</button></a>
            <a href="/pegawai/edit/{{$usr->id}}"><button class="btn waves-effect orange white-text">Edit</button></a>
         </td>
      </tr>
      @endforeach
      </tbody>
   </table>
   </div>