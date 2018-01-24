<?php
	session_start();
	session_destroy();
	session_start();

	require_once("../control/defines.php");
	
	include BASE_DIR . 'src' . DS . 'model'. DS . 'conn.php';

	if(!isset($_POST['up-name']) || !isset($_POST['up-email']) || !isset($_POST['up-password'])){
		header("Location: ../../index.php?suError=miss");
	}

	$name = $_POST['up-name'];
	$email = $_POST['up-email'];
	$password = $_POST['up-password'];

	//verificar se e-mail já está cadastrado.
	$sql = "SELECT name, email
				  FROM user
				  WHERE email = '".$email."'";

	$res = $conn->query($sql);

	if($res->rowCount() > 0){
		echo 'entrou';
		header("Location:../../index.php?suError=email");
	}

	//inserir novo usuário no banco de dados
	$sql = "INSERT INTO user(
							 name,
							 email,
							 password)
						VALUES(
							   :name,
							   :email,
							   :password)";

	$prep = $conn->prepare($sql);

	$prep->bindParam(':name', $name, PDO::PARAM_STR);
	$prep->bindParam(':email', $email, PDO::PARAM_STR);
	$prep->bindParam(':password', $password, PDO::PARAM_STR);

	$prep->execute();

	$newId = $conn->lastInsertId();

	//cria os diretórios para os arquivos do novo usuário
	mkdir("../../uploads/".$newId."");
	mkdir("../../uploads/".$newId."/images");
	mkdir("../../uploads/".$newId."/docs");

	$_POST['in-email'] = $email;
	$_POST['in-password'] = $password;

	require_once("login.php");

?>