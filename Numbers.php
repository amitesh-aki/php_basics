<!DOCTYPE>

<html>
	<head>
		<title>Numbers</title>
	</head>

	<body>

		<?php
		$FirstNumber = 3;  //Integer
		$SecondNumber = 4;  //Integer
		$ThirdNumber = 3.14;  //Float
		?>
		<br>

		<?php echo $ThirdNumber+9-6; ?>
		<br>

		<?php echo 3.14/7; ?>
		<br>

		Dividing by zero:
		<?php echo 3/0; ?>
		<br>

		Ceil:
		<?php 
		// Finding ceiling and floor of any number
		echo ceil($ThirdNumber);
		?>
		<br>

		Floor:
		<?php
		echo floor($ThirdNumber); 
		?>
		<br>

		<?php
		echo "is {$FirstNumber} :integer,". is_int($FirstNumber);
		?>
		<br>

		<?php
		echo "is {$ThirdNumber} :integer,". is_int($ThirdNumber);
		?>
		<br>

		<?php
		echo "is {$FirstNumber} :float,". is_float($FirstNumber);
		?>
		<br>

		<?php
		echo "is {$ThirdNumber} :integer,". is_float($ThirdNumber);
		?>
		<br>

		<?php
		echo "is {$FirstNumber} :Numeric,". is_numeric($FirstNumber);
		?>
		<br>

		<?php
		echo "is {$ThirdNumber} :Numeric,". is_numeric($ThirdNumber);
		?>
		<br>

		Binary:
		<?php
		echo decbin(3);  //Decimal to binary conversion
		?>
		<br>

		Decimal:
		<?php
		echo bindec(11);
		?>
		<br>

		Absolute value:
		<?php
		echo abs(-50+100);
		?>
		<br>

		Square:
		<?php
		echo sqrt(8); 
		?>
		<br>

		Power:
		<?php
		echo pow(2,10); //power
		?>
		<br>

		Modulus:
		<?php
		echo fmod(15,7); //modulus %
		?>
		<br>

		Random in range(500,1600):
		<?php
		echo rand(500,1600);  //selecting a random number between a given range of numbers
		?>
		<br>

		Random:
		<?php
		echo rand();  //Any random number
		?>
		<br>
 
		<?php
		echo $SecondNumber = $SecondNumber+2 
		?>
		<br>

		Increment:
		<?php
		$SecondNumber++; echo $SecondNumber;
		?>
		<br>
		
		Decrement:
		<?php
		$SecondNumber--; echo $SecondNumber;
		?>
		<br>

	</body>
</html>