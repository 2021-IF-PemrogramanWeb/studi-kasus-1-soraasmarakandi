<?php
    require "Functions/LoginSession.php";
	require "Functions/ConnectDB.php";

	$result = mysqli_query($db,"SELECT * FROM tb_mahasiswa");
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
		<?php require 'Page/Navbar.php'; ?>
	</head>
	<body>

		<table>
			<tr>
				<th>Photo</th>
				<th>NRP</th>
				<th>Name</th>
				<th>Website</th>
			</tr>
			<?php while ( $mahasiswas = mysqli_fetch_assoc($result) ) {?>
				<tr>
					<td><img src="<?= $mahasiswas['profile_picture']?>"></td>
					<td><?= $mahasiswas["nrp"]?></td>
					<td><?= $mahasiswas["name"]?></td>
					<td><?= $mahasiswas["website"]?></td>
				</tr>
			<?php }?>
		</table>
		
	</body>
</html>