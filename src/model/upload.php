<?php
	session_start();
	require_once("defines.php");
	include BASE_DIR . 'src' . DS . 'model'. DS . 'conn.php';

	//define o tipo de arquivo
	if(isset($image) && $image == 1) $type = "image";
	else $type = "doc";

	$sql = "INSERT INTO file (name, local, type, user, size";

	if($type == "image") $sql.= ", img_h, img_w";

	$sql.=") VALUES (:name, :local, :type, :user, :size";

	if($type == "image") $sql.= ", :height, :width";

	$sql .= ")";

	$prep = $conn->prepare($sql);

	$prep->bindParam(':name', $file_name, PDO::PARAM_STR);
	$prep->bindParam(':local', $file_path, PDO::PARAM_STR);
	$prep->bindParam(':type', $type, PDO::PARAM_STR);
	$prep->bindParam(':user', $_SESSION['login']['user']['id'], PDO::PARAM_STR);
	$prep->bindParam(':size', $size, PDO::PARAM_STR);

	if($type == "image"){
		$prep->bindParam(':height', $height, PDO::PARAM_STR);
		$prep->bindParam(':width', $width, PDO::PARAM_STR);
	}

	$prep->execute();

?>