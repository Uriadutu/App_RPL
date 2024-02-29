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
    <title>Nilai</title>
    <link rel="stylesheet" href="beranda.css">
    <link rel="shortcut icon" href="./image/Logo Sistem Informasi Akademik.png" type="image/x-icon">
    <style>
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
    .btn {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding : 25px 45px;
    font-size : 20px;
    width : 200px;
    }
    .judul p {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin: 50px 30px;
    font-size: 25px;
    color: #690CC6;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 
    margin-left:40px; 
    }
    .judulku {
        padding : 0 40px;
    }
    .judul {
      width : 70%;
    }
    .mapel {
      margin-left : 50px;
    }

</style>
</head>
<body>
    <div class="navbar">
        <nav>
            <?php include 'nav.php'; ?>
        </nav>
        <div class="judul">
            <p>Penilaian</p>
            <?php
            include "koneksi.php";

            $ambil = mysqli_query($koneksi, "select * from siswa");

            $data = mysqli_fetch_array($ambil);

            echo "
            <div class='mapel'>
            <a href='./agama/a_ganjil.php'><button class='btn' id='btn' onclick='sejarah()'>Agama</button></a> 
            <a href='sejarah.php'><button class='btn' id='btn' onclick='sejarah()'>Sejarah</button></a>
            <a href='matematika.php'><button class='btn' id='btn' onclick='sejarah()'>Matematika</button></a>
            <a href='ekonomi.php'><button class='btn' id='btn' onclick='sejarah()'>Ekonomi</button></a>
            <a href='sosiologi.php'><button class='btn' id='btn' onclick='sejarah()'>Sosiologi</button></a>
            <a href='sejarah_pm.php'><button class='btn' id='btn' onclick='sejarah()'>Sejarah(PM)</button></a>
            <a href='./indonesia/b_ganjil.php'><button class='btn' id='btn' onclick='sejarah()'>B.Indonesia</button></a>
            <a href='b_inggris.php?Tahun=$data[Tahun]'><button class='btn' id='btn' onclick='sejarah()'>B.Inggris</button></a>
            
          </div>
            ";
          ?>
        </div>
</body>
</html>

<?php } ?>