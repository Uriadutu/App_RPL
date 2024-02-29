<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="pembungkus">
                <div class="logo_apk">
                <img src="./image/Logo_SIM.png">
                </div>
                   <div class="kotak">
                       <h1></h1>
                   </div>
               <nav>
                   <li><a href="../beranda.php">Beranda</a></li>
                    <?php if(in_array("guru", $_SESSION['admin_akses'])) { ?>
                   <li><a href="../InputBiodataGuru.php">Biodata Guru</a></li>
                   <?php } ?>
                   <li><a href="../InputBiodataSiswa.php">Biodata Siswa</a></li>
                   <li><a href="../DaftarSiswa.php">Daftar Siswa</a></li>
                   <?php if(in_array("guru", $_SESSION['admin_akses'])) { ?>
                   <li><a href="../DaftarGuru.php">Daftar Guru</a></li>
                   <?php } ?>
                   <li><a href="../pilihmapel.php">Nilai</a></li>
                   <ul>
                </ul>
                  
               </nav>
               <div class="log">
                   <a href="Login.php">Log Out</a>
               </div>
</section>

<style>
    nav li {
        list-style: none;
        margin-top: 50px;
    }
    li a {
        text-decoration : none;
        color : black;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        transition : .4s;
    }
    li a:hover{
            background-color: #690CC6;
            width: 40px;
            height: 30px;
            padding: 3px;
            color: white;
        }
    
</style>
    
</body>
</html>

