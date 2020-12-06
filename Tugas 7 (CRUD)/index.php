<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7 (CRUD)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<div class="col-md-6 mx-auto my-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="login-tab" href="#login" data-toggle="tab" role="tab">LOGIN</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="register-tab" href="#register" data-toggle="tab" role="tab">REGISTER</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="login" role="tabpanel">
            <div class="card border-dark">
                <div class="card-header">
                    <h3 class="mb-0 my-2">Login Form</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" method="POST" action="login.php">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="masukkan username" required="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="masukkan password" required="">
                        </div>
                        <div class="form-group">
                            <input name="login" type="submit" class="btn btn-dark btn-md float-right" value="Login"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="register" role="tabpanel">
            <div class="card border-dark">
                <div class="card-header">
                    <h3 class="mb-0 my-2">Register Form</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" method="POST" action="register.php">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="masukkan username" required="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="masukkan password" required="">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="masukkan nim" required="">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" required="">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat" required="">
                        </div>
                        <div class="form-group">
                            <input name="register" type="submit" class="btn btn-dark btn-md float-right" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
