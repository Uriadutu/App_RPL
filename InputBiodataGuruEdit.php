<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from guru where NIP='$_GET[NIP]'");
$data=mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Biodata Guru</title>
</head>
<body>    
<div class="inbioguru">
                <p>Edit Data Guru</p>
            </div> 
     <div class="bungkus">
     

            <div class="inputData">

                <form action="" method="post">

                    <label for="NIP">NIP : </label>
                    <input type="text" style="width: 250px; margin-left: 150px;" name="NIP" id="NIP" value="<?php echo $data['NIP']; ?>">
                    <br>

                    <label for="Nama Guru">Nama Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 100px;" name="Nama_guru" id="Nama_guru" value="<?php echo $data['Nama_guru']; ?>">
                    <br>

                    <label for="Jenis Kelamin Guru">Jenis Kelamin Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 47px;" name="Jenis_kelamin_guru" id="Jenis_kelamin_guru" value="<?php echo $data['Jenis_kelamin_guru']; ?>">
                    <br>

                    <label for="Tempat Lahir Guru">Tempat Lahir Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 52px;" name="Tempat_lahir_guru" id="Tempat_lahir_guru" value="<?php echo $data['Tempat_lahir_guru']; ?>">
                    <br>

                    <label for="Tanggal Lahir Guru">Tanggal Lahir Guru : </label>
                    <input type="date" style="width: 250px; margin-left: 47px;" name="Tanggal_lahir_guru" id="Tanggal_lahir_guru" value="<?php echo $data['Tanggal_lahir_guru']; ?>">
                    <br>

                    <label for="Nomor HP Guru">Nomor HP Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 67px;" name="Nomor_hp_guru" id="Nomor_hp_guru" value="<?php echo $data['Nomor_hp_guru']; ?>">
                    <br>

                    <label for="Email">Email Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 98px;" name="Email_guru" id="Email_guru" value="<?php echo $data['Email_guru']; ?>">
                    <br>

                    <label for="Alamat Guru">Alamat Guru : </label>
                    <input type="text" style="width: 250px; margin-left: 88px;"name="Alamat_guru" id="Alamat_guru" value="<?php echo $data['Alamat_guru']; ?>">
                    </textarea>
                    <br>

                    <label for="Tahun Aktif">Tahun Aktif : </label>
                    <input type="text" style="width: 250px; margin-left: 95px;" name="Tahun_aktif" id="Tahun_aktif" value="<?php echo $data['Tahun_aktif']; ?>">
                    <br>

                    <label for="Jabatan">Jabatan : </label>
                    <input type="text" style="width: 250px; margin-left: 124px;" name="Jabatan" id="Jabatan" value="<?php echo $data['Jabatan']; ?>">
                    <br>

                    <div class="tombol">
                        <button><a href="DaftarGuru.php">Kembali</a></button>
                        <button type = "submit" value="Simpan" style="margin-left: 100px; background-color: green; padding: 2px; border: none; padding-left: 15px; padding-right: 15px; padding-top: 7px; padding-bottom: 7px;" name="proses">Simpan</button>
                    </div>
                </form>
            </div>
     </div>
    <div class="copyright">Copyright 2023 Kelompok 11 RPL</div>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update guru set
    Nama_guru = '$_POST[Nama_guru]',
    Jenis_kelamin_guru = '$_POST[Jenis_kelamin_guru]',
    Tempat_lahir_guru = '$_POST[Tempat_lahir_guru]',
    Tanggal_lahir_guru = '$_POST[Tanggal_lahir_guru]',
    Nomor_hp_guru = '$_POST[Nomor_hp_guru]',
    Email_guru = '$_POST[Email_guru]',
    Alamat_guru = '$_POST[Alamat_guru]',
    Tahun_aktif = '$_POST[Tahun_aktif]',
    Jabatan = '$_POST[Jabatan]'
    where NIP = '$_GET[NIP]'");

    echo "<meta http-equiv=refresh content=1;URL=DaftarGuru.php>";
}
?>
</body>
</html>



<style>
    .tombol button a {
        color : black;
        text-decoration: none;
        padding : 0 10px;
        background: ;
    }
    .bungkus {
        display: flex;
        justify-content: center;
    }
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
    
}

img {
    height: 150px;
    width: 150px;
    margin-left: 30px;
    border-radius: 50%;
    object-fit: cover;
    background: gray;
}



.inputData {
  background-color: rgba(105, 12, 198, 20%);
  border-radius: 40px;
  display: inline-block;
  padding: 10px 30px;

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


.tombol {
  padding-top: 15px;
  width: 200px;
  margin: auto;
}

.tombol button {
  color: white;
}

form input, label {
  /* margin-left: 100px; */
  margin-top: 30px;
}
.copyright {
    color: rgb(97, 92, 92);
    
    display: flex;
    justify-content: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 13px;
    margin : 10px 0;
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
</style>