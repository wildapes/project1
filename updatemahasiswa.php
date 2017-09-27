<?php

	include "koneksi.php";


	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$dosbing = $_POST['dosbing'];
	$angkatan = $_POST['angkatan'];
	$email = $_POST['email'];
	$status = $_POST['status'];


	$query = mysql_query("update mahasiswa set nim='$nim', nama='$nama', dosbing='$dosbing', angkatan='$angkatan', email='$email', status='$status'  where nim='$nim'") or die(mysql_error());

	if ($query) {
		header('location:datamahasiswa.php?message=success');
	}
?>
