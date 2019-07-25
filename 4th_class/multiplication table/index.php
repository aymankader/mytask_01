
<!DOCTYPE html>
<html>
<head>
	<title>
		multiplication table 
	</title>
</head>
<body>

<?php 
echo "<h2> multiplication table 1 to 10</h2>";

for ($i=1; $i <=10 ; $i++) { 
	for ($j=0; $j <=10 ; $j++) { 
		echo "$i x $j =".($i*$j)."<br>";
	}
}



 ?>



</body>
</html>