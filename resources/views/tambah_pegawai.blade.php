    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-panel">
                    <h3>Tambah Pegawai</h3>

                    </br>
                    </br>
                    <form method="get" action="/pegawai/add_akun">
                        {{csrf_field()}}
                        <label style="color:black;font-size:100%" for="desc">Username</label>
                        <div class="input-field">
                            <input type="text" name="name" id="name" required>
                        </div>
                        <label style="color:black;font-size:100%" for="desc">Nama Mall</label>
                        <div>
                            <Select name="mall_id", id="mall_id">
                                @foreach ($mall as $mallitem)
                                <option value="{{$mallitem->id}}">{{$mallitem->nama}}</option>
                                @endforeach
                            </Select>
                        </div>
                        <label style="color:black;font-size:100%" for="desc">pilih tempat</label>
                        <div>
                            <Select name="role_id", id="role_id">
                                @foreach ($role as $roleusr)
                                <option value="{{$roleusr->id}}">{{$roleusr->tipe}}</option>
                                @endforeach
                            </Select>
                        </div>
                        <br>
                        <button class="btn waves-effect green">Add</button>
                    </form>
                </div>
            </div>

        </div>