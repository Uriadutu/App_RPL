<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
    // Mendengarkan saat checkbox diklik
    $("input[type='checkbox']").click(function() {
        // Mendapatkan nilai primary key dari checkbox yang diklik
        var primaryKey = $(this).data('primarykey');
        
        // Mengubah URL di pencarian browser dengan menambahkan ID ke parameter
        var url = window.location.href;
        
        // Memeriksa apakah checkbox dicentang
        if ($(this).is(':checked')) {
            var newUrl = updateQueryStringParameter(url, 'id', primaryKey);
        } else {
            var newUrl = removeQueryStringParameter(url, 'id');
        }
        
        // Mengganti URL di pencarian browser
        window.history.replaceState(null, null, newUrl);
    });
});

// Fungsi untuk memperbarui parameter dalam URL pencarian
function updateQueryStringParameter(uri, key, value) {
    var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
    var separator = uri.indexOf('?') !== -1 ? "&" : "?";
    if (uri.match(re)) {
        return uri.replace(re, '$1' + key + "=" + value + '$2');
    } else {
        return uri + separator + key + "=" + value;
    }
}

// Fungsi untuk menghapus parameter dari URL pencarian
function removeQueryStringParameter(uri, key) {
    var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
    var separator = uri.indexOf('?') !== -1 ? "&" : "?";
    if (uri.match(re)) {
        return uri.replace(re, '');
    } else {
        return uri;
    }
}

    </script>
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
        $coba = mysqli_query($koneksi, "SELECT * FROM agama");
        while ($tampil = mysqli_fetch_array($ambildata)) {
            $genap = mysqli_fetch_array($coba);
            $nilaiTugas = $tampil['n_tugas'];
            $nilaiKeterampilan = $tampil['n_ket'];
            $nilaiTeori = $tampil['n_teori'];

            
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
                    <td><label><a href='nilaiagama.php?NISN=$tampil[NISN]'><img src='../image/pensil.png'> </label></a>
                    
                    </td>
                <tr>
                ";
            } else {
                echo "
                <tr>
                    <td><input type='checkbox' id='myCheckbox' data-primarykey='{$tampil['NISN']}'></td>
                    <td>$no</td>
                    <td>$tampil[NISN]</td>
                    <td>$tampil[Nama_siswa]</td>
                    <td>$tampil[Kelas]</td>
                    <td>$tampil[Tahun]</td>
                    <td id='tugas'>$nilaiTugas</td>
                    <td id='keter'>$nilaiKeterampilan</td>
                    <td id='teori'>$nilaiTeori</td>
                    <td><h4 id='nilai$no'>$nilaiAkhirFormatted</h4></td>
                    <td><label><a href='nilaiagama.php?NISN=$tampil[NISN]'><img src='../image/pensil.png'> </label></a>
                <tr>
                ";
            }
            $no++;
        }
        ?>
    </table>
    <script>
  var checkbox = document.getElementById('myCheckbox');
  var div = document.getElementById('myDiv');

  checkbox.addEventListener('change', function() {
    if (checkbox.checked) {
      div.style.display = 'block'; // Tampilkan div saat checkbox dicentang
    } else {
      div.style.display = 'none'; // Sembunyikan div saat checkbox di-uncheck
    }
  });
</script>
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
