<!DOCTYPE html>
<html>
<head>
	<title>My First Webpage</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html: charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div>
	<?php 

	$names = array("Fred", "Ian", "Rob");

		if ($_POST['submit']) {
			if ($_POST['name']) {
				foreach ($name as $name) {
					echo "I know you! Your name is ".$name;
					$knowYou = 1;
				}
			}
			if (!$knowYou)
				echo "I don't know you. ".$_POST["name"];
		}
		else {
			echo "I don't know you.";
		}
	}
?>

<form method="post">
	<label for="name">Name</label>
	<input type="text" name="name">
	<input type="submit" name="submit" value="Submit your name">
</form>
</div>
</body>
</html>