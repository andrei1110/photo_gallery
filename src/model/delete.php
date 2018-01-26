<?php
	
	require_once ('conn.php');
	session_start();

	$sql = "SELECT name, local FROM file WHERE user = ".$_SESSION['login']['user']['id']." AND id = ".$_GET['file_id'];

	$res = $conn->query($sql);
	$res = $res->fetch(PDO::FETCH_OBJ);

	$res->local = '../../'.$res->local;

	unlink($res->local.$res->name);

	$sql = "DELETE FROM file WHERE user = :user AND id = :id";

	$del = $conn->prepare($sql);
	$del->bindParam(':id', $_GET['file_id'], PDO::PARAM_INT); 
	$del->bindParam(':user', $_SESSION['login']['user']['id'], PDO::PARAM_INT); 

	$del->execute();

	header("Location: ../../index.php");

?>