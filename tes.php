<?php
    $ambildata = mysqli_query($koneksi, "SELECT * FROM siswa");
    $tes = mysqli_fetch_array($ambildata);
?>