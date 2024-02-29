<?php 
include 'koneksilogin.php';
if(in_array('siswa', $_SESSION['admin_akses'])){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="DaftarSiswa.css">
    <link rel="shortcut icon" href="./image/Logo Sistem Informasi Akademik.png" type="image/x-icon">
    <link rel="section" href="navbar.html">
</head>
<style>
    nav {
    padding: 0;
    min-height: 100vh;
    
    text-align: center;
    /* padding: 0 30px;    */
  }
        ul li a:hover{
            background-color: #690CC6;
            width: 40px;
            height: 30px;
            padding: 3px;
            color: white;
        }
        .judul p {
  font-size: 25px;
  color: #690CC6;
  margin-top: 50px;
  margin-left: 40px;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}
.pembungkus {
    /* display: inline-block; */
    width: 210px;
    background: white;

  }

</style>
<body>
    <div class="dafsiswa">
        <nav>
            <?php include 'nav.php'; ?>
        </nav>
            <div class="judul">
                <p>Daftar Siswa</p>
            </div>
        <main>

            <table border="1">
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Tahun</th>
                    <th>Jenis Kelamin Siswa</th>
                    <th colspan="3">Opsi</th>
                </tr>

                 <?php

            include "koneksi.php";
            $no=1;   
            $ambildata = mysqli_query($koneksi,"select * from siswa");
            while ($tampil = mysqli_fetch_array($ambildata)){
                echo "
                <tr>
                     <td>$no</td>
                     <td>$tampil[NISN]</td>
                     <td>$tampil[Nama_siswa]</td>
                     <td>$tampil[Kelas]</td>
                     <td>$tampil[Tahun]</td>
                     <td>$tampil[Jenis_kelamin_siswa]</td>
                     <td><a href='?kode=$tampil[NISN]'> Hapus </a></td>
                     <td><a href='InputBiodataSiswaEdit.php?NISN=$tampil[NISN]'> Edit </a></td>
                     <td><a href='BiodataPribadiSiswa.php?NISN=$tampil[NISN]'> Lihat </td>
                <tr>";
                $no++;

            }

            ?>


            </table>
            
            <?php
            if(isset($_GET['kode'])){
                mysqli_query($koneksi,"delete from siswa where NISN='$_GET[kode]'");

                
                echo "<meta http-equiv=refresh content=2;URL='DaftarSiswa.php'>";
    
            }
            ?>
        </main>
    </div>
            
</body>
</html>

<?php }?>