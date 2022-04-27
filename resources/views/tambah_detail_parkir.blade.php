<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h3 class="text-center my-5">Masukkan Kendaraan</h3>
                <form class="card mx-auto p-2" style="width: 25rem;" method="get" action="/admin/masuk/add_kendaraan">
                {{csrf_field()}}
                <div class="row g-3 mx-auto">
                    <div class="col-auto mx-2">
                        <label for="inputPassword6" class="col-form-label">Plat Kendaraan</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="plat" id="plat" class="form-control" required>
                    </div>
                    <input type="hidden" name="id" id="id" required>
                    <div class="col-auto mx-2">
                    <label class="col-form-label">Tempat Parkir</label>
                </div>
                    <div class="col-auto mx-2">
                        <Select name="tempat_parkir" , id="tempat_parkir" class="form-select">
                            @foreach ($tempat_parkir as $tparkir)
                            <option value="{{$tparkir->id}}">{{$tparkir->nama}}</option>
                            @endforeach
                        </Select>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
                <!--<form class="card mx-auto p-2" style="width: 25rem;" method="get" action="/admin/masuk/add_kendaraan">
                    {{csrf_field()}}
                    <div class="row g-3 mx-auto">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Plat Kendaraan</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="plat" id="plat" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-auto mx-2">
                    <label class="col-form-label">Tempat Parkir</label>
                </div>
                    <div class="col-auto mx-2">
                        <Select name="tempat_parkir" , id="tempat_parkir" class="form-select">
                            @foreach ($tempat_parkir as $tparkir)
                            <option value="{{$tparkir->id}}">{{$tparkir->nama}}</option>
                            @endforeach
                        </Select>
                    </div>
                    <br>
                    <button class="btn btn-succsses">Add</button>
                </form>-->
            </div>
        </div>
    </div>