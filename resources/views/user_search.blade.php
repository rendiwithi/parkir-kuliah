<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h3 class="text-center mt-5">Mall Assin </h3>
                <form class="card mx-auto mt-5 p-2" style="width: 25rem;" method="get" action="/search">
                    {{csrf_field()}}
                    <div class="row g-3 mx-auto">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Plat Nomor</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="plat" id="plat" class="form-control" placeholder="Ketikkan Plat Nomor" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Cari</button>
                </form>
                <div class="d-flex justify-content-center">
                    <a href="/parkiran"><button type="submit" class="btn btn-success px-5">Lihat Ruang Parkir Kosong</button></a>
                    
                </div>
            </div>
        </div>
    </div>
