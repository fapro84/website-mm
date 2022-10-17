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
.btn-info:hover{
    background-color: #070069;
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
                     <a href="index.php#visimisi">VISI DAN MISI</a>
                     <a href="fasilitas.php">FASILITAS</a>
                     <a href="data_guru.php">GURU</a>
                     <a href="#">SISWA</a>
                  </div>
                </div>
              </div>

              <li><a href="prestasi.php">PRESTASI</a></li>
              
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
    <h4>DATA SISWA JURUSAN MULTIMEDIA SMK N 1 BANTUL</h4>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
    <div class="form-group">
        <label for="sel1">Pilih kelas:</label>
        <select class="form-control" name="kelas">
            <?php
            include "koneksi.php";
            //Perintah sql untuk menampilkan semua data pada tabel kelas
            $sql="select * from kelas";

            $hasil=mysqli_query($kon,$sql);
            $no=0;
            while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            $ket="";
            if (isset($_GET['kelas'])) {
                $jurusan = trim($_GET['kelas']);

                if ($jurusan==$data['kode_kelas'])
                {
                    $ket="selected";
                }
            }
            ?>
            <option <?php echo $ket; ?> value="<?php echo $data['kode_kelas'];?>"><?php echo $data['nama_kelas'];?></option>
            <?php
	}
  ?>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Pilih">
    </div>
    </form>

    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>


        </tr>
        </thead>
        <?php


        if (isset($_GET['kelas'])) {
            $jurusan=trim($_GET['kelas']);
            $sql="select * from data_siswa where kelas='$jurusan' order by nis asc";
        }else {
            $sql="select * from data_siswa order by nis asc";
        }


        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nama"];   ?></td>
                <td><?php echo $data["nis"]; ?></td>
                <td><?php echo $data["kelas"];   ?></td>
                <td><?php echo $data["jk"];   ?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>


</div>

</body>
</html>