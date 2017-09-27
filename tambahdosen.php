<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <title>Data Dosen</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='styleshee t' type='text/css' />
</head>

<body>
  	<div class="row">
        <div class="col-md-5">
<!-- building form for adding new data, this will be directed to insertdosen.php-->
			<form action="insertdosen.php" method="post" role="form">
				<div class="form-group">
					<div class="one half">
						<label>NIP</label>
						<input class="form-control" name="nip" type="text" >
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
						<label>Email</label>
						<input class="form-control" name="email" type="text" >
					</div>	
				</div>
			
				<button type="submit" class="btn btn-primary" value="Simpan Perubahan">Simpan Perubahan</button>
			</form>
        </div>
    </div>
</body>

</html>
