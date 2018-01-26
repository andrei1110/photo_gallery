<?php
	if(!isset($_SESSION['login']['active']) && $_SESSION['login'][active] != 1){
		header("Location:../../index.php");
	}
?>

<!-- Top navbar -->
	<?php include("src/views/top-nav.php"); ?>

!<!-- Home container -->
<center>
	<div class="container-home">
		

		<!-- Main container -->
		<main role="main" class="col-sm-12 col-md-12 col-xs-12">
			
			<!-- UPLOAD Form -->
			<?php include("src/views/upload.php"); ?>

			<?php include("src/views/gallery.php"); ?>

		</main>

	</div>
</center>

<!-- Editar perfil -->
<?php include("src/views/edit-profile.php"); ?>