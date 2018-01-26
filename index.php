<?php 

session_start(); 
include("src/control/defines.php");

?>
<html lnag="pt-br">

<head>
<title>Galeria de Arquivos</title>
<link rel="stylesheet" href="path/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="path/dropzone/dropzone.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="path/dropzone/dropzone.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/script.js"></script>
</head>


<body>


<?php

	if(!isset ($_SESSION['login']['active']) || $_SESSION['login']['active'] != 1){
		include("src/views/sign_up_in.php");
	}

	if(isset($_SESSION['login']['active']) && $_SESSION['login']['active'] === 1){
		include("src/views/home.php");
	}
?>


<center>
	<p class="mt-5 mb-3 text-muted">Criado por Andrei Toledo. Todos os direitos reservados. &copy; 2018</p>
</center>

</body>
</html>