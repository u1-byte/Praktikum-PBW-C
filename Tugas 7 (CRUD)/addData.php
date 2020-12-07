<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<?php
    if(isset($_POST['insert'])){
        include 'koneksi.php';

        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $level = 2;

        $query = "INSERT INTO mahasiswa (username, password, nim, nama, alamat, level) VALUES (
            '$uname',
            '$pass',
            '$nim',
            '$nama',
            '$alamat',
            '$level')";

        if (mysqli_query($koneksi, $query)){
            echo "<div></div>
            <script>
            var nim = '$nim';
            Swal.fire({
                icon: 'success',
                title: 'Berhasil Menambahkan Data!',
                text: 'Tambah data NIM ' + nim + ' ke database.'
            }).then(function() {
                window.location='admin.php';
            });
            </script>";
        }
        else {
            echo "<div></div>
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Gagal tambah data, silakan coba lagi!'
            }).then(function() {
                window.location='admin.php';
            });
            </script>";
        };
    }

?>
