<?php
	session_start();

	if(isset($_FILES['file'])) $file = $_FILES['file'];
	
	
	//se houver um arquivo selecionado
	if (!empty($file['name'])) {
		
 
    	// Verifica se o arquivo é uma imagem
    	if(preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $file["type"])){
     	   $image = 1;
   	 	}

   	 	//verificar se o arquivo é um pdf
   	 	else{
   	 		$file['type'] = str_replace('application/pdf', 'pdf', $file['type']);
   	 		if($file['type'] == 'pdf') $doc = 1;
   	 	}
   	 	if(!isset($doc) && !isset($image)){
   	 		$error = 1;
   	 	}

		// Se não houver nenhum erro
		if (!isset($error)) {

			// Pega as dimensões da imagem
			$dimension = getimagesize($file["tmp_name"]);

			if(isset($image) && $image == 1){
				$width = $dimension[0];
				$height = $dimension[1];
			}


			//pega o tamanho do arquivo em MB
			$size = ($file["size"]/1024)/1024;
		
			//pega extensão do arquivo
			preg_match("/\.(gif|bmp|png|jpg|jpeg|pdf){1}$/i", $file["name"], $ext);
 
        	//gera um nome único para a imagem
        	$file_name = md5(uniqid(time())) . "." . $ext[1];
 
        	//caminho de onde ficará o arquivo
        	if(isset($image) && $image == 1) $file_path = "../../uploads/".$_SESSION['login']['user']['id']."/images/";
        	if(isset($doc) && $doc == 1) $file_path = "../../uploads/".$_SESSION['login']['user']['id']."/docs/";
 
			//faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($file["tmp_name"], $file_path.$file_name);

			//adiciona imagem ao banco de dados
			require_once("../model/upload.php");
		}
	}
?>