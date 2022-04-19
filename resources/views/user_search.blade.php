<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h3>Mall Asin </h3>
                <form method="get" action="/search">
                    {{csrf_field()}}
                    <label style="color:black;font-size:100%" for="desc">Plat Nomot Anda :</label>
                    <div class="input-field">
                        <input type="text" name="plat" id="plat" required>
                    </div>
                    <br>
                    <button class="btn waves-effect green">Cari</button>
                </form>
            </div>
        </div>
    </div>