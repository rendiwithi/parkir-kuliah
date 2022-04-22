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
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Plat Kendaraan</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="plat" id="plat" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Add</button>
                    <!--<label style="color:black;font-size:100%" for="desc">Plat Kendaraan</label>
                    <div class="input-field">
                        <input type="text" name="plat" id="plat" required>
                    </div>
                    <br>
                    <button class="btn waves-effect green">Add</button>-->
                </form>
            </div>
        </div>
    </div>