
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
    <link rel="stylesheet" href="../beranda.css">
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
    
                <table border="1">
                <tr> 
                    <th></th>
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
include "../koneksi.php";
$no = 1;
$ambildata = mysqli_query($koneksi, "SELECT * FROM siswa");
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
            <td><input type='checkbox' disabled></td>
            <td>$no</td>
            <td>$tampil[NISN]</td>
            <td>$tampil[Nama_siswa]</td>
            <td>$tampil[Kelas]</td>
            <td>$tampil[Tahun]</td>
            <td id='tugas'>$nilaiTugas</td>
            <td id='keter'>$nilaiKeterampilan</td>
            <td id='teori'>$nilaiTeori</td>
            <td><h4 id='nilai$no' style='color: red;'>$nilaiAkhirFormatted</h4></td>
            <td><label><a href='nilaiagamagenap.php?id=$tes[id_agama]'><img src='../image/pensil.png'> </label></a>
        <tr>
        ";
    } else {
        echo "
        <tr>
            <td><input type='checkbox' id='myCheckbox'></td>
            <td>$no</td>
            <td>$tampil[NISN]</td>
            <td>$tampil[Nama_siswa]</td>
            <td>$tampil[Kelas]</td>
            <td>$tampil[Tahun]</td>
            <td id='tugas'>$nilaiTugas</td>
            <td id='keter'>$nilaiKeterampilan</td>
            <td id='teori'>$nilaiTeori</td>
            <td><h4 id='nilai$no'>$nilaiAkhirFormatted</h4></td>
            <td><label><a href='nilaiagamagenap.php?id=$tes[id_agama] NISN=$tampil[NISN]'><img src='../image/pensil.png'> </label></a>

        <tr>
        ";
    }

    $no++;
}
?>



            </table>
           
                
            </div>
        </div>
</script>


</html>


<style>
    label img {
        width : 16px;
    }
    table {
        margin: 20px 50px;
        
        border : 1px solid black;
    }
    tr {
    }
    tr th, td{
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
    </style>

</script>