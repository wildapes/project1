<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through post method
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	
	//insert data into database
	$query = mysql_query("insert into dosen values ('$nip', '$nama', '$email')") or die(mysql_error());

	if ($query) {
		header('location: datadosen.php ?message=success');
	}
?>
