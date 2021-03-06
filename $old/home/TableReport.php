<?php
	// Create connection
	$conn = mysqli_connect("localhost","richard","","mahasiswa");
	$result = mysqli_query($conn,"SELECT * FROM data_mhs");
?>

<!DOCTYPE HTML>
<html>
	<head>  
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<style>
			table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
			}

			td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
			}

			tr:nth-child(even) {
			background-color: #dddddd;
			}
		</style>
	</head>
	<body>
		<div class="container overflow-hidden">
			<div class="row gy-5">
				<div class="col-6">
					<a href="TableReport.php"><div class="p-3 border" style="text-align: center; background-color: #D3D3D3;">Table Report</div></a>
				</div>
				<div class="col-6">
					<a href="GraphicReport.php"><div class="p-3 border" style="text-align: center; background-color: #24a0ed;">Graphic Report</div></a>
				</div>
			</div>
		</div>

		<table>
			<tr>
				<th>Company</th>
				<th>Contact</th>
				<th>Height</th>
			</tr>
			<?php while ( $mahasiswas = mysqli_fetch_assoc($result) ) {?>
				<tr>
					<td><?= $mahasiswas["name"]?></td>
					<td><?= $mahasiswas["contact"]?></td>
					<td><?= $mahasiswas["height"]?></td>
				</tr>
			<?php }?>
		</table>
		
	</body>
</html>