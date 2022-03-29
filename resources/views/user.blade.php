<!DOCTYPE html>
<html>
<head>
<title>Cara Design Table Dengan CSS</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <h3>Tambah User<a class="right hide-on-med-and-down" href="{{URL('user/tambah')}}"><img src="assets/img/plus.png" width="100" height="80"/></a></h3>
                    
<center><h3>DAFTAR USER</h3></center>
<table class="table1" align="center">
<tr>
<th>No</th>
<th>userName</th>
<th>Nama</th>
<th>No Telpon</th>
<th>Aksi</th>
</tr>

<?php $no=1; ?>
@foreach ($user as $usr)
<tr>
<td>{{$no++}}</td>
<td>{{$usr->username}}</td>
<td>{{$usr->nama}}</td>
<td>{{$usr->nohp}}</td>
     <td>
  <a href="/user/delete/{{$usr->id}}" onclick="return confirm('Admin Yakin ingin menghapusnya?');"><button class="btn waves-effect red white-text">Hapus</button></a>
  <a href="/user/edit/{{$usr->id}}"><button class="btn waves-effect orange white-text">Edit</button></a>
     </td>
</tr>
@endforeach
</tbody>
</table>
</div>
