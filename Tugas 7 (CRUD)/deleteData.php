<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<?php
    if(!empty($_GET['id'])){
        include "koneksi.php";
        $get_id = $_GET['id'];
        $query = "DELETE FROM mahasiswa WHERE id='$get_id'";
        $query2 = "SELECT * FROM mahasiswa WHERE id='$get_id'";
        $res2 = mysqli_query($koneksi, $query2);
        $data = mysqli_fetch_array($res2);
        $nim = $data['nim'];
        $res = mysqli_query($koneksi, $query);
        
        if ($res){
            echo "<div></div>
            <script>
            var nim = '$nim';
            Swal.fire({
                icon: 'success',
                title: 'Berhasil Dihapus!',
                text: 'Data NIM ' + nim + ' berhasil dilenyapkan.'
            }).then(function() {
                window.location='admin.php';
            });
            </script>";
        }
    }
?>