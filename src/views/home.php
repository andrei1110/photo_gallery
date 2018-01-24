<?php
	if(!isset($_SESSION['login']['active']) && $_SESSION['login'][active] != 1){
		header("Location:../../index.php");
	}
?>

<!-- Top navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #007bff">
	<a class="navbar-brand" href="#">Galeria de Fotos</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active" style="color: #ccc">
				Galeria de <?php echo $_SESSION['login']['user']['name']; ?>
			</li>
		</ul>
		<div class=" mt-2 mt-md-0">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="src/control/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

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