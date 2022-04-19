<div class="container">
    <div class="row">
        <div class="col s10">
            <div class="card-panel">
                <h3>Edit User</h3>
                @foreach($data as $user)
                <form method="get" action="/pegawai/update">
                    <label for="desc">Nama :</label>
                    <div class="input-field">
                        <input type="text" name="nama" id="nama" value="{{$user->nama}}" required>
                    </div>
                    <input type="hidden" name="id" id="id" value="{{$user->id}}" required>
                    <label style="color:black;font-size:100%" for="desc">Nama Mall</label>
                    <div>
                        <Select name="mall_id" , id="mall_id">
                            @foreach ($mall as $mallitem)
                            <option value="{{$mallitem->id}}">{{$mallitem->nama}}</option>
                            @endforeach
                        </Select>
                    </div>
                    <label style="color:black;font-size:100%" for="desc">Jenis Role</label>
                    <div>
                        <Select name="role_id" , id="role_id">
                            @foreach ($role as $roleusr)
                            <option value="{{$roleusr->id}}">{{$roleusr->tipe}}</option>
                            @endforeach
                        </Select>
                    </div>
                    <!-- <div class="input-field">
                            <input type="text" name="nama" id="nama" value="{{$user->nama}}" required>
                        </div>
						<label for="desc">Nomor Telp :</label>
                        <div class="input-field">
                            <input type="text" name="nomor" id="nomor" value="{{$user->nama}}" required>
                        </div>
						<br> -->
                    <button class="btn waves-effect green">Edit</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>