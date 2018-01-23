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
<div class="container-fluid container-home">
	<div class="row">
		<!-- Sidebar -->
		<nav class="col-md-2 d-none d-md-block bg-light sidebar">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
					<a class="nav-link active" href="#">
					<span data-feather="home"></span>
					Home
					</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#">
					<span data-feather="file"></span>
					Configurações
					</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Main container -->
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
			<center>

				<form action="/upload" class="dropzone needsclick dz-clickable col-md-9 col-xs-9 col-sm-9" id="file-upload">
				<div class="dz-message needsclick">
					<i class="fa fa-upload fa-3x" aria-hidden="true"></i><br/>
					<br/>
					Clique ou arraste algum arquivo aqui.<br/>
				</div>
				</form>

			</center>
		</main>
	</div>
</div>