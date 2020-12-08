<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<?php
    if(isset($_POST['save'])){
        session_start();
        $level = $_SESSION['level'];

        include 'koneksi.php';
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        $query = "UPDATE mahasiswa SET
            username = '$uname',
            password = '$pass',
            nama = '$nama',
            alamat = '$alamat'
            WHERE nim = '$nim'";

        if (mysqli_query($koneksi, $query)){
            if ($level == 1){
                echo "<div></div>
                <script>
                var nim = '$nim';
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil Edit Data!',
                    text: 'Data NIM ' + nim + ' berhasil dirubah.'
                }).then(function() {
                    window.location='admin.php';
                });
                </script>";
            }
            elseif ($level == 2){
                echo "<div></div>
                <script>
                var nim = '$nim';
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil Edit Data!',
                    text: 'Data Anda berhasil dirubah.'
                }).then(function() {
                    window.location='guest.php';
                });
                </script>";
            }   
        }
        else {
            echo "<div></div>
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Gagal edit data, silakan coba lagi!'
            }).then(function() {
                window.location='admin.php';
            });
            </script>";
        };
    }

?>
