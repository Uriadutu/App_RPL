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
    <title>Input Biodata Siswa</title>
    <link rel="stylesheet" href="InputBiodataSiswa.css">
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
                <p>Biodata Siswa</p>
            </div>
        
        <div class="inputDataSiswa">
            <form action="" method="post">

                <label for="NISN">NISN : </label>
                <input type="text" style="width: 250px; margin-left: 135px;" name="NISN" id="NISN">
                <br>

                <label for="Nama Siswa">Nama Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 90px;" name="Nama_siswa" id="Nama_siswa">
                <br>

                <label for="Kelas">Kelas : </label>
                <input type="text" style="width: 250px; margin-left: 135px;" name="Kelas" id="Kelas">
                <br>

                <label for="Tahun">Tahun : </label>
                <input type="text" style="width: 250px; margin-left: 133px;" name="Tahun" id="Tahun">
                <br>

                <label for="Jenis Kelamin Siswa">Jenis Kelamin Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 40px;" name="Jenis_kelamin_siswa" id="Jenis_kelamin_siswa">
                <br>

                <label for="Tempat Lahir Siswa">Tempat Lahir Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 45px;" name="Tempat_lahir_siswa" id="Tempat_lahir_siswa">
                <br>

                <label for="Tanggal Lahir Siswa">Tanggal Lahir Siswa : </label>
                <input type="date" style="width: 250px; margin-left: 43px;" name="Tanggal_lahir_siswa" id="Tanggal_lahir_siswa">
                <br>

                <label for="Anak Keberapa">Anak Keberapa : </label>
                <input type="text" style="width: 250px; margin-left: 73px;" name="Anak_ke" id="Anak_ke">
                <br>

                <label for="Nomor HP Siswa">Nomor HP Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 63px;" name="Nomor_hp_siswa" id="Nomor_hp_siswa">
                <br>

                <label for="Email Siswa">Email Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 93px;" name="Email_siswa" id="Email_siswa">
                <br>

                <label for="Alamat Siswa">Alamat Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 83px;"name="Alamat_siswa" id="Alamat_siswa">
                <br>

                <label for="Tahun Masuk Siswa">Tahun Masuk Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 45px;" name="Tahun_masuk_siswa" id="Tahun_masuk_siswa">
                <br>

                <label for="Asal Sekolah">Asal Sekolah : </label>
                <input type="text" style="width: 250px; margin-left: 88px;" name="Asal_sekolah_SMP" id="Asal_sekolah_SMP">
                <br>

                <p style="font-size: 20px; text-decoration: center; margin-left: 250px; margin-top: 20px;">Data Orangtua</p>

                <label for="NIK Ayah">NIK Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 108px;" name="NIK_ayah" id="NIK_ayah">
                <br>

                <label for="Nama Ayah">Nama Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 98px;" name="Nama_ayah" id="Nama Ayah">
                <br>

                <label for="Pendidikan Ayah">Pendidikan Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 63px;" name="Pendidikan_ayah" id="Pendidikan_ayah">
                <br>

                <label for="Pekerjaan Ibu">Pekerjaan Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 70px;" name="Pekerjaan_ayah" id="Pekerjaan_ayah">
                <br>

                <label for="Penghasilan Ibu">Penghasilan Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 55px;" name="Penghasilan_ayah" id="Penghasilan_ayah">
                <br>

                <label for="Nomor HP Ayah">Nomor HP Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 63px;" name="Nomor_hp_ayah" id="Nomor_hp_ayah">
                <br>

                <label for="Email Ayah">Email Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 95px;" name="Email_ayah" id="Email_ayah">
                <br>
                
                <label for="NIK Ibu">NIK Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 115px;" name="NIK_ibu" id="NIK_ibu">
                <br>

                <label for="Nama Ibu">Nama Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 105px;" name="Nama_ibu" id="Nama_ibu">
                <br>

                <label for="Pendidikan Ibu">Pendidikan Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 70px;" name="Pendidikan_ibu" id="Pendidikan_ibu">
                <br>

                <label for="Pekerjaan Ibu">Pekerjaan Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 78px;" name="Pekerjaan_ibu" id="Pekerjaan_ibu">
                <br>

                <label for="Penghasilan Ibu">Penghasilan Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 63px;" name="Penghasilan_ibu" id="Penghasilan_ibu">
                <br>

                <label for="Nomor HP Ibu">Nomor HP Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 69px;" name="Nomor_hp_ibu" id="Nomor_hp_ibu">
                <br>

                <label for="Email Ibu">Email Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 100px;" name="Email_ibu" id="Email_ibu">
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
    mysqli_query($koneksi,"insert into siswa set
    NISN = '$_POST[NISN]',
    Nama_siswa = '$_POST[Nama_siswa]',
    Kelas = '$_POST[Kelas]',
    Tahun = '$_POST[Tahun]',
    Jenis_kelamin_siswa = '$_POST[Jenis_kelamin_siswa]',
    Tempat_lahir_siswa = '$_POST[Tempat_lahir_siswa]',
    Tanggal_lahir_siswa = '$_POST[Tanggal_lahir_siswa]',
    Anak_ke = '$_POST[Anak_ke]',
    Nomor_hp_siswa = '$_POST[Nomor_hp_siswa]',
    Email_siswa = '$_POST[Email_siswa]',
    Alamat_siswa = '$_POST[Alamat_siswa]',
    Asal_sekolah_SMP = '$_POST[Asal_sekolah_SMP]',
    NIK_ayah = '$_POST[NIK_ayah]',
    Nama_ayah = '$_POST[Nama_ayah]',
    Pendidikan_ayah = '$_POST[Pendidikan_ayah]',
    Pekerjaan_ayah = '$_POST[Pekerjaan_ayah]',
    Penghasilan_ayah = '$_POST[Penghasilan_ayah]',
    Nomor_hp_ayah = '$_POST[Nomor_hp_ayah]',
    Email_ayah = '$_POST[Email_ayah]',
    NIK_ibu = '$_POST[NIK_ibu]',
    Nama_ibu = '$_POST[Nama_ibu]',
    Pendidikan_ibu = '$_POST[Pendidikan_ibu]',
    Pekerjaan_ibu = '$_POST[Pekerjaan_ibu]',
    Penghasilan_ibu = '$_POST[Penghasilan_ibu]',
    Nomor_hp_ibu = '$_POST[Nomor_hp_ibu]',
    Email_ibu = '$_POST[Email_ibu]'");
}
?>


<?php }?>