<?php
	require_once("conn.php");

	$query = "SELECT *
				  FROM file
				  WHERE user = '".$_SESSION['login']['user']['id']."' AND type= 'doc'";

	$files = $conn->query($query);
?>