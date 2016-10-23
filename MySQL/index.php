<?php

	$link = mysqli_connect("localhost", "cl20-exampledb", "K7.7grb-Y", "cl20-exampledb");

	if (mysql-_connect_error()) {
		die("Could not connect to database");
	}

	$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Beth', 'beth@gmail.com', 'apples')";
	$query = "UPDATE `users` SET `email`='ian@hotmail.com' WHERE `id`=3 LIMIT 1";
	$query = "UPDATE `users` SET `email`='beth@hotmail.com' WHERE `id`=5 LIMIT 1";
	$query = "UPDATE `users` SET `name`='Bethany' WHERE `name`=Beth";
	$query  = "UPDATE `users` SET name='Ian O\ Neil' WHERE id=3 LIMIT 1";

	mysqli_query($link, $query);

	$query = "SELECT * FROM users";
	if ($result=mysqli_query($link, $query)) {
		$row = mysqli_fetch_array($result);
		print_r($row);
	} else {
		echo "It failed";
	}

	$query = "SELECT * FROM users";
	if ($result=mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_array($result)) {
			print_r($row);	
		}
		
	} else {
		echo "It failed";
	}

	$query = "SELECT * FROM users WHERE email LIKE '%h%'";
	if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_array($result)) {
			print_r($row);
		}
	} else {
		echo "It failed";
	}

	$query = "SELECT * FROM users WHERE name LIKE 'b%'";
	if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_array($result)) {
			print_r($row);
		}
	} else {
		echo "It failed";
	}

	$query = "SELECT * FROM users WHERE id<4 AND password!=''";
	if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_array($result)) {
			print_r($row);
		}
	} else {
		echo "It failed";
	}

	$query = "SELECT * FROM users WHERE id<4 OR password!=''";
	if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_array($result)) {
			print_r($row);
		}
	} else {
		echo "It failed";
	}	

	$query = "SELECT `name` FROM users;
	if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_array($result)) {
			print_r($row);
		}
	} else {
		echo "It failed";
	}

	$query = "SELECT `name` FROM users;
	if ($result = mysqli_query($link, $query)) {
		echo mysqli_num_rows($result);
		while ($row = mysqli_fetch_array($result)) {
			print_r($row);
		}
	} else {
		echo "It failed";
	}

	$query = "SELECT `name` FROM users WHERE name='".mysqli_real_escape_string($name)."'";
	if ($result = mysqli_query($link, $query)) {
		echo mysqli_num_rows($result);
		while ($row = mysqli_fetch_array($result)) {
			print_r($row);
		}
	} else {
		echo "It failed";
	}
?>