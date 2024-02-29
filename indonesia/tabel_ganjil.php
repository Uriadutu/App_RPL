<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
    <table>
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
        include "../koneksi.php";
        $no = 1;
        $ambildata = mysqli_query($koneksi, "SELECT * FROM siswa");
        $coba = mysqli_query($koneksi, "SELECT * FROM b_indo");
        while ($tampil = mysqli_fetch_array($ambildata)) {
            $genap = mysqli_fetch_array($coba);
            $nilaiTugas = $genap['n_tgs'];
            $nilaiKeterampilan = $genap['n_ket'];
            $nilaiTeori = $genap['n_teo'];

            
            $nilaiAkhir = round(($nilaiTugas + $nilaiKeterampilan + $nilaiTeori) / 3);

            $nilaiAkhirFormatted = number_format($nilaiAkhir, 1);
        if ($nilaiAkhir < 65) {
                echo "
                <tr>
                    <td><input type='checkbox' disabled></td>
                    <td>$no</td>
                    <td>$genap[NISN]</td>
                    <td>$tampil[Nama_siswa]</td>
                    <td>$tampil[Kelas]</td>
                    <td>$tampil[Tahun]</td>
                    <td id='tugas'>$nilaiTugas</td>
                    <td id='keter'>$nilaiKeterampilan</td>
                    <td id='teori'>$nilaiTeori</td>
                    <td><h4 id='nilai$no' style='color: red;'>$nilaiAkhirFormatted</h4></td>
                    <td><label><a href='nilaibin.php?NISN=$tampil[NISN]'><img src='../image/pensil.png'> </label></a>
                    
                    </td>
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
                    <td><label><a href='nilaibin.php?id=$genap[id_indo] NISN=$tampil[NISN]'><img src='../image/pensil.png'> </label></a>
                <tr>
                ";
            }
            $no++;
        }
        ?>
    </table>
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
</body>
</html>
