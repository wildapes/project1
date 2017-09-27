<!DOCTYPE html>
<html>

<head>
<?php
	
	include "koneksi.php";
	
	
	$nip = $_GET['id'];
	
	
	$query = mysql_query("select * from dosen where nip='$nip'") or die(mysql_error());
	$data = mysql_fetch_array($query);
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <title>Ubah Dosen</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
	<div class="row">
        <div class="col-md-5">
			<!-- building form for editing data, this will be directed to updatemahasiswa.php-->
			<form action="updatedosen.php" method="post" role="form">
				<!-- data which had been taken, will be placed on its type such as nim, nama, etc. -->
				<div class="form-group">
					<div class="one half">
						<label>NIP</label>
						<input class="form-control" name="nip" type="text" value="<?php echo $data['nip'];?>">
					</div></div>
				
				<div class="form-group">
					<div class="one half">
						<label>Nama</label>
						<input class="form-control" name="nama" type="text" value="<?php echo $data['nama'];?>">
					</div>
				</div>
				
				
				
				<div class="form-group">
					<div class="one half">
						<label>Email</label>
						<input class="form-control" name="email" type="text" value="<?php echo $data['email']; ?>">
					</div>	
				</div>
				
				<button type="submit" class="btn btn-primary" value="Simpan Perubahan">Simpan Perubahan</button>
			</form>
        </div>
    </div>
</body>

</html>
