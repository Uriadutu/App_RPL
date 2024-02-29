<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from siswa where NISN='$_GET[NISN]'");
$data=mysqli_fetch_array($sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Biodata Siswa</title>
    <!-- <link rel="stylesheet" href="InputBiodataSiswaEdit.css"> -->
    <link rel="shortcut icon" href="./image/Logo Sistem Informasi Akademik.png" type="image/x-icon">
    <!-- <link rel="section" href="navbar.html"> -->
</head>
<style>
    body {
    background-color: #d9d9d9;
  }

  .inbioguru {
      display: flex;
      justify-content: center;
      font-size: 25px;
      color: #690CC6;
      margin: 50px 0;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      /* margin-left: 840px; */
  }

  img {
      height: 150px;
      width: 150px;
      margin-left: 30px;
      border-radius: 50%;
      object-fit: cover;
      background: gray;
  }

  .inputDataSiswa {
    background-color: rgba(105, 12, 198, 20%);
    border-radius: 40px;
    display: flex;
    justify-content: center;
    width: 650px;
    height: 1400px;
  }

  .tombol {
    padding-top: 15px;
    width: 200px;
    margin: auto;
    margin-bottom: 10px;
    margin-top: 50px;
    display: flex;
  }

  .tombol button {
    color: white;
  }

  form input, label {
    margin-left: 100px;
    margin-top: 30px;
  }
  .copyright {
      color: rgb(97, 92, 92);
      display: flex;
      margin-top: 20px;
      justify-content: center;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-size: 13px;
  }


  *{
    margin: 0;
    padding: 0;
  }
  body {
    background: silver;
  }
  section {
    min-height: 100vh;   
    
  }
  .logo_apk {
    display: flex;
    justify-content: center;
    padding: 10px 0;
  }
  .logo_apk img {
    width: 180px;
    height: 100px;  /* bisa atur terserah dp 30px ini menyesuaikan */
  }
  nav {
    min-height: 100vh;
    
    text-align: center;
    padding: 0 30px;   
  }
  .kotak {
    padding: 0 0px 20px;
    background: #690CC6;
    text-align: center;
  }
  .kotak img {
    width: 180px;
    height: 50px; /* bisa atur terserah dp 50px ini menyesuaikan */
    padding: 10px 0;
  }
  .kotak h1 {
    color: white;
    font-size: 12px;
  }
  nav ul {
    margin-top: 40px;
  }
  nav ul li {
    list-style: none;
    padding: 20px 10px;
  }
  nav ul li a{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-decoration: none;
    color: black;
  }
  .log {
    margin-bottom: 0;
    padding: 20px 0px;
    text-align: center;
    background: #690CC6;
    
    
  }
  .log a {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-decoration: none;
    color: white;
    
  }
 
  .bungkus {
    display : flex;
    justify-content: center;
    align-items: center;
  }
  .tombol button a {
        color : black;
        text-decoration: none;
        padding : 0 10px;
        background: ;
    }
</style>
<body>
               </section>
            </nav>
            <div class="inbioguru">
                <p>Edit Data Siswa</p>
            </div>
            <div class="bungkus">
            <div class="inputDataSiswa">
            <form action="" method="post">

                <label for="NISN">NISN : </label>
                <input type="text" style="width: 250px; margin-left: 135px;" name="NISN" id="NISN" value="<?php echo $data['NISN']; ?>">
                <br>

                <label for="Nama Siswa">Nama Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 90px;" name="Nama_siswa" id="Nama_siswa" value="<?php echo $data['Nama_siswa']; ?>">
                <br>

                <label for="Kelas">Kelas : </label>
                <input type="text" style="width: 250px; margin-left: 135px;" name="Kelas" id="Kelas" value="<?php echo $data['Kelas']; ?>">
                <br>

                <label for="Tahun">Tahun : </label>
                <input type="text" style="width: 250px; margin-left: 133px;" name="Tahun" id="Tahun" value="<?php echo $data['Tahun']; ?>">
                <br>

                <label for="Jenis Kelamin Siswa">Jenis Kelamin Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 40px;" name="Jenis_kelamin_siswa" id="Jenis_kelamin_siswa" value="<?php echo $data['Jenis_kelamin_siswa']; ?>">
                <br>

                <label for="Tempat Lahir Siswa">Tempat Lahir Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 45px;" name="Tempat_lahir_siswa" id="Tempat_lahir_siswa" value="<?php echo $data['Tempat_lahir_siswa']; ?>">
                <br>

                <label for="Tanggal Lahir Siswa">Tanggal Lahir Siswa : </label>
                <input type="date" style="width: 250px; margin-left: 43px;" name="Tanggal_lahir_siswa" id="Tanggal_lahir_siswa" value="<?php echo $data['Tanggal_lahir_siswa']; ?>">
                <br>


                <label for="Anak Keberapa">Anak Keberapa : </label>
                <input type="text" style="width: 250px; margin-left: 73px;" name="Anak_ke" id="Anak_ke" value="<?php echo $data['Anak_ke']; ?>">
                <br>

                <label for="Nomor HP Siswa">Nomor HP Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 58px;" name="Nomor_hp_siswa" id="Nomor_hp_siswa" value="<?php echo $data['Nomor_hp_siswa']; ?>">
                <br>

                <label for="Email Siswa">Email Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 88px;" name="Email_siswa" id="Email_siswa" value="<?php echo $data['Email_siswa']; ?>">
                <br>

                <label for="Alamat Siswa">Alamat Siswa : </label>
                <input type="text" style="width: 250px; margin-left: 83px; "name="Alamat_siswa" id="Alamat_siswa" value="<?php echo $data['Alamat_siswa']; ?>">
                <br>

                <label for="Asal Sekolah SMP">Asal Sekolah SMP : </label>
                <input type="text" style="width: 250px; margin-left: 51px;" name="Asal_sekolah_SMP" id="Asal_sekolah_SMP" value="<?php echo $data['Asal_sekolah_SMP']; ?>">
                <br>


                <label for="NIK Ayah">NIK Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 105px;" name="NIK_ayah" id="NIK_ayah" value="<?php echo $data['NIK_ayah']; ?>">
                <br>
                
                <label for="Nama Ayah">Nama Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 95px;" name="Nama_ayah" id="Nama_ayah" value="<?php echo $data['Nama_ayah']; ?>">
                <br>

                <label for="Pendidikan Ayah">Pendidikan Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 60px;" name="Pendidikan_ayah" id="Pendidikan_ayah" value="<?php echo $data['Pendidikan_ayah']; ?>">
                <br>

                <label for="Pekerjaan Ayah">Pekerjaan Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 67px;" name="Pekerjaan_ayah" id="Pekerjaan_ayah" value="<?php echo $data['Pekerjaan_ayah']; ?>">
                <br>

                <label for="Penghasilan Ayah">Penghasilan Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 54px;" name="Penghasilan_ayah" id="Penghasilan_ayah" value="<?php echo $data['Penghasilan_ayah']; ?>">
                <br>

                <label for="Nomor HP Ayah">Nomor HP Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 60px;" name="Nomor_hp_ayah" id="Nomor_hp_ayah" value="<?php echo $data['Nomor_hp_ayah']; ?>">
                <br>

                <label for="Email Ayah">Email Ayah : </label>
                <input type="text" style="width: 250px; margin-left: 90px;" name="Email_ayah" id="Email_ayah" value="<?php echo $data['Email_ayah']; ?>">
                <br>

                <label for="NIK Ibu">NIK Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 110px;" name="NIK_ibu" id="NIK_ibu" value="<?php echo $data['NIK_ibu']; ?>">
                <br>
                
                <label for="Nama Ibu">Nama Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 100px;" name="Nama_ibu" id="Nama_ibu" value="<?php echo $data['Nama_ibu']; ?>">
                <br>

                <label for="Pendidikan Ibu">Pendidikan Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 66px;" name="Pendidikan_ibu" id="Pendidikan_ibu" value="<?php echo $data['Pendidikan_ibu']; ?>">
                <br>

                <label for="Pekerjaan Ibu">Pekerjaan Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 75px;" name="Pekerjaan_ibu" id="Pekerjaan_ibu" value="<?php echo $data['Pekerjaan_ibu']; ?>">
                <br>

                <label for="Penghasilan Ibu">Penghasilan Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 60px;" name="Penghasilan_ibu" id="Penghasilan_ibu" value="<?php echo $data['Penghasilan_ibu']; ?>">
                <br>

                <label for="Nomor HP Ibu">Nomor HP Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 67px;" name="Nomor_hp_ibu" id="Nomor_hp_ibu" value="<?php echo $data['Nomor_hp_ibu']; ?>">
                <br>

                <label for="Email Ibu">Email Ibu : </label>
                <input type="text" style="width: 250px; margin-left: 97px;" name="Email_ibu" id="Email_ibu" value="<?php echo $data['Email_ibu']; ?>">
                <br>
            
        
                <div class="tombol">
                <button><a href="DaftarSiswa.php">Kembali</a></button>
                <button type = "submit" value="Simpan" style="margin-left: 100px; background-color: green; padding: 2px; border: none; padding-left: 15px; padding-right: 15px; padding-top: 7px; padding-bottom: 7px;" name="proses">Simpan</button>
                </div>
            </form>
        </div>
            </div>
 
            <div class="copyright">Copyright 2023 Kelompok 11 RPL</div>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update siswa set
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
    Email_ibu = '$_POST[Email_ibu]'
    where NISN = '$_GET[NISN]'");

    echo "Data Telah Di Ubah";
    echo "<meta http-equiv=refresh content=1;URL='DaftarSiswa.php'>";
}
?>
</body>     
</html>



