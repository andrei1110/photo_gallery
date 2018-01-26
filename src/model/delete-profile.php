<?php
	session_start();

	require_once("../control/delete-dir.php");
	require_once("conn.php");

	$sql = "DELETE FROM user WHERE id = :id";

	$del = $conn->prepare($sql);
	$del->bindParam(':id', $_SESSION['login']['user']['id'], PDO::PARAM_INT); 

	$del->execute();

	header("Location: ../control/logout.php");
?>