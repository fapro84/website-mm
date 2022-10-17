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
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_anggota
    if (isset($_GET['nis'])) {
        $id_anggota=input($_GET["nis"]);

        $sql="select * from data_siswa where nis=$id_anggota";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $nis=input($_POST["nis"]);
        $kelas=input($_POST["kelas"]);
        $jk=input($_POST["jk"]);

        //Query update data pada tabel anggota
        $sql="update data_siswa set
            nama='$nama',
            nis='$nis',
			kelas='$kelas',
			jk='$jk'
            where nis=$nis";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" placeholder="Masukan Username" required />

        </div>
        <div class="form-group">
            <label>NIS:</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nis']; ?>" placeholder="Masukan Nama" required/>

        </div>
        <div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas']; ?>" placeholder="Masukan Alamat" required>

        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <input type="text" name="kelas" class="form-control" value="<?php echo $data['jk']; ?>" placeholder="Masukan Email" required/>
        </div>

        <input type="text" name="nis" value="<?php echo $data['nis']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>