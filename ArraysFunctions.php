<!DOCTYPE>

<html>
	
	<head>

		<title>ArraysFunctions</title>

	</head>

		<body>

			<?php ?> 
			<br>

			<?php

			$color = array("red","green","blue");

			array_pop($color);
			
			array_pop($color);

			array_push($color,"black","white");

			print_r($color);

			?>
			<br>

			<?php

			$Numbers = array(13,54,6,89,100,15,12,100)

			?>
			<br>

			<?php

			echo count($Numbers);

			?>
			<br>

			<?php

			echo max($Numbers);

			?>
			<br>

			<?php

			echo min($Numbers);

			?>
			<br>

			<?php
 
			echo in_array(100,$Numbers);  //Find out any item in array

			?>
			<br>

			<?php

			echo sort($Numbers);

			?>
			<br>

			<?php

			print_r($Numbers);

			?>
			<br>

			<?php

			echo rsort($Numbers);

			?>
			<br>

			<?php

			print_r($Numbers);

			?>
			<br>

			Impolde:
			<?php

			// The implode() function return a string from the elements of an array.

			$Quote = array("Never","Give","Up","in","Life");

			?>
			<br>

			<?php

			echo implode(" ",$Quote);

			?>
			<br>

			Expolde:
			<?php

			// The exlode() function breaks a string into an array.

			$Quote2 = "Never Give Up in Life";
			print_r (explode(" ",$Quote2));

			?>
			<br>
			
		</body>

</html>