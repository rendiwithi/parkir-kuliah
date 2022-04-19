<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h3>Masukkan Kendaraan</h3>
                <form method="get" action="/admin/masuk/add_kendaraan">
                    {{csrf_field()}}
                    <label style="color:black;font-size:100%" for="desc">Plat Kendaraan</label>
                    <div class="input-field">
                        <input type="text" name="plat" id="plat" required>
                    </div>
                    <label style="color:black;font-size:100%" for="desc">Tempat Parkir</label>
                    <div>
                        <Select name="tempat_parkir" , id="tempat_parkir">
                            @foreach ($tempat_parkir as $tparkir)
                            <option value="{{$tparkir->id}}">{{$tparkir->nama}}</option>
                            @endforeach
                        </Select>
                    </div>
                    <br>
                    <button class="btn waves-effect green">Add</button>
                </form>
            </div>
        </div>
    </div>