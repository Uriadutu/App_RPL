<?php
include 'koneksilogin.php';
if (isset($_POST['login'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    if ($Username == '' or $Password == '') {
        $err .= "<li>* Silakan Masukkan Username dan Password</li>";
    }

    if (empty($err)) {
        $sql = "SELECT * FROM admin WHERE Username = '$Username'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) == 0) {
            $err = "<li>Akun tidak ditemukan</li>";
        } else {
            $row = mysqli_fetch_assoc($result);

            if ($row['Password'] != md5($Password)) {
                $err = "<li>Kombinasi Username dan Password salah</li>";
            } else {
                $login_id = $row['login_id'];
                $sql = "SELECT * FROM admin_akses WHERE login_id = '$login_id'";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) == 0) {
                    $err .= "<li>Kamu Tidak Memiliki Akses ke Halaman Admin</li>";
                } else {
                    $akses = array();
                    while ($row = mysqli_fetch_assoc($result)) {
                        $akses[] = $row['akses_id'];
                    }

                    $_SESSION['admin_Username'] = $Username;
                    $_SESSION['admin_akses'] = $akses;
                    header("location:beranda.php");
                    exit();
                }
            }
        }
    }
}
?>

<!-- The rest of your HTML code here -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="Login.css">
    <link rel="shortcut icon" href="./image/Logo Sistem Informasi Akademik.png" type="image/x-icon">
</head>
<body>
    <div class="Login">
        <div class="Logo">
        <img src="image/L_SMA-removebg-preview.png">
        <img src="image/Logo_Gmim-removebg-preview.png">
        </div>
        <p style="color: black;">SMA KRISTEN YOBEL KEMA</p>
        <?php
                    if($err){
                        echo "<div class='eror'><ul>$err</ul></div>";
                    }
                    ?>
        <p style="color: black;">Masuk</p>
        
    <form action="" method="post" autocomplete="off">
        <div class="inputni">
            <div class="dalam">
                <input type="text" name="Username" id="user" value="<?php echo $Username ?>" class="input" placeholder="Username"/></br></br>
        <input type="password" name="Password" id="pass" class="input" placeholder="Password"/></br>
        <div class="loginku">
            <input type="submit" name="login" value="Login" class="input1"/>
        </div>
            </div>
        </div>
    </form>
    </div>

    <style>
        li {
            list-style:none;
            
        }
        ul {
            margin : auto;
        }
        .Login {
    background-color: #e6e3b5;
    position: inline-block;
    margin: auto;
    /* margin-top: 50px; */
    border-radius: 25px;
}

p {
    text-align: center;
    font-size: 30px;
    color: rgb(0, 0, 0);
}
.eror {
    display : flex;
    justify-content : center;
}

text p {
    text-align: center;
    padding-top: 60px;
    color: black;
}
.inputni {

    margin: 0;
    display : inline-block;
    justify-content : center;
}
.input {
    margin-top:-30px;
}

input {
    border-bottom: 2px solid black;
}
body {
    background-color: grey;
}

.Logo {
    display: flex;
    justify-content: space-between;
    padding: 0px 30px;
}
.input1 {
    border:none;
    
}
.loginku {
    display : flex;
    justify-content: center;
}
.Login {
    background-color: #e6e3b5;
    width: 600px;
    height: 650px;
    margin: auto;
    margin-top: 50px;
    border-radius: 25px;
    padding-top: 80px;
}

p {
    text-align: center;
    padding-top: 5px;
    font-size: 30px;
    color: rgb(0, 0, 0);
}

text p {
    text-align: center;
    padding-top: 60px;
    color: black;
}

input {
    margin-left: 95px;
    margin-top: 80px;
    width: 400px;
    height: 20px;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 2px solid black;
}

button {
    width: 400px;
    margin-left: 100px;
    margin-top: 70px;
    height: 30px;
    background-color: black;
    color: white;
    border: none;
    border-radius: 15px;
}

button a {
    text-decoration: none;
    color: white;
}

body {
    background-color: grey;
}

.Logo {
    display: flex;
    justify-content: space-between;
    padding: 0px 30px;
}
    </style>

</body>
</html>
