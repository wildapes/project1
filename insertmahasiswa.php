<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through post method
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$dosbing = $_POST['dosbing'];
	$angkatan = $_POST['angkatan'];
	$email = $_POST['email'];
	$status = $_POST['status'];

	//insert data into database
	$query = mysql_query("insert into mahasiswa values ('$nim', '$nama', '$dosbing', '$angkatan', '$email', '$status')") or die(mysql_error());

	if ($query) {
		header('location:datamahasiswa.php?message=success');
	}
?>
