<?php 
if(in_array('siswa', $_SESSION['admin_akses'])){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="beranda.css">
    <link rel="shortcut icon" href="./image/Logo Sistem Informasi Akademik.png" type="image/x-icon">
    <style>
        tr th {
            padding : 10px;
        }
          .judul p {
    font-size: 100px;
    color: #690CC6;
    margin-top: 40px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin-top: 200px;
    margin-left:140px;
  }
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
        .kotak {
    padding: 0 0px 20px;
    background: #690CC6;
    text-align: center;
    margin :0;
  }
  .pembungkus {
    /* display: inline-block; */
    width: 210px;
    background: white;

  }
  .logo_apk img {
    width: 180px;
    height: 100px;  /* bisa atur terserah dp 30px ini menyesuaikan */
  }
    </style>
</head>
<body>
    <div class="dafsiswa">
            <div class="judul">
            </div>
        <main>

            <table border="1">
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th colspan="3">Absen</th>
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
                     <td><a href='presensi.php?NISN=$tampil[NISN]'> Input </td>
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

<?php } ?>