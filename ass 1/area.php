<!doctype html>
<html>
<head>
	<title>Rectangle Area Result</title>
</head>
<body>
	<h1>Rectangle Area Result</h1>
	<?php
	$height = $_POST['height'];
	 $breadth = $_POST['breadth'];
	
	$area = $height * $breadth;

echo "Area of the rectangle with height $height and breadth $breadth = $area";
?>
</body>
</html>
