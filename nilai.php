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
</style>
</head>
<body>
    <div class="navbar">
        <?php if(in_array("guru", $_SESSION['admin_akses'])) { ?>
            <div class="judul">
            <p>Sejarah</p>
            
            <div class="nama">
                
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
include "koneksi.php";
$no = 1;
$ambildata = mysqli_query($koneksi, "SELECT * FROM siswa");
while ($tampil = mysqli_fetch_array($ambildata)) {
    $nilaiTugas = $tampil['n_tgs'];
    $nilaiKeterampilan = $tampil['n_ket'];
    $nilaiTeori = $tampil['n_teo'];
    $nilaiAkhir = round(($nilaiTugas + $nilaiKeterampilan + $nilaiTeori) / 3);

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
        <td><h4 id='nilai$no'>$nilaiAkhir</h4></td>
        <td><a href='satunilai.php?NISN=$tampil[NISN]'>Edit</td>
    <tr>
    ";

    $no++;
}
?>



            </table>
           
                
            </div>
        </div>
        <?php }?>
        <?php if(in_array("batas", $_SESSION['admin_akses'])) { include "nav.php"; ?>
            <div class="tabel">
                <div class="judul">
                    <p>Sejarah</p>
                </div>
                <div class="siswa">
                <a href="pilihmapel.php"><button>Kembali</button></a>
                <div class="flex">
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
                </tr>
            </div>
            <?php
            include "koneksi.php";
$no = 1;
$ambildata = mysqli_query($koneksi, "SELECT * FROM siswa");
while ($tampil = mysqli_fetch_array($ambildata)) {
    $nilaiTugas = $tampil['n_tgs'];
    $nilaiKeterampilan = $tampil['n_ket'];
    $nilaiTeori = $tampil['n_teo'];
    $nilaiAkhir = round(($nilaiTugas + $nilaiKeterampilan + $nilaiTeori) / 3);

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
        <td><h4 id='nilai$no'>$nilaiAkhir</h4></td>
    <tr>
    ";

    $no++;
}
?>
</table>
            <?php } ?>
</body>
<script>
    <?php
    $no = 1;
    $ambildata = mysqli_query($koneksi, "SELECT * FROM siswa");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        $nilaiAkhirID = "nilai" . $no;
        $ketID = "ket" . $no;
    
    ?>
        var nilaiTugas<?php echo $no; ?> = parseInt(document.getElementById('tugas<?php echo $no; ?>').textContent) || 0;
        var nilaiKeterampilan<?php echo $no; ?> = parseInt(document.getElementById('keter<?php echo $no; ?>').textContent) || 0;
        var nilaiTugas<?php echo $no; ?> = parseInt(document.getElementById('tugas<?php echo $no; ?>').textContent) || 0;
    var nilaiKeterampilan<?php echo $no; ?> = parseInt(document.getElementById('keter<?php echo $no; ?>').textContent) || 0;
    var nilaiTeori<?php echo $no; ?> = parseInt(document.getElementById('teori<?php echo $no; ?>').textContent) || 0;

    var nilaiTotal<?php echo $no; ?> = nilaiTugas<?php echo $no; ?> + nilaiKeterampilan<?php echo $no; ?> + nilaiTeori<?php echo $no; ?>;
    var nilaiAkhir<?php echo $no; ?> = Math.round(nilaiTotal<?php echo $no; ?> / 3);
    document.getElementById('nilai<?php echo $no; ?>').textContent = nilaiAkhir<?php echo $no; ?>;
    <?php
        $no++;
    }
    ?>
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