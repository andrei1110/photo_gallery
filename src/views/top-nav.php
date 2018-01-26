<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #007bff">
	<a class="navbar-brand" href="index.php">Galeria de Arquivos</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			
		</ul>
		<div class=" mt-2 mt-md-0 offset-md-2" style="padding-right: 10px;">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user" aria-hidden="true"></i>  
						<?php echo $_SESSION['login']['user']['name']; ?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#editProfile" data-toggle="modal"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="src/control/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>