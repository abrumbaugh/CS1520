<?php

	include 'ParentClass.php';
	include 'ChildClass.php';

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3: What superhero are you?</title>
	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<form class="form" method="post" action="">
		<fieldset>
			<legend>Assignment 3: What superhero are you?</legend>
				<label>First Name:</label>
				<input type="text" name="fname"><br>
				<label>Last Name:</label>
				<input type="text" name="lname"><br>
				<input type="submit" value="Find out">

				<?php
					if (isset($_POST['fname'])) {
						$firstName = $_POST['fname'];
						$lastName = $_POST['lname'];

						$heroArray = array("Batman", "Deadpool", "Superman", "Ironman", "Captain America",
							"Black Widow", "Hulk", "Spiderman", "Wonder Woman", "Thor");
						$villainArray = array("Thanos", "Magneto", "Lex Luther", "Loki", "Death Stroke",
							"Cat Woman", "Poison Ivy", "Venom", "Joker", "Ultron");

						$randomSuperhero = $heroArray[array_rand($heroArray)];
						$randomVillain = $villainArray[array_rand($villainArray)];

						$result = new ChildClass($firstName, $lastName, $randomSuperhero, $randomVillain);

						echo '<hr>' . $result;
					}
				 ?>

</body>
</html>
