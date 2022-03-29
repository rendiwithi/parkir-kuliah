<div class="container">
        <div class="row">
            <div class="col s10">
                <div class="card-panel">
                    <h3>Edit User</h3>
                    @foreach($data as $user)
                    <form method="get" action="/user/update">
						<label for="desc">Username :</label>
                        <div class="input-field">
                            <input type="text" name="username" id="username" value="{{$user->username}}" required>
                        </div>
						<label for="desc">Nama :</label>
                        <div class="input-field">
                            <input type="text" name="nama" id="nama" value="{{$user->nama}}" required>
                        </div>
						<label for="desc">Nomor Telp :</label>
                        <div class="input-field">
                            <input type="text" name="nomor" id="nomor" value="{{$user->nohp}}" required>
                        </div>
						<br>
                        <button class="btn waves-effect green">Edit</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
