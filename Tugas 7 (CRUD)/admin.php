<?php 
    session_start();
    $id = $_SESSION['id'];
    $nim = $_SESSION['nim'];
    $nama = $_SESSION['nama'];
    $level = $_SESSION['level'];

    if(empty($_SESSION['id'])){
        echo "<div></div>
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Mohon login terlebih dahulu!'
        }).then(function() {
            window.location='index.php';
        });
        </script>";
    }

    if($level != 1){
        echo "<div></div>
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Tidak bisa akses!',
            text: 'Maaf, Anda bukan admin!'
        }).then(function() {
            window.location='index.php';
        });
        </script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7 (CRUD) - Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-6 mx-auto my-5">
        <div class="card">
            <h2 class="my-2 mx-2">Halaman Admin</h2>
            <p class="my-2 mx-2">Halo admin <?php echo $nama; ?> dengan nim <?php echo $nim; ?> !</p>
            <input id="add" name="add" type="submit" class="btn col-3 btn-sm btn-outline-success mx-2 mb-3" value="Add Data">
        
            <?php 
                include 'readData.php';
            ?>
        </div>

        <div id="card-form"></div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<script>
    var card = document.getElementById("card-form");

    var addbutton = document
    .getElementById("add")
    .addEventListener("click", (MouseEvent) => {
        addData();
    });

    var editbutton = document
    .getElementById("edit")
    .addEventListener("click", (MouseEvent) => {
        editData();
    });

    function addData() {
        card.innerHTML = `
            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="mb-0 my-2">Add Data Form</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" method="POST" action="addData.php">
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
                            <input name="reset" type="reset" class="btn btn-danger btn-md float-right mx-2" value="Reset">
                            <input name="insert" type="submit" class="btn btn-success btn-md float-right mx-2" value="Insert">
                        </div>
                    </form>
                </div>
            </div>
        `;
    }

    function editData() {
        card.innerHTML = `
            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="mb-0 my-2">Edit Data Form</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" method="POST" action="editData.php">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="masukkan username" required="" value=>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="masukkan password" required="">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="masukkan nim" required="" disabled>
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
                            <input name="reset" type="reset" class="btn btn-danger btn-md float-right mx-2" value="Reset">
                            <input name="save" type="submit" class="btn btn-success btn-md float-right mx-2" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        `;
    }
</script>

</body>
</html>