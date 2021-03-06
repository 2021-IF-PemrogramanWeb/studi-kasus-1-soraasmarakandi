<?php
	// Create connection
	$conn = mysqli_connect("localhost","richard","","mahasiswa");
	$result = mysqli_query($conn,"SELECT * FROM data_mhs");
	$dataPoints = array();
	while ($mahasiswas = mysqli_fetch_assoc($result))
	{
		array_push($dataPoints,array("y"=>$mahasiswas["height"], "label"=>$mahasiswas["name"]));
	}
	// $dataPoints = array( 
	// 	array("y" => 3373.64, "label" => "Germany" ),
	// 	array("y" => 2435.94, "label" => "France" ),
	// 	array("y" => 1842.55, "label" => "China" ),
	// 	array("y" => 1828.55, "label" => "Russia" ),
	// 	array("y" => 1039.99, "label" => "Switzerland" ),
	// 	array("y" => 765.215, "label" => "Japan" ),
	// 	array("y" => 612.453, "label" => "Netherlands" )
	// );
	
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
	</head>
	<body>
		<div class="container overflow-hidden">
			<div class="row gy-5">
				<div class="col-6">
					<a href="TableReport.php"><div class="p-3 border" style="text-align: center; background-color: #24a0ed;">Table Report</div></a>
				</div>
				<div class="col-6">
					<a href="GraphicReport.php"><div class="p-3 border" style="text-align: center; background-color: #D3D3D3">Graphic Report</div></a>
				</div>
			</div>
		</div>
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	</body>
</html>