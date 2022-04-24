<!DOCTYPE html>
<html>

<head>
    <title>E-Parkiran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <center>
        <h3 class="mt-5">Daftar Parkiran Kosong</h3>
    </center>
    <table class="table table-striped table-hover table-bordered text-center" align="center">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nomer Parkiran</th>
                <th>Jenis</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($data as $dp)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$dp->nama}}</td>
                <td>{{$dp->jenis}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <script src="/js/user.js"></script>