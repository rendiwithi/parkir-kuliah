<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <div class="card-panel mx-5">
                <h3 class="text-center mt-2 py-3 bg-info">Hasil Search</h3>
                @foreach($data as $dt)
                <div class="card mx-5 mt-4">
                <?php
                $masuk = date('G:m:s', strtotime($dt->masuk));
                ?>
                <h3 class="text-center">{{$dt->plat}}</h3>
                <h3 class="text-center">{{$dt->tempat}}</h3>
                <h3 class="text-center">{{$dt->mall}}</h3>
                <h3 class="text-center">{{$dt->jenis_parkir}}</h3>
                <h3 class="text-center">{{$masuk}}</h3>
                <form method="get" action="/">
                    <button class="btn btn-info justify-content-end mx-2">Kembali</button>
                </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>