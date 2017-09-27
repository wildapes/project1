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
        <div class="col-md-12">
			<h2>Data Mahasiswa</h2>  
		</div>
    </div>
	<div class="row">
        <div class="col-md-12">
			<!-- building table to put the data -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>                                   
					<tr>
						<th><center>NIM</th>
						<th><center>NAMA</th>
						<th><center>DOSBING</th>
						<th><center>ANGKATAN</th>
						<th><center>EMAIL</th>
						<th><center>STATUS</th>
						<th><center>OPTION</th>
					</tr>
				</thead>
				
				<tbody>
				<?php
					//put file which is connected to database
					include ("koneksi.php");
					
					//take data from database to be shown
					$query = "SELECT * FROM mahasiswa";
					$result = mysql_query($query);
					while($row = mysql_fetch_array($result))
					{
				?>
					<tr>
						<!-- put data which we want to show via table -->
						<td><?php echo $row['nim'] ?></td>
						<td><?php echo $row['nama'] ?></td>
						<td><?php echo $row['dosbing'] ?></td>
						<td><?php echo $row['angkatan'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo 
						$row['status'] ?></td>
						<td align="center">
							<!-- icon that will lead us to delete or edit data -->
							<a class='fa fa-pencil' href='ubahmahasiswa.php?id=<?php echo $row['nim'] ?>'> Ubah</a> | 
							<a class='fa fa-trash-o' href='hapusmahasiswa.php?&id=<?php echo $row['nim'] ?>'> Hapus </a>
						</td>
					</tr>
				<?php
					}
				?>
				</tbody>
				
				<!-- icon for adding new data -->
				<a class='fa fa-plus-square fa-2x' href='tambahmahasiswa.php'></a>
				
			</table>
			<div style="float: right;">
			</div>
        </div>
    </div>
    <script src="assets/js/custom.js"></script>  
</body>

</html>
