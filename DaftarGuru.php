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
    <title>Daftar Guru</title>
    <link rel="stylesheet" href="DaftarGuru.css">
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
            width: 50px;
            margin-top: 50px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* text-align: center; */
            margin-left: 20px;
        }
main {
    padding :0 20px;
    /* display : none; */
    
}
table {
    margin-top: 100px;
}
.judul p {
    width: 500px;
}
.pembungkus {
    /* display: inline-block; */
    width: 210px;
    background: white;

  }
</style>
<body>
    <div class="dafguru">
        <nav>
            <?php include 'nav.php'; ?>
        </nav>
               
            
        <main>
            <div class="judul">
                <p>Daftar Guru</p>
            </div>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin Guru</th>
                    <th>Tempat Lahir Guru</th>
                    <th>Tanggal Lahir Guru</th>
                    <th>Nomor HP Guru</th>
                    <th>Email Guru</th>
                    <th>Alamat Guru</th>
                    <th>Tahun Aktif</th>
                    <th>Jabatan</th>
                    <?php if(in_array("guru", $_SESSION['admin_akses'])) { ?>
                    <th colspan="2">Opsi</th>
                    <?php } ?>
                </tr>
            
            <?php

            include "koneksi.php";
            
            $no=1;   
            $ambildata = mysqli_query($koneksi,"select * from guru");
            while ($tampil = mysqli_fetch_array($ambildata)){
                echo "
                <tr>
                     <td>$no</td>
                     <td>$tampil[NIP]</td>
                     <td>$tampil[Nama_guru]</td>
                     <td>$tampil[Jenis_kelamin_guru]</td>
                     <td>$tampil[Tempat_lahir_guru]</td>
                     <td>$tampil[Tanggal_lahir_guru]</td>
                     <td>$tampil[Nomor_hp_guru]</td>
                     <td>$tampil[Email_guru]</td>
                     <td>$tampil[Alamat_guru]</td>
                     <td>$tampil[Tahun_aktif]</td>
                     <td>$tampil[Jabatan]</td>
                     <td><a href='?kode=$tampil[NIP]'> Hapus </a></td>
        
                     <td><a href='InputBiodataGuruEdit.php?NIP=$tampil[NIP]'> Edit </a></td>
                ";

                $no++;

            }

            ?>
            </table>
        </main>
    </div>
            
</body>
</html>

<?php
if(isset($_GET['kode'])){

mysqli_query($koneksi,"delete from guru where NIP='$_GET[kode]'");

echo "<meta http-equiv=refresh content=2;URL=DaftarGuru.php>";

}
?>
<?php }?>