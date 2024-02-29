<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
     <link rel="stylesheet" href="../beranda.css">
    <link rel="shortcut icon" href="./image/Logo Sistem Informasi Akademik.png" type="image/x-icon">
</head>
<body>
      <?php include "a_genap.php" ?>
      <div class="pop">
        <div class="up">
            <form method="POST">
                <div class="balik">
                    <a href="a_genap.php">Kembali</a>
                    <button type="submit" name="proses">Simpan</button>
                </div>
    
                <table>
                    <tr>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai Keterampilan</th>
                        <th>Nilai Teori</th>
                        <th>Nilai Akhir</th>
                    </tr>
                    <?php
include "../koneksi.php";
$no = 1;



$coba = mysqli_query($koneksi, "SELECT * FROM agama");
$ambildata = mysqli_query($koneksi, "SELECT * FROM siswa");

while ($genap = mysqli_fetch_array($coba)) {
    if ($tampil = mysqli_fetch_array($ambildata)) {
        $nilaitugas = $genap['n_tgs'];
        $nilaiket = $genap['n_ket'];
        $nilaiteo = $genap['n_teo'];
        $nilaiAkhir = round(($nilaitugas + $nilaiket + $nilaiteo) / 3, 1);

        echo "
        <tr>
            <td>{$genap['NISN']}</td>
            <td>{$tampil['Nama_siswa']}</td>
            <td>{$tampil['Kelas']}</td>
            <td><input type='text' id='' name='n_tgs' value='$nilaitugas'></td>
            <td><input type='text' id='' name='n_ket' value='$nilaiket'></td>
            <td><input type='text' id='' name='n_teo' value='$nilaiteo'></td>
            <td><h3 id=''>$nilaiAkhir</h3></td>
        </tr>
        ";
        $no++;
    }
}

?>

                </table>
            </form>
        </div>

      </div>
<?php
include "../koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update agama set
    n_tgs = '$_POST[n_tgs]',
    n_ket = '$_POST[n_ket]',
    n_teo = '$_POST[n_teo]'
    where id_agama = '$idAgama'");

    echo "<meta http-equiv=refresh content=1;URL=a_genap.php>";
}
?>

</body>
</html>
<style>
    input {
        width : 140px;
    }
    .pop {
        display : inline-block;
        padding :20px 10px;
        /* height: 140px; */
        position: fixed;
        top : 200px;
        left : 230px;
        background : white;
        border : 1px solid black;
    }
    .up {
        
        display : flex;
        justify-content: center;
    }
    .balik a {
        border: 1px solid black;
        text-decoration: none;
        color :  white;
        padding : 0 10px;
        background: #690CC6;
        transition : .5s;
    }
    .balik a:hover {
        border: 1px solid black;
        text-decoration: none;
        color :  white;
        padding : 0 10px;
        background: #942afd;
    }
    .balik button {
        background :#0cda0c;
        border : 1px solid black;
        padding : 0 10px;
        color : white;
        transition : .5s;
    }
    .balik button:hover {
        background :#66f366;
        border : 1px solid black;
        padding : 0 10px;
        color : white;
    }
    .balik {
        display : flex;
        gap : 20px;
        background : white;
        width : 62rem;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
    }
    tr th{
        border : 1px solid black;
    }
    tr td{
        border : 1px solid black;
    }
</style>