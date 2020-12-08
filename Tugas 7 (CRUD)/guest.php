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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7 (CRUD) - Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-6 mx-auto my-5">
        <div class="card">
            <h2 class="my-2 mx-2">Halaman Tamu</h2>
            <p class="my-2 mx-2">Halo NIM <?php echo $nim; ?> !</p>

            <?php 
                include 'readData.php';
                include 'editData.php';
            ?>

        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>

</body>
</html>