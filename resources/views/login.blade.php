<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h3>Login </h3>
                <form method="get" action="/login/logic">
                    {{csrf_field()}}
                    <label style="color:black;font-size:100%" for="desc">Username</label>
                    <div class="input-field">
                        <input type="text" name="username" id="username" required>
                    </div>
                    <br>
                    <label style="color:black;font-size:100%" for="desc">Password</label>
                    <div class="input-field">
                        <input type="text" name="password" id="password" required>
                    </div>
                    <button class="btn waves-effect green">login</button>
                </form>
            </div>
        </div>
    </div>