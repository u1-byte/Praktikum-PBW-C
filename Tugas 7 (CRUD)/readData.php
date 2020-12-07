<?php
    include "koneksi.php";
    $level = $_SESSION['level'];
    $id = $_SESSION['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    $number = 1;
    while($res = mysqli_fetch_array($query)){
        echo '<div></div>
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">' . $number++ . '</th>
            <td>' . $res['nim'] . '</td>
            <td>' . $res['nama'] . '</td>
            <td>' . $res['alamat'] . '</td>
            ' . ($level == 1 ? '
            <td>
                <a id="edit" name="edit" href="editData.php?id=' . $res['id'] . '" class="btn btn-warning btn-md mx-2">Edit</a>
                <a id="delete" name="delete" href="deleteData.php?id=' . $res['id'] . '" class="btn btn-danger btn-md mx-2">Delete</a>
            </td>' : '') . '
            ' . ($level == 2 && $id == $res['id'] ? '
            <td>
                <a id="edit" name="edit" href="editData.php?id=' . $res['id'] . '" class="btn btn-warning btn-md mx-2">Edit</a>
            </td>' : '') . '
            </tr>
        </tbody>
        </table>';
    }
?>