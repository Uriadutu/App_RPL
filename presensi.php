<?php include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi</title>
</head>
<body>
    <main>
    <?php include 'absensiswa.php'; ?>
        
        <div class="scrol">
            <div class="pop">
                <p>Presensi</p>
                <div class="up">
                    <form method= "post" action="absensiswa.php" >
                    <div class="balik">
                    </div>
                    <table>
                        <tr>
                            <th colspan="3">Data Siswa</th>
                            <th colspan="32">Tanggal</th>
                            <tr></tr>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                            <th>13</th>
                            <th>14</th>
                            <th>15</th>
                            <th>16</th>
                            <th>17</th>
                            <th>18</th>
                            <th>19</th>
                            <th>20</th>
                            <th>21</th>
                            <th>22</th>
                            <th>23</th>
                            <th>24</th>
                            <th>25</th>
                            <th>26</th>
                            <th>27</th>
                            <th>28</th>
                            <th>29</th>
                            <th>30</th>
                            <th>31</th>
                        </tr>
           
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="text" name="tgl1"></td>
                        <td><input type="text" name="tgl2"></td>
                        <td><input type="text" name="tgl3"></td>
                        <td><input type="text" name="tgl4"></td>
                        <td><input type="text" name="tgl5"></td>
                        <td><input type="text" name="tgl6"></td>
                        <td><input type="text" name="tgl7"></td>
                        <td><input type="text" name="tgl8"></td>
                        <td><input type="text" name="tgl9"></td>
                        <td><input type="text" name="tgl10"></td>
                        <td><input type="text" name="tgl11"></td>
                        <td><input type="text" name="tgl12"></td>
                        <td><input type="text" name="tgl13"></td>
                        <td><input type="text" name="tgl14"></td>
                        <td><input type="text" name="tgl15"></td>
                        <td><input type="text" name="tgl16"></td>
                        <td><input type="text" name="tgl17"></td>
                        <td><input type="text" name="tgl18"></td>
                        <td><input type="text" name="tgl19"></td>
                        <td><input type="text" name="tgl20"></td>
                        <td><input type="text" name="tgl21"></td>
                        <td><input type="text" name="tgl22"></td>
                        <td><input type="text" name="tgl23"></td>
                        <td><input type="text" name="tgl24"></td>
                        <td><input type="text" name="tgl25"></td>
                        <td><input type="text" name="tgl26"></td>
                        <td><input type="text" name="tgl27"></td>
                        <td><input type="text" name="tgl28"></td>
                        <td><input type="text" name="tgl29"></td>
                        <td><input type="text" name="tgl30"></td>
                        <td><input type="text" name="tgl31"></td>
                    </tr>
                    <div class ="jarak">
                        <button><a href="absensiswa.php">Kembali</a></button>
                        <button type="submit" name="simpan" >Simpan</button>
                    </div>
        
                </div>
            </table>
                    </form>
                </div>
            </div>
        </div>
    </main>
<style>
    table {
        
        margin-right:20px;
            width: 100%;
            white-space: nowrap; /* Menghindari pemotongan teks dalam sel tabel */
        }
    .ungu {
        overflow-x: auto;
    }
    .jarak {
        display : flex;
        gap : 20px;
    }
    .jarak button  {
        margin : 0 0 10px;
        background : green;
        padding : 5px 10px;
        border : 1px solid black;
    }
    .jarak button a {
        text-decoration : none;
        color : white;
    }

    .scrol {
        overflow-x :auto;
        width : 100%;
    }
    form {
        display : inline-block ;
        width : 100%;
    }
    .pop p {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin : 0 0 10px;
        font-size : 20px;
    }
    .pop {
        width : 70%;
        overflow-x: auto;
        padding : 10px 30px;
        height: 230px;
        position: fixed;
        top : 20%;
        left : 20%;
        background : white;
        border : 1px solid black;
    }
    .up {
        display : flex;
        justify-content: center;
    }
    .balik a {
        border: 1px solid black;
        text-decoration: none;
        color :  white;
        padding : 0 10px;
        background: #690CC6;
        transition : .5s;
    }
    .balik a:hover {
        border: 1px solid black;
        text-decoration: none;
        color :  white;
        padding : 0 10px;
        background: #942afd;
    }
    .balik button {
        background :#0cda0c;
        border : 1px solid black;
        padding : 0 10px;
        color : white;
        transition : .5s;
    }
    .balik button:hover {
        background :#66f366;
        border : 1px solid black;
        padding : 0 10px;
        color : white;
    }
    .balik {
        display : flex;
        gap : 20px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        
    }
    tr th{
        border : 1px solid black;
    }
    tr td{
        border : 1px solid black;
    }
    tr td input {
        width :60px;
        height : 20px;
    }
