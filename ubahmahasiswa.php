<!DOCTYPE html>
<html>

<head>
<?php
	//put file which is connected to database
	include "koneksi.php";
	
	//take all parameters through get method
	$id = $_GET['id'];
	
	//doing read process from database
	$query = mysql_query("select * from mahasiswa where nim='$id'") or die(mysql_error());
	$data = mysql_fetch_array($query);
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <title>Ubah Mahasiswa</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
	<div class="row">
        <div class="col-md-5">
			<!-- building form for editing data, this will be directed to updatemahasiswa.php-->
			<form action="updatemahasiswa.php" method="post" role="form">
				<!-- data which had been taken, will be placed on its type such as nim, nama, etc. -->
				<div class="form-group">
					<div class="one half">
						<label>NIM</label>
						<input class="form-control" name="nim" type="text" value="<?php echo $data['nim'];?>">
					</div>
</div>
				
				<div class="form-group">
					<div class="one half">
						<label>Nama</label>
						<input class="form-control" name="nama" type="text" value="<?php echo $data['nama'];?>">
					</div>
				</div>
				
				<div class="form-group">
					<div class="one half">
						<label>Dosbing</label>
						<select class="form-control" name="dosbing">
							
							<option value="1001"<?php if($data['dosbing'] == '1001'){ echo 'selected'; } ?>>Eko Didik W.</option>
							<option value="1002"<?php if($data['dosbing'] == '1002'){ echo 'selected'; } ?>>Kurniawan Teguh M.</option>
							<option value="1003"<?php if($data['dosbing'] == '1003'){ echo 'selected'; } ?>>Rinta Kridalukmana</option>
							<option value="1004"<?php if($data['dosbing'] == '1004'){ echo 'selected'; } ?>>Oky Dwi N.</option>
							<option value="1005"<?php if($data['dosbing'] == '1005'){ echo 'selected'; } ?>>Ike Pertiwi W.</option>
							<option value="1006"<?php if($data['dosbing'] == '1006'){ echo 'selected'; } ?>>Rizal Isnanto</option>
						</select>
					</div>	
				</div>
				
				<div class="form-group">
					<div class="one half">
						<label>Angkatan</label>
<input class="form-control" name="angkatan" type="text" value="<?php echo $data['angkatan']; ?>">
					</div>	
				</div>
				
				<div class="form-group">
					<div class="one half">
						<label>Email</label>
						<input class="form-control" name="email" type="text" value="<?php echo $data['email']; ?>">
					</div>	
				</div>
				
				<div class="form-group">
					<div class="one half">
						<label>Status</label>
						<input class="form-control" name="status" type="text" value="<?php echo $data['status']; ?>">
					</div>	
				</div>
				
				<button type="submit" class="btn btn-primary" value="Simpan Perubahan">Simpan Perubahan</button>
			</form>
        </div>
    </div>
</body>

</html>
