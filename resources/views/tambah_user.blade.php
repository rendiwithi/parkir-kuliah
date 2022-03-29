    
<div class ="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h3>Tambah User</h3>
                
                </br>
                </br>
                <form method="get" action="/user/add_user">
                    {{csrf_field()}}
                    <label style="color:black;font-size:100%" for="desc">username</label>
                    <div class="input-field">
                        <input type="text" name="username" id="username" required>   
                    </div>
                    <label style="color:black;font-size:100%" for="desc">Nama Lengkap</label>
                    <div class="input-field">
                        <input type="text" name="nama" id="nama" required>   
                    </div>
                    <label style="color:black;font-size:100%" for="desc">Nomor Telp</label>
                    <div class="input-field">
                        <input type="text" name="nomor" id="nomor" required>   
                    </div>
                    <br>
                    <button class="btn waves-effect green">Add</button>
                </form>
            </div>
        </div>
            
    </div>
 