</style>
</body>
</html>

<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $tgl1 = mysqli_real_escape_string($koneksi, $_POST['tgl1']);
    $tgl2 = mysqli_real_escape_string($koneksi, $_POST['tgl2']);
    $tgl3 = mysqli_real_escape_string($koneksi, $_POST['tgl3']);
    $tgl4 = mysqli_real_escape_string($koneksi, $_POST['tgl4']);
    $tgl5 = mysqli_real_escape_string($koneksi, $_POST['tgl5']);
    $tgl6 = mysqli_real_escape_string($koneksi, $_POST['tgl6']);
    $tgl7 = mysqli_real_escape_string($koneksi, $_POST['tgl7']);
    $tgl8 = mysqli_real_escape_string($koneksi, $_POST['tgl8']);
    $tgl9 = mysqli_real_escape_string($koneksi, $_POST['tgl9']);
    $tgl10 = mysqli_real_escape_string($koneksi, $_POST['tgl10']);
    $tgl11 = mysqli_real_escape_string($koneksi, $_POST['tgl11']);
    $tgl12 = mysqli_real_escape_string($koneksi, $_POST['tgl12']);
    $tgl13 = mysqli_real_escape_string($koneksi, $_POST['tgl13']);
    $tgl14 = mysqli_real_escape_string($koneksi, $_POST['tgl14']);
    $tgl15 = mysqli_real_escape_string($koneksi, $_POST['tgl15']);
    $tgl16 = mysqli_real_escape_string($koneksi, $_POST['tgl16']);
    $tgl17 = mysqli_real_escape_string($koneksi, $_POST['tgl17']);
    $tgl18 = mysqli_real_escape_string($koneksi, $_POST['tgl18']);
    $tgl19 = mysqli_real_escape_string($koneksi, $_POST['tgl19']);
    $tgl20 = mysqli_real_escape_string($koneksi, $_POST['tgl20']);
    $tgl21 = mysqli_real_escape_string($koneksi, $_POST['tgl21']);
    $tgl22 = mysqli_real_escape_string($koneksi, $_POST['tgl22']);
    $tgl23 = mysqli_real_escape_string($koneksi, $_POST['tgl23']);
    $tgl24 = mysqli_real_escape_string($koneksi, $_POST['tgl24']);
    $tgl25 = mysqli_real_escape_string($koneksi, $_POST['tgl25']);
    $tgl26 = mysqli_real_escape_string($koneksi, $_POST['tgl26']);
    $tgl27 = mysqli_real_escape_string($koneksi, $_POST['tgl27']);
    $tgl28 = mysqli_real_escape_string($koneksi, $_POST['tgl28']);
    $tgl29 = mysqli_real_escape_string($koneksi, $_POST['tgl29']);
    $tgl30 = mysqli_real_escape_string($koneksi, $_POST['tgl30']);
    $tgl31 = mysqli_real_escape_string($koneksi, $_POST['tgl31']);

    $insert_query = "INSERT INTO siswa (id_tgl, tgl1, tgl2, tgl3, tgl4, tgl5, tgl6, tgl7, tgl8, tgl9, tgl10, tgl11, tgl12, tgl13, tgl14, tgl15, tgl16, tgl17, tgl18, tgl19, tgl20, tgl21, tgl22, tgl23, tgl24, tgl25, tgl26, tgl27, tgl28, tgl29, tgl30, tgl31) 
                    VALUES ('$id_tgl', '$tgl1', '$tgl2', '$tgl3', '$tgl4', '$tgl5', '$tgl6', '$tgl7', '$tgl8', '$tgl9', '$tgl10', '$tgl11', '$tgl12', '$tgl13', '$tgl14', '$tgl15', '$tgl16', '$tgl17', '$tgl18', '$tgl19', '$tgl20', '$tgl21', '$tgl22', '$tgl23', '$tgl24', '$tgl25', '$tgl26', '$tgl27', '$tgl28', '$tgl29', '$tgl30', '$tgl31')";

    if (mysqli_query($koneksi, $insert_query)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

