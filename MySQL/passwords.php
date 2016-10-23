<?php
	//Level 2
	md5("password");
	md5("ilsefuhi&^hdfu893745");

	//Level 3
	$salt = "iefuj827485jdjfi3827";
	md5($salt."iefuj827485jdjfi3827");
	md5($salt."password");

	//Level 4
	md5(md5($row['id'])."password");
?>