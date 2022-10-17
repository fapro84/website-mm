<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profil Guru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />




<!-- navigation-bar -->
<header class="bg">

<nav>

  <div class="menu">

    <a href=""><img src="img/logo_smk.png"></a>

      <ul>

        <li><a href="index.php">HOME</a></li>
          <div class="navbar">

            <div class="dropdownn">
            <button class="dropbtnn">PROFIL
              <i class="fa fa-caret-down"></i>
            </button>
              <div class="dropdown-contentt">
                 <a href="index.php#visi">VISI DAN MISI</a>
                 <a href="fasilitas.php">FASILITAS</a>
                 <a href="#">GURU</a>
                 <a href="data_siswa.php">SISWA</a>
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




        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h3>Our Best <span>Field</span></h3>
              <p>The best teacher majoring in Multimedia at SMK N 1 Bantul</p>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row">
<?php 
	include "koneksi.php";
	$sql="SELECT * FROM tb_guru";
	
	$hasil=mysqli_query($kon,$sql);
	$no=0;
	while ($data = mysqli_fetch_array($hasil)){

	?>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Team Thumb========https://bootdey.com/img/Content/avatar/avatar1.png -->
              <div class="advisor_thumb"><img src="img/guru/4.jpg" alt=""> 
                <!-- Social Info-->
                <div class="social-info"><a ><?php echo $data["nip"];   ?></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6><?php echo $data["nama"];   ?></h6>
                <h6><?php echo $data["alamat"];   ?></h6>
                <p class="designation"><?php echo $data["jabatan"];   ?></p>
              </div>
            </div>
          </div>


          <?php 
	}
	?>

          
            </div>
          </div>

        </div>
      </div>

<style type="text/css">
body{margin-top:20px;
background:#eee;
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
    height: 155px;
    width: 100%;
    background-color: #eee;
}
.single_advisor_profile {
    position: relative;
    margin-bottom: 50px;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    z-index: 1;
    border-radius: 15px;
    -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
    box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
}
.single_advisor_profile .advisor_thumb {
    position: relative;
    z-index: 1;
    border-radius: 15px 15px 0 0;
    margin: 0 auto;
    padding: 30px 30px 0 30px;
    background-color: #3f43fd;
    overflow: hidden;
}
.single_advisor_profile .advisor_thumb::after {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    width: 150%;
    height: 80px;
    bottom: -45px;
    left: -25%;
    content: "";
    background-color: #ffffff;
    -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
}
@media only screen and (max-width: 575px) {
    .single_advisor_profile .advisor_thumb::after {
        height: 160px;
        bottom: -90px;
    }
}
.single_advisor_profile .advisor_thumb .social-info {
    position: absolute;
    z-index: 1;
    width: 100%;
    bottom: 0;
    right: 30px;
    text-align: right;
}
.single_advisor_profile .advisor_thumb .social-info a {
    font-size: 14px;
    color: #020710;
    padding: 0 5px;
}
.single_advisor_profile .advisor_thumb .social-info a:hover,
.single_advisor_profile .advisor_thumb .social-info a:focus {
    color: #3f43fd;
}
.single_advisor_profile .advisor_thumb .social-info a:last-child {
    padding-right: 0;
}
.single_advisor_profile .single_advisor_details_info {
    position: relative;
    z-index: 1;
    padding: 30px;
    text-align: right;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    border-radius: 0 0 15px 15px;
    background-color: #ffffff;
}
.single_advisor_profile .single_advisor_details_info::after {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    z-index: 1;
    width: 50px;
    height: 3px;
    background-color: #3f43fd;
    content: "";
    top: 12px;
    right: 30px;
}
.single_advisor_profile .single_advisor_details_info h6 {
    margin-bottom: 0.25rem;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single_advisor_profile .single_advisor_details_info h6 {
        font-size: 14px;
    }
}
.single_advisor_profile .single_advisor_details_info p {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    margin-bottom: 0;
    font-size: 14px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single_advisor_profile .single_advisor_details_info p {
        font-size: 12px;
    }
}
.single_advisor_profile:hover .advisor_thumb::after,
.single_advisor_profile:focus .advisor_thumb::after {
    background-color: #070a57;
}
.single_advisor_profile:hover .advisor_thumb .social-info a,
.single_advisor_profile:focus .advisor_thumb .social-info a {
    color: #ffffff;
}
.single_advisor_profile:hover .advisor_thumb .social-info a:hover,
.single_advisor_profile:hover .advisor_thumb .social-info a:focus,
.single_advisor_profile:focus .advisor_thumb .social-info a:hover,
.single_advisor_profile:focus .advisor_thumb .social-info a:focus {
    color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info,
.single_advisor_profile:focus .single_advisor_details_info {
    background-color: #070a57;
}
.single_advisor_profile:hover .single_advisor_details_info::after,
.single_advisor_profile:focus .single_advisor_details_info::after {
    background-color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info h6,
.single_advisor_profile:focus .single_advisor_details_info h6 {
    color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info p,
.single_advisor_profile:focus .single_advisor_details_info p {
    color: #ffffff;
}

</style>

<script type="text/javascript">

</script>
</body>
</html>