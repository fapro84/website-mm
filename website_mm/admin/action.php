<?php
session_start();

include "../koneksi.php";

$username = $_POST["username"];
$p = ($_POST["password"]);

$sql = "select * from user where username='".$username."' and password='".$p."' limit 1";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["username"]=$row["username"];
		$_SESSION["password"]=$row["password"];

		
	

		header("Location:user.php");
		
	}else {
		echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
	}
?>