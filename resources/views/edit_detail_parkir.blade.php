<div class="container">
    <div class="row">
        <div class="col s10">
            <div class="card-panel">
                <h3>Edit Parkir</h3>
                @foreach($data as $dt)
                <form method="get" action="/parkir/update">
                    <label for="desc">Plat Kendaraan :</label>
                    <div class="input-field">
                        <input type="text" name="plat" id="plat" value="{{$dt->plat}}" required>
                    </div>
                    <input type="hidden" name="id" id="id" value="{{$dt->tempat_parkir}}" required>
                    <label style="color:black;font-size:100%" for="desc">Tempat Parkir</label>
                    <div>
                        <Select name="tp_id" , id="tp_id">
                            @foreach ($tempat_parkir as $tp)
                            <option value="{{$tp->id}}">{{$tp->nama}}</option>
                            @endforeach
                        </Select>
                    </div>
                    <button class="btn waves-effect green">Edit</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>