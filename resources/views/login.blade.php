<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/login.css">

<body>
<div class="container">
<!--assets/img/Sistem-Parkir-Efektif.jpg-->
    <div class="row justify-content-center">
        <div class="col s12">
            <div class="my-5">
                <h3 class="pt-5 mb-3 text-center">Login </h3>
                <form class="card shadow-lg mx-auto px-3 pb-2" style="width: 18rem;" method="get" action="/login/logic">
                {{csrf_field()}}
                <div class="my-3">
                    <label for="exampleInputEmail1" class="form-label" for="desc">Username</label>
                    <div class="input-field">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" required>
                    </div>
                </div>
                <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label" for="desc">Password</label>
                     <div class="input-field">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                    </div>
                </div>
                    <button type="submit" class="btn btn-success tombol">Login</button>
                </form>
                <!--<form method="get" action="/login/logic">
                    {{csrf_field()}}
                    <label class="form-label" for="desc">Username</label>
                    <div class="input-field">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    </div>
                    <br>
                    <label class="form-label" for="desc">Password</label>
                    <div class="input-field">
                        <input type="text" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                    <button class="btn btn-success">login</button>
                </form>-->
            </div>
        </div>
    </div>
</body>
    <script src="/js/user.js"></script>