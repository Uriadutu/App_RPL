<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="dropdown">
    <a href="#" class= "a">Mata Pelajaran</a>
    <div class="dropdown-content">
        <div class="navi">
          <a href="../agama/a_ganjil.php">Agama</a>
        </div>
        <div class="navi">
          <a href="sejarah.php">Sejarah</a>          
        </div>
        <div class="navi">          
          <a href="matematika.php">Matematika</a>
        </div>
        <div class="navi">
          <a href="ekonomi.php">Ekonomi</a>
        </div>
        <div class="navi">
          <a href="sosiologi.php">Sosiologi</a>
        </div>
        <div class="navi">
          <a href="sejarah_pm.php">Sejarah(PM)</a>
        </div>
        <div class="navi">
          <a href="../indonesia/b_ganjil.php">B.Indonesia</a>
        </div>
        <div class="navi">
          <a href="b_inggris.php">B.Inggris</a>
        </div>
    </div>
</div>

<style>
  .navi {
    padding : 2px 20px;
    transition : .4s;

  }
  .navi:hover {
    background : #690CC6;
  }
  .navi:hover a{
    color : white;
  }
    
    .dropdown {
    /* margin-left : 50px; */
    position: relative;
    display: inline-block;
    background : white;
    padding : 1px 3px;
    border-radius: 2px;
    background : white;
    border : 1px solid black;
    transition : .4s;
  }
  .dropdown:hover {
      background : #690CC6;
    /* margin-left : 50px; */
    position: relative;
    display: inline-block;
    color : white;
    border-radius: 2px;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #dadada;
    min-width: 60px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    padding: 5px 0px;
    z-index: 1;
    margin-left: -3px;
    
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
  .dropdown-content a {
    text-decoration : none;
    color : white ;
    transition : .4s;
  }
  .dropdown-content a:hover {
    text-decoration : none;
    color : white ;
  }
  .dropdown a {
    text-decoration : none;
    color : black ;
    transition : .4s;
  }
  .dropdown:hover .a{
    color : white;
  }
    
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    var dropdowns = document.getElementsByClassName("dropdown");

    for (var i = 0; i < dropdowns.length; i++) {
      dropdowns[i].addEventListener("click", function () {
        this.classList.toggle("active");
      });
    }
  });
</script>
    
</body>
</html>