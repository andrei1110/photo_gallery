<?php
	session_start();
	session_destroy();
	session_start();
	require_once("conn.php");

	//$_POST['email'] = 'admin@admin.com'; $_POST['password'] = 'admin'; //test

	if(isset ($_POST['in-email']) && isset ($_POST['in-password'])){
		$email = $_POST['in-email'];
		$password = $_POST['in-password'];

		$query = "SELECT id, name, email
				  FROM user
				  WHERE email = '".$email."' AND password ='".$password."'";

		$res = $conn->query($query);

		if($res->rowCount() === 1){

			$result = $res->fetch(PDO::FETCH_OBJ);

			$_SESSION['login']['active'] = 1;
			$_SESSION['login']['user']['id'] = $result->id;
			$_SESSION['login']['user']['name'] = $result->name;
			$_SESSION['login']['user']['email'] = $result->email;

		}else{
			$_SESSION['login']['failed'] = 1;
		}
	}
	else{
		$_SESSION['login']['failed'] = 1;
	}
		// var_dump($_SESSION['login']); //test
	Header("Location:../../index.php");
?>