<tbody>
				<?php
					//put file which is connected to database
					include ("dbConnect.php");
					
					//take data from database to be shown
					$query = "SELECT * FROM mahasiswa";
					$result = mysql_query($query);
					while($row = mysql_fetch_array($result))
					{
				?>
					<tr>
						<!-- put data which we want to show via table -->
						<td><?php echo $row['gambar_wisata'] ?></td>
						
					</tr>
				<?php
					}
				?>
				</tbody>