<?php
require "Functions/LoginSession.php";
	// Create connection
	$conn = mysqli_connect("localhost","id17882668_user_mahasiswa","6]q{|nBDkHPgimkV","id17882668_db_mahasiswa");
	$result = mysqli_query($conn,"SELECT * FROM tb_mahasiswa");
	$dataPoints = array();
	while ($mahasiswas = mysqli_fetch_assoc($result))
	{
		array_push($dataPoints,array("y"=>$mahasiswas["height"], "label"=>$mahasiswas["name"]));
	}
?>
<!DOCTYPE HTML>
<html>
	<head>  
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script>
		window.onload = function () {
		
		var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,
			exportEnabled: true,
			theme: "light1", // "light1", "light2", "dark1", "dark2"
			// title:{
			// 	text: "Laporan Berupa Grafik"
			// },
			axisY:{
				includeZero: true
			},
			data: [{
				type: "column", //change type to bar, line, area, pie, etc
				//indexLabel: "{y}", //Shows y value on all Data Points
				indexLabelFontColor: "#5A5757",
				indexLabelPlacement: "outside",   
				dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();
		
		}
		</script>
		<?php require "Page/Navbar.php"; ?>
	</head>
	<body>
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	</body>
</html>