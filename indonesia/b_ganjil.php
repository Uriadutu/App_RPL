<?php 
include '../koneksilogin.php';
if(in_array('siswa', $_SESSION['admin_akses'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../beranda.css">
    <title>Document</title>
</head>
<style>
    body {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        
    }
    .judulnya {
        width : 100%;
        padding : 40px 50px 0;
    }
    .judulnya p{
        color : #690CC6;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 30px;

    }
    .isi {
        display : flex;

    }
    .mata {
        display : flex;
        /* justify-content: space-between; */
        gap : 30px;
        align-items : center;
        margin : 20px 0;
    }
    .flex a {
        margin : 0;
        text-decoration : none;
        color : #690CC6;
    }
    .flex a button {
        padding : 4px 10px;
        color : white;
        border : 1px solid black;
        background : #690CC6;
    }
    .in {
        display : flex ;
        justify-content : space-between;
        margin :70px 50px 0;
    }
    #pilihan {
        padding : 4px 10px;
    }
</style>
<body>
    <div class="isi">
        <div class="navbar">
        <?php if(in_array("guru", $_SESSION['admin_akses'])) { 
        include "../koneksi.php"; 
        include "nav.php";
        ?>
        
            
        </div>
        <div class="judulnya">
            <p>Bahasa Indonesia</p>
            <div class="mata">
                <div class="flex">
                    <a href="../pilihmapel.php"><button>Kembali</button></a>
                </div>
                <div class="drop">
                    <?php include "../mapel.php"; ?>
                </div>
                <div class="semester">
                    <p1>Semester :</p1>
                    <select id="pilihan">
                        <!-- <option value="" name=""></option> -->
                        <option value="ganjil" name="ganjil">Ganjil</option>
                        <option value="genap" name="ganjil">Genap</option>
                    </select>
                </div>
                
            </div>
            <div class="in">
                <h3>Daftar Murid Semester Ganjil</h3>
                <div class="flex" style = "display : flex; align-items:center; gap : 10px;">
                            <h3>Menginput semua nilai :</h3>
                            <a href="semuanilai_a_ganjil.php"><button class="putih">Input Nilai</button></a>
                        </div>

            </div>
            <div id="tampilan-ganjil">
            <!-- Tampilan saat pilihan Ganjil dipilih -->
            
                <?php include "tabel_ganjil.php"; ?>
                
            </div>
            <div id="tampilan-genap" style="display: none;">
            <!-- Tampilan saat pilihan Genap dipilih -->
                <h2>Tampilan Genap</h2>
                <p>Ini adalah tampilan saat pilihan Genap dipilih.</p>
            </div>
        </div>
    </div>
    
    
    <?php } ?>
<script>
    var select = document.getElementById("pilihan");
    var tampilanGanjil = document.getElementById("tampilan-ganjil");
    var tampilanGenap = document.getElementById("tampilan-genap");

    select.addEventListener("change", function() {
        if (select.value === "ganjil") {
            window.location.href = "b_ganjil.php";
        } else if (select.value === "genap") {
            window.location.href = "b_genap.php";
        }
    });
</script>
</body>
</html>

<?php } ?>

