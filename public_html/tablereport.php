<?php
    require "login_session.php";
	// Create connection
	$conn = mysqli_connect("localhost","id17882668_user_mahasiswa","6]q{|nBDkHPgimkV","id17882668_db_mahasiswa");
	$result = mysqli_query($conn,"SELECT * FROM tb_mahasiswa");
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
		<?php require 'navbar.php'; ?>
	</head>
	<body>

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