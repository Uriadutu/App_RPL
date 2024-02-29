<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="DaftarSiswa.css">
    <link rel="shortcut icon" href="./image/Logo Sistem Informasi Akademik.png" type="image/x-icon">
   
        </nav>
        <main>

                 <?php

            include "koneksi.php";
            $no=1;   
            $ambildata = mysqli_query($koneksi,"select * from siswa where NISN='$_GET[NISN]'");
            while ($tampil = mysqli_fetch_array($ambildata)){
                echo "
                <div class='pembungkus'>
            <div class='ungu'>
                <tr>
                <th>NISN :</th>
                <td>$tampil[NISN]</td></br><br>
                </tr>
                <tr>
                <th>Nama Siswa :</th>
                <td>$tampil[Nama_siswa]</td></br><br>
                </tr>
                <tr>
                <th>Kelas :</th>
                <td>$tampil[Kelas]</td></br><br>
                </tr>
                <tr>
                <th>Tahun :</th>
                <td>$tampil[Tahun]</td></br><br>
                </tr>
                <tr>
                <th>Jenis Kelamin Siswa :</th>
                <td>$tampil[Jenis_kelamin_siswa]</td></br><br>
                </tr>
                <tr>
                <th>Tempat Lahir Siswa :</th>
                <td>$tampil[Tempat_lahir_siswa]</td></br><br>
                </tr>
                <tr>
                <th>Tanggal Lahir Siswa :</th>
                <td>$tampil[Tanggal_lahir_siswa]</td></br><br>
                </tr>
                <tr>
                <th>Alamat Siswa :</th>
                <td>$tampil[Alamat_siswa]</td></br><br>
                </tr>
                <tr>
                <th>Anak Keberapa :</th>
                <td>$tampil[Anak_ke]</td></br><br>
                </tr>
                <tr>
                <th>Nomor HP Siswa :</th>
                <td>$tampil[Nomor_hp_siswa]</td></br><br>
                </tr>
                <th>NIK Ayah :</th>
                <td>$tampil[NIK_ayah]</td></br><br>
                </tr>
                <tr>
                <th>Nama Ayah :</th>
                <td>$tampil[Nama_ayah]</td></br><br>
                </tr>
                <tr>
                <th>Pendidikan Ayah :</th>
                <td>$tampil[Pendidikan_ayah]</td></br><br>
                </tr>
                <tr>
                <th>Pekerjaan Ayah :</th>
                <td>$tampil[Pekerjaan_ayah]</td></br><br>
                </tr>
                <tr>
                <th>Penghasilan Ayah :</th>
                <td>$tampil[Penghasilan_ayah]</td></br><br>
                </tr>
                <tr>
                <th>Nomor HP Ayah :</th>
                <td>$tampil[Nomor_hp_ayah]</td></br><br>
                </tr>
                <th>NIK Ibu :</th>
                <td>$tampil[NIK_ibu]</td></br><br>
                </tr>
                <tr>
                <th>Nama Ibu :</th>
                <td> $tampil[Nama_ibu]</td></br><br>
                </tr>
                <tr>
                <th>Pendidikan Ibu :</th>
                <td>$tampil[Pendidikan_ibu]</td></br><br>
                </tr>
                <tr>
                <th>Pekerjaan Ibu :</th>
                <td>$tampil[Pekerjaan_ibu]</td></br><br>
                </tr>
                <tr>
                <th>Penghasilan Ibu :</th>
                <td>$tampil[Penghasilan_ibu]</td></br><br>
                </tr>
                <tr>
                <th>Nomor HP Ibu :</th>
                <td>$tampil[Nomor_hp_ibu]</td></br><br>
                </tr>
                <th>Email Ibu :</th>
                <td>$tampil[Email_ibu]</td></br><br>
                </tr>
                <div class='tombol'>
                <button><a href='DaftarSiswa.php'>Kembali</a></button>
        
                </div>
                </div>
                
            </div>
            "
           ; 
                
           


            }
            ?>

        </main>
    </div>
            
</body>
</html>
<style>
    .ungu {
  background-color: rgba(105, 12, 198, 20%);
  border-radius: 40px;
  padding: 20px 50px;
  display: inline-block;

}
.tombol button a {
        color : black;
        text-decoration: none;
        padding : 0 10px;
        background: ;
    }

.pembungkus {
display: flex;
justify-content: center;
align-items: center;
background: none;
/* height: 100vh; */
margin-top: 40px;


}

.ungu tr {
    margin-top: 15px;
}
</style>


