<?php
    if(!empty($_GET['id'])){
        include "koneksi.php";
        $get_id = $_GET['id'];
        $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '$get_id'");
        $res = mysqli_fetch_array($query);
        $uname = $res['username'];
        $pass = $res['password'];
        $nama = $res['nama'];
        $nim = $res['nim'];
        $alamat = $res['alamat'];

        echo '
        <div class="card mt-4">
            <div class="card-header">
                <h3 class="mb-0 my-2">Edit Data Form</h3>
            </div>
            <div class="card-body">
                <form class="form" role="form" autocomplete="off" method="POST" action="saveData.php">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="masukkan username" required="" value="' . $uname .'">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="masukkan password" required="" value="' . $pass .'">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="masukkan nim" required="" readonly value="' . $nim .'">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" required="" value="' . $nama .'">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat" required="" value="' . $alamat .'">
                    </div>
                    <div class="form-group">
                        <input name="save" type="submit" class="btn btn-success btn-md float-right mx-2" value="Save">
                    </div>
                </form>
            </div>
        </div>
        ';
    }
    
?>