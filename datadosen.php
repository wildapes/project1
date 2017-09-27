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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div class="row">
        <div class="col-md-12">
			<h2>Data Dosen</h2>   
        </div>
    </div>
	<div class="row">
        <div class="col-md-12">
			<!-- building table to put the data -->
			<table class="table table-striped table-bordered " id="dataTables-example">
				<thead>                                   
					<tr>
						<th>NIP</th>
						<th>NAMA</th>
						<th>EMAIL</th>
						<th>OPTION</th>
					</tr>
				</thead>
				<tbody>
<?php
					//put file which is connected to database
					include ("koneksi.php");
					
					//take data from database to be shown
					$query = "SELECT * FROM dosen";
					$result = mysql_query($query);
					while($row = mysql_fetch_array($result))
					{
				?>
					<tr>
						<!-- put data which we want to show via table -->
						<td><?php echo $row['nip'] ?></td>
						<td><?php echo $row['nama'] ?></td>
						<td><?php echo $row['email'] ?></td>
						
						<td align="center">
					
							<a class='fa fa-pencil' href='ubahdosen.php?id=<?php echo $row['nip'] ?> '> Ubah</a> | 
							<a class='fa fa-trash-o' href='hapusdosen.php?&id=<?php echo $row['nip'] ?> '> Hapus </a>
						</td>
					</tr>
				<?php } ?>
				
				</tbody>
				
				<!-- icon for adding new data -->
				<a class='fa fa-plus-square fa-2x' href='tambahdosen.php'></a>
			
			</table>
			<div style="float: right;">
			</div>
 </div>
    </div>
    <script src="assets/js/custom.js"></script>
</body>

</html>
