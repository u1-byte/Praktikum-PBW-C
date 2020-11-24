<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 (PHP)</title>
</head>

<body>
    <h2> Nilai Akhir Mahasiswa </h2>
    <p>*Total bobot nilai harus berjumlah 100%</p>
    <p>*Jika ingin meniadakan bobot, masukkan 0</p>

    <form action="nilai_akhir.php" method="post">
        <label for="nama"> Nama = </label>
        <input type="text" name="nama"> <br>
        <label for="nim"> NIM = </label>
        <input type="text" name="nim"><br>
        <br>

        <label for="tugas"> Nilai Tugas = </label>
        <input type="number" name="tugas" min="1" max="100"> <br>
        <label for="bobot_t"> Bobot Nilai = </label>
        <input type="number" name="bobot_t" min="0" max="100"> <br>
        <br>

        <label for="uts"> Nilai UTS = </label>
        <input type="number" name="uts" min="1" max="100"> <br>
        <label for="bobot_ut"> Bobot Nilai = </label>
        <input type="number" name="bobot_ut" min="0" max="100"> <br>
        <br>

        <label for="uas"> Nilai UAS = </label>
        <input type="number" name="uas" min="1" max="100"> <br>
        <label for="bobot_ua"> Bobot Nilai = </label>
        <input type="number" name="bobot_ua" min="0" max="100"> <br>
        <br>

        <input type="submit" name="submit"><br><br><br>
        
        <?php
            if(isset($_POST['submit'])) {
                $nilai_tugas = $_POST['tugas'];
                $nilai_uts = $_POST['uts'];
                $nilai_uas = $_POST['uas'];
                $bobot_tugas = $_POST['bobot_t'];
                $bobot_uts = $_POST['bobot_ut'];
                $bobot_uas = $_POST['bobot_ua'];
                $total_bobot = $bobot_tugas + $bobot_uts + $bobot_uas;

                if ($total_bobot >= 1 && $total_bobot < 100) {
                    echo "Total bobot yang Anda input kurang dari 100%, silahkan lakukan input yang sesuai!";
                }

                else {

                    if($total_bobot == 0){
                        $rata_nilai = ($nilai_tugas + $nilai_uas + $nilai_uts) / 3;
                    }

                    else {
                        $a = $nilai_tugas * $bobot_tugas / 100;
                        $b = $nilai_uts * $bobot_uts / 100;
                        $c = $nilai_uas * $bobot_uas / 100;
                        $rata_nilai = $a + $b + $c;
                    }
                    
                    echo "Nilai Akhir Anda = " . $rata_nilai . "<br>";

                    if($rata_nilai >= 80){
                        echo "Selamat, " .  $_POST['nama'] . " dengan NIM " . $_POST['nim'] . "<br>";
                        echo "Anda dinyatakan lulus dengan predikat A !!!";
                    }

                    elseif($rata_nilai >= 70){
                        echo "Selamat, " .  $_POST['nama'] . " dengan NIM " . $_POST['nim'] . "<br>";
                        echo "Anda dinyatakan lulus dengan predikat B !!!";
                    }

                    elseif($rata_nilai >= 60){
                        echo "Selamat, " .  $_POST['nama'] . " dengan NIM " . $_POST['nim'] . "<br>";
                        echo "Anda dinyatakan lulus dengan predikat C !!!";
                    }

                    else{
                        echo "Halo, " .  $_POST['nama'] . " dengan NIM " . $_POST['nim'] . "<br>";
                        echo "Maaf, sepertinya Anda belum lulus :)";
                    }
                }
            }
        ?>
        
    </form>
</body>
</html>

