<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "../koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai  
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $nis=input($_POST["nis"]);
        $kelas=input($_POST["kelas"]);
        $jk=input($_POST["jk"]);

        //Query input menginput data kedalam tabel anggota
        $sql="insert into data_siswa (nama, nis, kelas, jk) values
		('$nama','$nis','$kelas','$jk')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:user.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>

        </div>
        <div class="form-group">
            <label>NIS:</label>
            <textarea name="nis" class="form-control" placeholder="Masukan Alamat" required></textarea>

        </div>
        <div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="kelas" class="form-control" placeholder="Masukan No HP" required/>
        </div>
        <div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="jk" class="form-control" placeholder="Masukan No HP" required/>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>