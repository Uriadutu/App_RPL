
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
    <link rel="stylesheet" href="../beranda.css">
    <link rel="shortcut icon" href="./image/Logo Sistem Informasi Akademik.png" type="image/x-icon">
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
    include "../koneksi.php";
    $no = 1;
    $query = "SELECT * FROM b_indo bi JOIN siswa s ON bi.NISN = s.NISN WHERE bi.id_indo IN (13, 14, 15)";
    $result = mysqli_query($koneksi, $query);

    while ($row = mysqli_fetch_array($result)) {
        $nilaiTugas = $row['genap_tgs'];
        $nilaiKeterampilan = $row['genap_ket'];
        $nilaiTeori = $row['genap_teo'];
        $nilaiAkhir = round(($nilaiTugas + $nilaiKeterampilan + $nilaiTeori) / 3, 1);

        $nilaiAkhirFormatted = number_format($nilaiAkhir, 1);

        if ($nilaiAkhir < 65) {
            echo "
            <tr>
                <td><input type='checkbox' disabled></td>
                <td>$no</td>
                <td>{$row['NISN']}</td>
                <td>{$row['Nama_siswa']}</td>
                <td>{$row['Kelas']}</td>
                <td>{$row['Tahun']}</td>
                <td>$nilaiTugas</td>
                <td>$nilaiKeterampilan</td>
                <td>$nilaiTeori</td>
                <td><h4 id='nilai$no' style='color: red;'>$nilaiAkhirFormatted</h4></td>
                <td>
                    <label><a href='nilaibin.php?id={$row['id_indo']}&NISN={$row['NISN']}'><img src='../image/pensil.png'></label>
                </td>
            </tr>";
        } else {
            echo "
            <tr>
                <td><input type='checkbox' id='myCheckbox' data-primarykey='{$row['NISN']}'></td>
                <td>$no</td>
                <td>{$row['NISN']}</td>
                <td>{$row['Nama_siswa']}</td>
                <td>{$row['Kelas']}</td>
                <td>{$row['Tahun']}</td>
                <td>$nilaiTugas</td>
                <td>$nilaiKeterampilan</td>
                <td>$nilaiTeori</td>
                <td><h4>$nilaiAkhirFormatted</h4></td>
                <td>
                    <label><a href='nilaibin.php?id={$row['id_indo']}&NISN={$row['NISN']}' onclick='addNewClass(this)'><img src='../image/pensil.png'></a></label>
                </td>
            </tr>";
        }
        $no++;
    }
?>


</table>
<script>
    function addNewClass(element) {
        element.classList.add('new-class');
    }
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




           
                
            </div>
        </div>



</html>


<style>
    .new-class {
    /* Tambahkan gaya CSS untuk kelas baru di sini */
    background-color: yellow;
}
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