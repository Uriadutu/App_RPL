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
    .kmb {
        display : none;
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
  .hayolo {
    display : flex;
    align-items :center;
  }
  .tes1 p{
    color: black ;
    font-size : 20px;

  }
</style>
</head>
<body>
    <div class="navbar">
        <?php if(in_array("guru", $_SESSION['admin_akses'])) {
            
            include "nav.php" ?>
            <div class="judul">
            <p>Agama</p>
            <div class="hayolo">
            <?php include "mapel.php"; 
            ?>
        <?php

        ?>
            <div class="tes1" style="margin :20px 50px; display: flex; gap: 10px; align-items: center;">
              <p1>Semester</p1>
              <select id="pilihan">
                <option value="" name=""></option>
                <option value="ganjil" name="ganjil">Ganjil</option>
                <option value="genap" name="ganjil">Genap</option>
              </select>
            </div>
            </div>
            
            <div class="nama">
                
            <div id="tampilan-ganjil" style="display: none;">
  <!-- Tampilan saat pilihan Ganjil dipilih -->
  <h2>Tampilan Ganjil</h2>
  <p>Ini adalah tampilan saat pilihan Ganjil dipilih.</p>
</div>

<div id="tampilan-genap" style="display: none;">
  <!-- Tampilan saat pilihan Genap dipilih -->
  <h2>Tampilan Genap</h2>
  <p>Ini adalah tampilan saat pilihan Genap dipilih.</p>
</div>
<script>
  var select = document.getElementById("pilihan");
  var tampilanGanjil = document.getElementById("tampilan-ganjil");
  var tampilanGenap = document.getElementById("tampilan-genap");

  select.addEventListener("change", function() {
    if (select.value === "ganjil") {
      tampilanGanjil.style.display = "block";
      tampilanGenap.style.display = "none";
    } else if (select.value === "genap") {
      tampilanGanjil.style.display = "none";
      tampilanGenap.style.display = "block";
    }
  });
</script>

<!-- batas -->
                <div class="siswa">
                    <h3>Daftar Murid</h3>                    
                </div>
                    
                    
                </div>
                <div class="siswa">
                    <a href="pilihmapel.php"><button>Kembali</button></a>
                        <div class="flex" style = "display : flex; align-items:center; gap : 10px;">
                            <h3>Menginput semua nilai :</h3>
                            <a href="menilaisiswa.php"><button class="putih">Input Nilai</button></a>
                        </div>
                </div>
                <table border="1">
                <tr> 
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Tahun</th>
                    <th>Nilai Tugas</th>
                    <th>Nilai Keterampilan</th>
                    <th>Nilai Teori</th>
                    <th>Nilai Akhir</th>
                    <th>Opsi</th>
                </tr>

                <?php
                // include "tes.php";
include "koneksi.php";
$no = 1;
$ambildata = mysqli_query($koneksi, "SELECT * FROM siswa where Tanggal='$_GET[Tanggal]'");
$coba = mysqli_query($koneksi, "SELECT * FROM agama");
while ($tampil = mysqli_fetch_array($ambildata)) {
    $tes = mysqli_fetch_array($coba);
    $nilaiTugas = $tes['n_tgs'];
    $nilaiKeterampilan = $tes['n_ket'];
    $nilaiTeori = $tes['n_teo'];
    $nilaiAkhir = round(($nilaiTugas + $nilaiKeterampilan + $nilaiTeori) / 3);

    $nilaiAkhirFormatted = number_format($nilaiAkhir, 1);
   if ($nilaiAkhir < 65) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[NISN]</td>
            <td>$tampil[Nama_siswa]</td>
            <td>$tampil[Kelas]</td>
            <td>$tampil[Tahun]</td>
            <td id='tugas'>$nilaiTugas</td>
            <td id='keter'>$nilaiKeterampilan</td>
            <td id='teori'>$nilaiTeori</td>
            <td><h4 id='nilai$no' style='color: red;'>$nilaiAkhirFormatted</h4></td>
            <td><a href='satunilai.php?NISN=$tampil[NISN]'>Edit</td>
        <tr>
        ";
    } else {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[NISN]</td>
            <td>$tampil[Nama_siswa]</td>
            <td>$tampil[Kelas]</td>
            <td>$tampil[Tahun]</td>
            <td id='tugas'>$nilaiTugas</td>
            <td id='keter'>$nilaiKeterampilan</td>
            <td id='teori'>$nilaiTeori</td>
            <td><h4 id='nilai$no'>$nilaiAkhirFormatted</h4></td>
            <td><a href='satunilai.php?NISN=$tampil[NISN]'>Edit</td>
        <tr>
        ";
    }

    $no++;
}
?>



            </table>
           
                
            </div>
        </div>
        <?php }?>
</script>


</html>


<style> 
    .sejarah {
    display : none;
    }
    .btn {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding : 25px 45px;
    font-size : 20px;
    }
    .judul p {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin: 50px 30px;
    font-size: 25px;
    color: #690CC6;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 
    margin-left:40px; 
    }
    .siswa {
        margin : 20px 50px;
        display: flex;
        /* gap : 70px; */
        justify-content: space-between;
    }
    table {
        margin: 20px 50px;
        
    }
    .navbar {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 
    }
    tr th{
        padding: 10px 20px;
        border : 1px solid black;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 
    }
    tr td {
        text-align : center;
        padding : 5px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 
    }
    tr td a {
        text-decoration : none;
        color : #690CC6;
    }
    .nama a {
        margin : 0 50px;
        margin-bottom : 50px;
        
        
    }
    .siswa a button {
        padding : 4px 10px;
        color : white;
        border : 1px solid black;
        background : #690CC6;
    }
    .siswa a button.putih {
        background : #888;
    }
    .flex a {
        margin : 0;
        text-decoration : none;
        color : #690CC6;
    }

</style>

</script>
<?php } ?>