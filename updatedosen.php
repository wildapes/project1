<?php

	include "koneksi.php";


	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$query = mysql_query("update dosen set nip='$nip', nama='$nama', email='$email' where nip='$nip'") or die(mysql_error());

	if ($query) {
		header('location:datadosen.php?message=success');
	}
?>
