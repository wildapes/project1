<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <title>Data Mahasiswa</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
  	<div class="row">
        <div class="col-md-5">
			<!-- building form for adding new data, this will be directed to insertmahasiswa.php-->
			<form action="insertmahasiswa.php" method="post" role="form">
				<div class="form-group">
					<div class="one half">
						<label>NIM</label>
						<input class="form-control" name="nim" type="text" >
					</div>
				</div>
				
				<div class="form-group">
					<div class="one half">
						<label>Nama</label>
						<input class="form-control" name="nama" type="text" >
					</div>
				</div>
<div class="form-group">
					<div class="one half">
						<label>Dosbing</label>
						<select class="form-control" 
name="dosbing">
                                          <option value="">--Pilih Dosbing--</option>
							<option value="1001">Eko Didik W.</option>
							<option value="1002">Kurniawan Teguh M.</option>
							<option value="1003">Rinta Kridalukmana</option>
							<option value="1004">Oky Dwi N.</option>
							<option value="1005">Ike Pertiwi W.</option>
							<option value="1006">Rizal Isnanto</option>
						</select>
					</div>	
				</div>
				
				<div class="form-group">
					<div class="one half">
						<label>Angkatan</label>
						<input class="form-control" name="angkatan" type="text" >
					</div>	
				</div>
				
				<div class="form-group">
					<div class="one half">
						<label>Email</label>
						<input class="form-control" name="email" type="text" >
					</div>	
				</div>
				
				<div class="form-group">
<div class="one half">
						<label>Status</label>
						<input class="form-control" name="status" type="text" >
					</div>	
				</div>
				
				<button type="submit" class="btn btn-primary" value="Tambah Data">Tambah Data</button>
			</form>
        </div>
    </div>
</body>

</html>
