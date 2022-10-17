<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
body{
  
}
body {
    font-family: Arial, Helvetica, sans-serif; 
    margin: 0; 
    font-weight: lighter;
}
.menu img {
    float: left; 
    padding: 20px 90px;
    height: 100px;
}
.menu > a{
    font-size: 16px;
}
nav{
    top: 0;
    position: absolute;
    width: 100%;
    z-index: 1;
    background-color: #000;
}
/* ini */
.dropdownn {
    overflow: hidden;
    font-family: Arial;
}

/* Links inside the navbar */
.dropdownn a {
    float: left;
    font-size: px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
/* The dropdown container */
.dropdownn {
    float: left;
    overflow: hidden;
}
/* Dropdown button */
.dropdownn .dropbtnn {
    font-size: 16px;
    border: none;
    outline: none;
    color: hwb(0 100% 0%);
    padding: 0px 10px;
    background-color: inherit;
    font-family: inherit; /* Important for vertical align on mobile phones */
    margin: 0; /* Important for vertical align on mobile phones */
}
/* Dropdown content (hidden by default) */
.dropdown-contentt {
    display: none;
    position: absolute;
    background-color: #070069;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
/* Links inside the dropdown */
.dropdown-contentt a {
    float: none;
    color: #fff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
/* Add a grey background color to dropdown links on hover */
.dropdown-contentt a:hover {
    background-color: #605353;
}
/* Show the dropdown menu on hover */
.dropdownn:hover .dropdown-contentt {
    display: block;
}
.dropdownn button:hover{
    cursor: pointer;;
}
.bgColor{
    background-color: white;
    color: black;
}
.menu ul{
    list-style: none;
    display: inline-flex; 
    float: right; 
    padding-right: 80px; 
    padding-top: 28px;
}
.menu ul li{
    padding-right: 20px; 
    padding-top: 8px;
}

.menu ul li a {
    text-decoration: none; 
    cursor: pointer; 
    color: white;
}
.menu ul li a:hover {
    border-bottom: solid 2px #fff;
}

.isi{
    height: 100px;
    width: 100%;
    background-color: #fff;
}
.btn{
background-color: #0b00a7;
border:none;
}
.btn-info{
background-color: 070069;
}





</style>

</head>
<body>

<div class="top">

<div class='bghitam'></div>


<!-- navigation-bar -->
  <header class="bg">

    <nav>

      <div class="menu">

        <a href=""><img src="img/logo_smk.png"></a>

          <ul>

            <li><a href="index.php">HOME</a></li>
              <div class="navbar">

                <div class="dropdownn">
                <button class="dropbtnn">PROFIL▼
                  <i class="fa fa-caret-down"></i>
                </button>
                  <div class="dropdown-contentt">
                     <a href="index.php#visi">VISI DAN MISI</a>
                     <a href="fas">FASILITAS</a>
                     <a href="#">GURU</a>
                     <a href="#">SISWA</a>
                  </div>
                </div>
              </div>

              <li><a href="">PRESTASI</a></li>
              
              <li><a href="produk.php">PRODUK</a></li>
              
              <li><a href="index.php#berita">INFORMASI</a></li>

          </ul>

      </div>
    </nav>
  </header> 
</div>


<div class="isi"></div>

    


<div class="container">
    <br>
    <h4>Prestasi Multimedia</h4>


    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Kejuaraan</th>
            <th>Tingkat</th>


        </tr>
        </thead>
        <?php 
	include "koneksi.php";
	$sql="SELECT * FROM prestasi";
	
	$hasil=mysqli_query($kon,$sql);
	$no=0;
	while ($data = mysqli_fetch_array($hasil)){
        $no++;
	?>

            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nama"];   ?></td>
                <td><?php echo $data["tgl"]; ?></td>
                <td><?php echo $data["kejuaraan"];   ?></td>
                <td><?php echo $data["tingkat"];   ?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>

    <audio autoplay>
  <source src="mp3/winner.mp3" type="audio/mp3">
</audio>
</div>

</body>
</html>