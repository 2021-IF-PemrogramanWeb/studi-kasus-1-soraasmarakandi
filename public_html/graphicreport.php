<?php
require "Functions/LoginSession.php";
require "Functions/ConnectDB.php";

	$datas_count = 0;

	$result = mysqli_query($db,"SELECT * FROM tb_mahasiswa WHERE website LIKE '000webhostapp.com' ");
	$website_000webhostapp_com = mysqli_num_rows($result);
	$datas_count += mysqli_num_rows($result);

	$result = mysqli_query($db,"SELECT * FROM tb_mahasiswa WHERE website LIKE '.gcoder.me' ");
	$website_gcoder_me = mysqli_num_rows($result);
	$datas_count += mysqli_num_rows($result);

	$result = mysqli_query($db,"SELECT * FROM tb_mahasiswa WHERE website LIKE '.my.id' ");
	$website_my_id = mysqli_num_rows($result);
	$datas_count += mysqli_num_rows($result);
	
	$result = mysqli_query($db,"SELECT * FROM tb_mahasiswa WHERE website LIKE '.xyz' ");
	$website_xyz = mysqli_num_rows($result);
	$datas_count += mysqli_num_rows($result);

	$result = mysqli_query($db,"SELECT * FROM tb_mahasiswa WHERE website IS NOT NULL");
	$website_other = mysqli_num_rows($result) - $datas_count;
	$datas_count += mysqli_num_rows($result);

	$result = mysqli_query($db,"SELECT * FROM tb_mahasiswa WHERE website IS NULL");
	$website_null = mysqli_num_rows($result);

	array_push($dataPoints,array("y"=>$mahasiswas["height"], "label"=>$mahasiswas["name"]));
	$dataPoints = array(
		array("y" => $website_000webhostapp_com, "label" => "000webhostapp.com"),
		array("y" => $website_gcoder_me, "label" => "gcoder.me"),
		array("y" => $website_my_id, "label" => "my.id"),
		array("y" => $website_xyz, "label" => ".xyz"),
		array("y" => $website_other, "label" => "other"),
		array("y" => $website_null, "label" => "NULL"),
	);
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