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
    <title>Input Biodata Guru</title>
    <link rel="stylesheet" href="InputBiodataGuru.css">
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
        .inbioguru p {
  font-size: 25px;
  color: #690CC6;
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
        <div class="bioguru">
           <nav>
            <?php include 'nav.php'; ?>
        </nav>
            <div class="inbioguru">
                <p>Biodata Guru</p>
            </div>

            <div class="inputData">

                <form action="" method="post">

                    <label for="NIP">NIP : </label>
                    <input type="text" style="width: 250px; margin-left: 150px;" name="NIP" id="NIP">
                    <br>

                    <label for="Nama Guru">Nama Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 100px;" name="Nama_guru" id="Nama_guru">
                    <br>

                    <label for="Jenis Kelamin Guru">Jenis Kelamin Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 47px;" name="Jenis_kelamin_guru" id="Jenis_kelamin_guru">
                    <br>

                    <label for="Tempat Lahir Guru">Tempat Lahir Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 52px;" name="Tempat_lahir_guru" id="Tempat_lahir_guru">
                    <br>

                    <label for="Tanggal Lahir Guru">Tanggal Lahir Guru : </label>
                    <input type="date" style="width: 250px; margin-left: 47px;" name="Tanggal_lahir_guru" id="Tanggal_lahir_guru">
                    <br>

                    <label for="Nomor HP Guru">Nomor HP Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 67px;" name="Nomor_hp_guru" id="Nomor_hp_guru">
                    <br>

                    <label for="Email">Email Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 98px;" name="Email_guru" id="Email_guru">
                    <br>
                    <br>

                    <label for="Alamat Guru">Alamat Guru : </label>
                    <textarea style="width: 250px; height: 18px; margin-left: 89px;"name="Alamat_guru" id="Alamat_guru">
                    </textarea>
                    <br>

                    <label for="Tahun Aktif">Tahun Aktif : </label>
                    <input type="text" style="width: 250px; margin-left: 95px;" name="Tahun_aktif" id="Tahun_aktif">
                    <br>

                    <label for="Jabatan">Jabatan : </label>
                    <input type="text" style="width: 250px; margin-left: 124px;" name="Jabatan" id="Jabatan">
                    <br>

                    <div class="tombol">
                        <button type = "submit" value="Simpan" style="margin-left: 100px; background-color: green; padding: 2px; border: none; padding-left: 15px; padding-right: 15px; padding-top: 7px; padding-bottom: 7px;" name="proses">Simpan</button>
                    </div>
                </form>
            </div>
                

              
        </div>
            <div class="copyright">Copyright 2023 Kelompok 11 RPL</div>
</body>
</html>


<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into guru set
    NIP = '$_POST[NIP]',
    Nama_guru = '$_POST[Nama_guru]',
    Jenis_kelamin_guru = '$_POST[Jenis_kelamin_guru]',
    Tempat_lahir_guru = '$_POST[Tempat_lahir_guru]',
    Tanggal_lahir_guru = '$_POST[Tanggal_lahir_guru]',
    Nomor_hp_guru = '$_POST[Nomor_hp_guru]',
    Email_guru = '$_POST[Email_guru]',
    Alamat_guru = '$_POST[Alamat_guru]',
    Tahun_aktif = '$_POST[Tahun_aktif]',
    Jabatan = '$_POST[Jabatan]'");

   
}
?>

<?php }?>