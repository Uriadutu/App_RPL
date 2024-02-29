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
    <title>Absensi</title>
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
    </style>
</head>
<body>
    <div class="navbar">
        <nav>
            <?php include 'nav.php'; ?>
        </nav>
        <div class="judul">
            <?php include 'absen.php' ?>
        </div>
        
</table>
</body>
</html>
<style>
    tr td {
        padding : 5px 20px;
    }
    tr th {
        padding : 5px 20px;
        
    }
    .judul {
        padding : 50px 90px;
    }

</style>

<?php } ?>