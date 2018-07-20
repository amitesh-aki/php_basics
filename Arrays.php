<!DOCTYPE>

<html>
	<head>
		<title>Arrays</title>
	</head>

	<body>

		<?php

		$name = array('Sachin','Saurav','Rahul');
		echo $name[0]

		?>
		<br>

		<?php

		$Food = array('Pizza',10,15,array("Asian","French","German"),"Pasta");

		?>
		<br>

		<?php

		echo $Food[2]

		?>
		<br>

		<?php

		echo $Food[3][2]

		?>
		<br>

		<?php

		$Food[56] = "Apple";  //Giving some index to a new item in present array
		?>

		<br>

		<pre>	
		<?php

		echo print_r($Food);  //It will print the structure of present  array. <pre> makes structure look more clear. 

		?>
		<br>
		</pre>

	</body>
</html>