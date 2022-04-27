<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col s10">
            <div class="card-panel">
                <h3 class="text-center my-5">Edit Parkir</h3>
                @foreach($data as $dt)
                <form class="card mx-auto p-2" style="width: 25rem;" method="get" action="/parkir/update">
                <div class="row g-3 mx-auto">
                    <div class="col-auto mx-2">
                        <label for="inputPassword6" class="col-form-label">Plat Kendaraan</label>
                    </div>
                    <div class="col-auto">
                    <fieldset disabled>
                        <input type="text" name="plat" id="plat" class="form-control" value="{{$dt->plat}}" required>
                    </div>
                    <input type="hidden" name="id" id="id" value="{{$dt->tempat_parkir}}" required>
                    <div class="col-auto mx-2">
                    <label class="col-form-label">Tempat Parkir</label>
                </div>
                    <div class="col-auto mx-2">
                        <Select name="tp_id" , id="tp_id" class="form-select">
                            @foreach ($tempat_parkir as $tp)
                            <option value="{{$tp->id}}">{{$tp->nama}}</option>
                            @endforeach
                        </Select>
                    </div>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
                <!--<form method="get" action="/parkir/update">
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
                </form>-->
                @endforeach
            </div>
        </div>
    </div>
</div>