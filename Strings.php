<!DOCTYPE>
<html>
		<head>
				<title>Strings</title>
		</head>
		<body>

		<?php
		echo "My name is Amitesh Kumar <br>";

		echo "My age is 14 <br>";
		
		$color = "red";
		
		$shirt = "sleev-less";
		
		$combination = $color." ".$shirt; //Connecting variables
		echo "$combination <br>";

		echo "$color is my Fav <br>";
		?>

		<?php
		//echo "colois my Fave <br>"; will give an error
		echo "{$color}is my Fav <br>";// This won't give an error

		?>

	</body>
</html>	