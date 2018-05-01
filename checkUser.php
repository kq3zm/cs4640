<?php 
	$post_data = file_get_contents("php://input");
	$data = json_decode($post_data);
	$checkUname = (string)$data->checkUname;
	$checkPass = (string)$data->checkPass;
	$xml=simplexml_load_file("users.xml") or die("Error: Cannot create object from XML file");
	foreach ($xml as $users) {
		$username = (string)$users->username;
		$password = (string)$users->password;
		if ($username == $checkUname && $password == $checkPass)
			header('X-PHP-Response-Code: 400', true, 400);
	}
?>