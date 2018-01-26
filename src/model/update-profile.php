<?php

	session_start();
	require_once("conn.php");

	$name = $_POST['update_name'];
	$email = $_POST['update_email'];
	$password = $_POST['update_password'];
	if($password != '!DONTUPDATE!') $sql = "UPDATE user SET name = :name, email = :email, password = :password WHERE id = :id";
	else $sql = "UPDATE user SET name = :name, email = :email WHERE id = :id";

	$up = $conn->prepare($sql);

	$up->bindParam(':name', $name, PDO::PARAM_STR);
	$up->bindParam(':email', $email, PDO::PARAM_STR);
	if($password != '!DONTUPDATE!') $up->bindParam(':password', $password, PDO::PARAM_STR);
	$up->bindParam(':id', $_SESSION['login']['user']['id'], PDO::PARAM_INT);

	$up->execute();

	$_SESSION['login']['user']['name'] = $name;
	$_SESSION['login']['user']['email'] = $email;

	echo '<div class="alert alert-info" role="alert">';
		echo 'Perfil atualizado com sucesso.<br/><a href="index.php">Clique aqui</a> para atualizar a página.</a>';
	echo '</div>';
?>