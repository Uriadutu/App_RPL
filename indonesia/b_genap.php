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
    .dari, .inpuan {
        display : flex;
        gap: 20px;
    }
    .dari input {
        padding : 1px 2px;
        width : 60px;
        font-size : 15px;
    }
    #myInput, #dariKelas {
    text-transform: uppercase;
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
                        <option value="genap" name="ganjil">Genap</option>
                        <option value="ganjil" name="ganjil">Ganjil</option>
                    </select>
                    
                </div>
                <div id="myDiv" style="display: none;">
                    <?php 
                        include "../koneksi.php";
                        $id = isset($_GET['id']) ? $_GET['id'] : '';

                        if (!empty($id)) {
                            $input = mysqli_query($koneksi, "SELECT * FROM siswa WHERE NISN='$id'");
                            $datatampil = mysqli_fetch_array($input);
                        }
                    ?>

                    <div class="inpuan">
                        <div class="dari">
                            <p1>Dari Kelas</p1>
                            <input type="text" id="dariKelas">
                            
                        </div>
                        <form method="POST" action="">
                        <div class="dari">
                            <p1>Ke Kelas</p1>
                            <input type="text" id="myInput" name="Kelas">
                            <button type="submit" value="Simpan" name="proses" id="myButton" style="display: none;" oninput="convertToUppercase(this)">Simpan</button>
                        </div>
                        
                    </div>
                </div>



            </div>
            <div class="in">
                <h3>Daftar Murid Semester Genap</h3>
                <div class="flex" style = "display : flex; align-items:center; gap : 10px;">
                    <h3>Menginput semua nilai :</h3>
                    <a href="semuanilai_a_genap.php"><button class="putih">Input Nilai</button></a>
                </div>

            </div>
            <div id="tampilan-ganjil">
            <!-- Tampilan saat pilihan Ganjil dipilih -->
            
                <?php include "tabel_genap.php"; ?>
                
            </div>
            
        </div>
    </div>
<?php
include "../koneksi.php";

if(isset($_POST['proses'])){
    $kelas = $_POST['Kelas'];

    mysqli_query($koneksi, "UPDATE siswa SET Kelas = '$kelas' WHERE NISN = '$id'");
    echo "Data Telah Diubah";
    echo "<meta http-equiv=refresh content=1;URL='b_genap.php'>";
}
?>

    
    
    <?php } ?>
<script>
    var select = document.getElementById("pilihan");
    var tampilanGanjil = document.getElementById("tampilan-ganjil");
    var tampilanGenap = document.getElementById("tampilan-genap");

    select.addEventListener("change", function() {
        if (select.value === "ganjil") {
            window.location.href = "./b_ganjil.php";
        } else if (select.value === "genap") {
            window.location.href = "./b_genap.php";
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Mendengarkan saat checkbox diklik
        $("input[type='checkbox']").click(function() {
            // Mendapatkan nilai primary key dari checkbox yang diklik
            var primaryKey = $(this).data('primarykey');
            
            // Mengubah nilai dari kelas tujuan
            if ($(this).is(':checked')) {
                // Checkbox dicentang
                $("#keKelas").val(primaryKey);
            } else {
                // Checkbox tidak dicentang
                $("#keKelas").val('');
            }
        });
    });
    const myInput = document.getElementById('myInput');
const myButton = document.getElementById('myButton');

myInput.addEventListener('input', function() {
  // Periksa apakah input memiliki nilai atau tidak
  if (myInput.value !== '') {
    myButton.style.display = 'block'; // Tampilkan tombol jika input memiliki nilai
  } else {
    myButton.style.display = 'none'; // Sembunyikan tombol jika input tidak memiliki nilai
  }
});
function convertToUppercase(element) {
  element.value = element.value.toUpperCase();
}
</script>
</body>
</html>

<?php } ?>

