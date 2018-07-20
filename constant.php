<!DOCTYPE>

<html>
		<head>
				<title>Name</title>
		</head>
		<body>

		<?phph ?>

		<?php
			$Name = 45;

			define("Value_of_Pi",3.14);  //Defining constants

			define("Value_of_Gravity",9.8);

			echo "Pi value: " . Value_of_Pi; 

			echo " <br>";
			
			echo "G Value: " . Value_of_Gravity;

		?><hr>

		<?php
			//Value_of_Pi = 45 + 89;
			//echo Value_of_Pi;

			//define("Value_of_Pi",1000);
			//echo "Pi Value: " . Value_of_Pi;

			//Above both will give error.
			
			//So, value of a constant cannot be changed later once it has been declared.
		?>

		</body>
</html>