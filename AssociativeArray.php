<!DOCTYPE>

<html>
	<head>
		<title>Arrays</title>
	</head>

	<body>

		<?php

		// Keys and values in associative array, just like dictionary in python
		
		$color = array("A"=>"40","B"=>"Pizza");
		
		?>
		<br>	

		<?php

		echo $color["B"];
		
		?>
		<br>

		<?php

		$Food = array("Asian"=>"Pizza","Italian"=>"Biryani");  //Concatenation with associative array
		
		?>
		<br>

		<?php

		echo $Food["Asian"]. " is for " . $Food["Italian"];
		
		?>
		<br>

		<pre>
		<?php

		echo print_r($Food);
		
		?>
		<br>
		</pre>
	</body>
</html>