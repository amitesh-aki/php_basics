<!DOCTYPE>

<html>
	<head>
		<title>StringsFunctions</title>
	</head>

	<body>
	
		<?php
		// Connecting string using variables
		$phrase1 = "student who come late";
		$phrase2 = " in class sit in the last with Rock";

		$combine = $phrase1; //Putting the value of phrase1 into combine
		$combine .= $phrase2; //Adding one more value of phrase2 into combine

		echo "Original full string: $combine <br>";
		?> 

		<br><hr>
		<?php//<hr> for horizontal line?>

		Uppercase first: <?php echo ucfirst($combine); ?><br>
		<?php//ucfirst will pick our combine string that we created on line 18 and it's going to converts first letter of that string to uppercase.?>

		Uppercase words: <?php echo ucwords($combine); ?><br>
		<?php//The whole string's first letters will be uppercase now, i.e., "Student Who Come Late"?>

		Lowercase: <?php echo strtolower($combine); ?><br>
		<?php//We will make our string back into lowercase which we have made into upercase on line 23?>

		Uppercase: <?php echo strtoupper($combine); ?><br>
		<?php//We are again going to convert the string into uppercase.?>
		
		<br><hr>

		Repeat: <?php echo str_repeat($combine, 3); ?><br>
		<?php//This will repeat the string 3 times.?>

		Make substring from one point to another: <?php echo substr($combine, 5,10); ?><br>
		<?php//Showing from letter lenght 5 to 10 from string combine.?>

		Find position of any specific word: <?php echo stripos($combine, "come"); ?><br>
		<?php//Find position of any specific word on given string?>

		Find character: <?php echo strchr($combine, "R"); ?><br>
		<?php//Find any character in the string?>

		<br> <hr>

		Total Length of String: <?php echo strlen($combine); ?><br>
		<?php//String length?>

		Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br>
		<?php// "." concatenates string. A will fill the blank space before B and E will fill the place after D?>

		Finf specific and show after: <?php echo strstr($combine, "come"); ?><br>
		<?php//Find any specific word and show the rest after it?>

		Replace word with new: <?php echo str_replace("sit", "stand", $combine); ?><br>
		<?php//We can choose any word and replace it with another word in any given string ?>

		<br><hr>

	</body>
</html>
