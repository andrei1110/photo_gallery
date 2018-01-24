<?php
	require_once("conn.php");

	$query = "SELECT *
				  FROM file
				  WHERE user = '".$_SESSION['login']['user']['id']."'";

	$files = $conn->query($query);
?>