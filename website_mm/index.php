<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MULTIMEDIA│SMK N 1 BANTUL</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="img/icon.png">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!-- njajal -->

    <!-- njajal end -->
    <script type="text/javascript">
        // Scrolling Effect

        $(window).on("scroll", function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>

</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <div class="top">

        <div class='bghitam'></div>


        <!-- navigation-bar -->
        <header class="bg">

            <nav>

                <div class="menu">

                    <a href=""><img src="img/logo_smk.png"></a>

                    <ul>

                        <li><a href="">HOME</a></li>
                        <div class="navbar">

                            <div class="dropdown">
                                <button class="dropbtn">PROFIL
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="#visimisi">VISI DAN MISI</a>
                                    <a href="fasilitas.php">FASILITAS</a>
                                    <a href="data_guru.php">GURU</a>
                                    <a href="data_siswa.php">SISWA</a>
                                </div>
                            </div>
                        </div>

                        <li><a href="prestasi.php">PRESTASI</a></li>

                        <li><a href="produk.php">PRODUK</a></li>

                        <li><a href="#berita">INFORMASI</a></li>

                    </ul>

                </div>
            </nav>
        </header>

        <div class="text">

            <h1>MULTIMEDIA<br>SMK N 1 BANTUL</h1>

            <p>Salah satu jurusan favorit di SMK N 1 BANTUL</p>

            <span><a href="">READ MORE</a></span>

        </div>

    </div>

    <!-- slogan -->

    <div class="slogan">

        <div class="slogan-1">
            <h1>Aktif</h1>
            <p>di bidang desain grafis, animasi, fotografi, audio-video shooting</p>
        </div>

        <div class="slogan-1">
            <h1>Kreatif</h1>
            <p>menghasilkan sebuah karya, tanpa mengeksploitasi sumber daya alam, serta dapat dijadikan produk ekonomi
                yang menghasilkan.</p>
        </div>

        <div class="slogan-1">
            <h1>Inovatif</h1>
            <p>mempelajari tentang penggunaan komputer guna untuk menyajikan data teks, suara, gambar, animasi, serta
                video </p>
        </div>

    </div>

    <div class="bg-roll"></div>

    <?php 
	include "koneksi.php";
	$sql="SELECT * FROM visimisi";
	
	$hasil=mysqli_query($kon,$sql);
	$no=0;
	while ($data = mysqli_fetch_array($hasil)){
 
	?>

    <div id="visimisi">
        <div class="misivisi">
            <center>
                <h2 class="judul_visi">Visi dan Misi</h2>
            </center>

            <div class="isi">
                <h2 class="visi_misi">VISI</h3>
                    <p class="isi_visi_misi">
                        <?php echo $data["visi"];   ?>
                    </p>
                    <h2 class="visi_misi">MISI</h3>
                        <p class="misi">
                            <?php echo $data["misi"];   ?>
                        </p>
            </div>

        </div>
    </div>

    <?php
        }
        ?>





    <div class="depan">

        <img src="img/depan.png">

    </div>



    <div class="subscribe">
        <img src="img/logo_mm.png" alt="">




    </div>

    <div id="berita">

        <h1>BERITA TERBARU</h1>

        <p>Menyajikan informasi Multimedia</p>

        <div class="grid4">

            <div class="grid3">

                <img src="img/rpl.jpg">

                <p>BERITA TERBARU</p>

                <h2>What is Lorem Ipsum?</h2>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                <a href="">READ MORE...</a>

            </div>

            <div class="grid3">

                <img src="img/rpl.jpg">

                <p>BERITA TERBARU</p>

                <h2>What is Lorem Ipsum?</h2>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                <a href="">READ MORE...</a>

            </div>

            <div class="grid3">

                <img src="img/rpl.jpg">

                <p>BERITA TERBARU</p>

                <h2>What is Lorem Ipsum?</h2>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                <a href="">READ MORE...</a>

            </div>

        </div>

    </div>

    <div class="kontak">

        <div class="hub">

            <div class="hub-1">
                <a href="https://goo.gl/maps/Kz1RT9wvRRpadi3e8"><img src="img/location.png" alt=""></a>
                <p>Jl. Parangtritis No.KM.11, Sabdodadi,Bantul, Daerah Istimewa Yogyakarta</p>
            </div>

            <div class="hub-1">
                <img src="img/mail.png" alt="">
                <p>smeanbtl@yahoo.com.</p>
            </div>

            <div class="hub-1">
                <img src="img/contact.png" alt="">
                <p>0274 - 367156 <br> 0274 - 513454</p>
            </div>

        </div>

    </div>

    <div class="footer">
        <center>
            <p>Copyrights© 2022 SMK N 1 Bantul <span>Developed by</span> RPL 1 </p>
        </center>
    </div>





</body>

</html>