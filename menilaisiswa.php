<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
     <link rel="stylesheet" href="beranda.css">
    <link rel="shortcut icon" href="./image/Logo Sistem Informasi Akademik.png" type="image/x-icon">
</head>
<body>
    <div class="kotakku">
        <form method="POST">
            <p>Input & Edit Semua Nilai</p>
    <div class="balik">
                    <a href="nilai.php">Kembali</a>
                    <button type="submit" name="proses">Simpan</button>
                </div>
    
    <table>
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Tahun</th>
            <th>Nilai Tugas</th>
            <th>Nilai Keterampilan</th>
            <th>Nilai Teori</th>
            <th>Nilai Akhir</th>
        </tr>
        <?php
        include "koneksi.php";
        $no = 1;
        $ambildata = mysqli_query($koneksi, "SELECT * FROM siswa");
        while ($tampil = mysqli_fetch_array($ambildata)) {
            $nilai1Id = 'nilai1_' . $tampil['NISN'];
            $nilai2Id = 'nilai2_' . $tampil['NISN'];
            $nilai3Id = 'nilai3_' . $tampil['NISN'];
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[NISN]</td>
                <td>$tampil[Nama_siswa]</td>
                <td>$tampil[Kelas]</td>
                <td>$tampil[Tahun]</td>
                <td><input type='text' id='$nilai1Id' name='n_tgs[$tampil[NISN]]' value='$tampil[n_tgs]'></td>
                <td><input type='text' id='$nilai2Id' name='n_ket[$tampil[NISN]]' value='$tampil[n_ket]'></td>
                <td><input type='text' id='$nilai3Id' name='n_teo[$tampil[NISN]]' value='$tampil[n_teo]'></td>
                <td><h3 id='nilai_$tampil[NISN]'></h3></td>
            </tr>
            ";
            $no++;
        }
        ?>
    </table>
</form>

    </div>


<script>
    <?php
    $ambildata = mysqli_query($koneksi, "SELECT * FROM siswa");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        $nilai1Id = 'nilai1_' . $tampil['NISN'];
        $nilai2Id = 'nilai2_' . $tampil['NISN'];
        $nilai3Id = 'nilai3_' . $tampil['NISN'];
        $nilaiAkhirId = 'nilai_' . $tampil['NISN'];
        echo "
        var inputNilai1_$tampil[NISN] = document.getElementById('$nilai1Id');
        var inputNilai2_$tampil[NISN] = document.getElementById('$nilai2Id');
        var inputNilai3_$tampil[NISN] = document.getElementById('$nilai3Id');
        var nilaiAkhirElement_$tampil[NISN] = document.getElementById('$nilaiAkhirId');

        function updateNilaiAkhir_$tampil[NISN]() {
            var nilai1 = parseInt(inputNilai1_$tampil[NISN].value) || 0;
            var nilai2 = parseInt(inputNilai2_$tampil[NISN].value) || 0;
            var nilai3 = parseInt(inputNilai3_$tampil[NISN].value) || 0;

            var nilaiAkhir = Math.round((nilai1 + nilai2 + nilai3) / 3);
            nilaiAkhirElement_$tampil[NISN].textContent = nilaiAkhir;
        }

        inputNilai1_$tampil[NISN].addEventListener('input', updateNilaiAkhir_$tampil[NISN]);
        inputNilai2_$tampil[NISN].addEventListener('input', updateNilaiAkhir_$tampil[NISN]);
        inputNilai3_$tampil[NISN].addEventListener('input', updateNilaiAkhir_$tampil[NISN]);

        updateNilaiAkhir_$tampil[NISN]();
        ";
    }
    ?>
</script>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "sekolah");

if (isset($_POST['proses'])) {
    foreach ($_POST['n_tugas'] as $nisn => $n_tugas) {
        $n_ket = $_POST['n_ket'][$nisn];
        $n_teori = $_POST['n_teori'][$nisn];

        mysqli_query($koneksi, "UPDATE siswa SET
            n_tugas = '$n_tugas',
            n_ket = '$n_ket',
            n_teori = '$n_teori'
            WHERE NISN = '$nisn'");
    }

    echo "Data telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='nilai.php'>";
}
?>

<style>
    tr th{
        border : 1px solid black;
        padding : 10px;
    }
    tr td{
        border : 1px solid black;
        padding :5px 10px;
        text-align : center;
        margin : 0;
    }
    tr td input {
        background :none;
        border : none;
        padding : 0 20px;
        border-bottom : 1px solid black; 
    }
    .balik a {
        border: 1px solid black;
        text-decoration: none;
        color :  white;
        padding : 0 10px;
        background: #690CC6;
    }
    .balik {
        display : flex;
        gap : 40px;
        
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .balik button {
        background :#0cda0c;
        border : 1px solid black;
        padding : 0 10px;
        color : white;
    }
    .kotakku {
        margin: 50px 50px;
    }
    p {
        margin-bottom : 20px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size : 25px;
        color : #690CC6;
    }
    button {
        padding : 1px 10px;
    }
</style>
</body>
</html>
