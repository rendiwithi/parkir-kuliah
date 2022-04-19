<div class="container">
    <div class="row">
        <div class="col s10">
            <div class="card-panel">
                <h3>Hasil Search</h3>
                @foreach($data as $dt)
                <?php
                $masuk = date('G:m:s', strtotime($dt->masuk));
                ?>
                <h3>{{$dt->plat}}</h3>
                <h3>{{$dt->tempat}}</h3>
                <h3>{{$dt->mall}}</h3>
                <h3>{{$dt->jenis_parkir}}</h3>
                <h3>{{$masuk}}</h3>
                <form method="get" action="/">
                    <button class="btn waves-effect green">Kembali</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>