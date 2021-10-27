<?php
 
$dataPoints = array(
	array("x"=> 10, "y"=> 41),
	array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
	array("x"=> 30, "y"=> 50),
	array("x"=> 40, "y"=> 45),
	array("x"=> 50, "y"=> 52),
	array("x"=> 60, "y"=> 68),
	array("x"=> 70, "y"=> 38),
	array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
	array("x"=> 90, "y"=> 52),
	array("x"=> 100, "y"=> 60),
	array("x"=> 110, "y"=> 36),
	array("x"=> 120, "y"=> 49),
	array("x"=> 130, "y"=> 41)
);
	
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
				<th>Country</th>
			</tr>
			<tr>
				<td>Alfreds Futterkiste</td>
				<td>Maria Anders</td>
				<td>Germany</td>
			</tr>
			<tr>
				<td>Centro comercial Moctezuma</td>
				<td>Francisco Chang</td>
				<td>Mexico</td>
			</tr>
			<tr>
				<td>Fauzan</td>
				<td>Husin</td>
				<td>Ahdan</td>
			</tr>
			<tr>
				<td>Zydhan</td>
				<td>Yusril</td>
				<td>Mirzaq</td>
			</tr>
			<tr>
				<td>Afifan</td>
				<td>Ali</td>
				<td>Ridho</td>
			</tr>
			<tr>
				<td>Syafiq</td>
				<td>Richard</td>
				<td>"<Isi sendiri>"</td>
			</tr>
		</table>
	</body>
</html>