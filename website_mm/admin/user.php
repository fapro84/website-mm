<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <br>
    <h4 class="text-center pt-3">Admin Data Siswa</h4>
<?php

    include "..\koneksi.php";

    //Cek apakah ada nilai dari method GET dengan nama nis
    if (isset($_GET['nis'])) {
        $id_anggota=htmlspecialchars($_GET["nis"]);

        $sql="delete from data_siswa where nis='$id_anggota' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:user.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>

    <div class="text-right">
        <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
    </div>

    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>
        <?php
        include "../koneksi.php";
        $sql="select * from data_siswa order by nis asc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nama"];   ?></td>
                <td><?php echo $data["nis"];   ?></td>
                <td><?php echo $data["kelas"]; ?></td>
                <td><?php echo $data["jk"];   ?></td>
                <td>
                    <a href="update.php?nis=<?php echo htmlspecialchars($data['nis']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?nis=<?php echo $data['nis']; ?>" class="btn btn-danger" role="button">Delete</a>
                    
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>

</div>
</body>
</html>