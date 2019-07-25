
<!DOCTYPE html>
<html>
<head>
	<title>sum 1 to 4 using loop</title>
</head>
<body>
	<?php 

	echo "<h2>sum of 1+2+3+4=?<br></h2>";
	$sum = 0;

	for ($i=1; $i <5 ; $i++) { 
		$sum = $sum + $i;
	}
	echo "sum of 1+2+3+4 = $sum";

	 ?>

</body>
</html>