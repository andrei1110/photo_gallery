<div class="container enter-box">
	<center>

		<div class="col-sm-4 col-md-4 col-xs-4">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="sign-in" data-toggle="tab" href="#sign-in-form" role="tab" aria-controls="sign-in" aria-selected="true">Acessar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="sign-up" data-toggle="tab" href="#sign-up-form" role="tab" aria-controls="sign-up" aria-selected="false">Registro</a>
				</li>
			</ul>
		</div>

	<div class="tab-content" id="myTabContent">

		<!--- SIGN UP FORM -->
		<div div class="tab-pane fade col-sm-4 col-md-4 col-xs-4" id="sign-up-form" role="tabpanel" aria-labelledby="sign-up">
		<br/>
		<form class="form-signin text-center" action="src/model/signup.php" method="POST">
			<i class="fa fa-user-plus fa-4x" aria-hidden="true"></i>
			<h1 class="h3 mb-3 font-weight-normal">Registrar</h1>
			<label for="up-name" class="sr-only">Nome</label>
			<input type="text" id="up-name" name="up-name" class="form-control" placeholder="Nome Completo" pattern=".{5,60}" required autofocus>
			<label for="up-email" class="sr-only">E-mail</label>
			<input type="email" id="up-email" name="up-email" class="form-control" placeholder="E-mail" required>
			<label for="up-password" class="sr-only">Senha</label>
			<input type="password" id="up-password" name="up-password" class="form-control" placeholder="Senha (Mín. 6 caracteres)" required pattern=".{6,60}">
			<br/>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
		</form>
		</div>

		<!--- SIGN IN FORM -->
		<div class="tab-pane fade show active col-sm-4 col-md-4 col-xs-4" id="sign-in-form" role="tabpanel" aria-labelledby="sign-in">
			<br/>
			<?php
			//mensagens de erros
				if(isset($_SESSION['login']['failed']) && $_SESSION['login']['failed'] == 1){

					$message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  								Nome de usuário e/ou senha incorreto(s).
	  								<button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
	    								<span aria-hidden="true">&times;</span>
	  								</button>
								</div>';
					echo $message;
					session_destroy();
				}
				if(isset($_GET['suError'])){

					$message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';

					if($_GET['suError'] == 'miss') $message .= 'Por favor, preencha o cadastro corretamente.';
					if($_GET['suError'] == 'email') $message .= 'E-mail já cadastrado.<br/>Por favor, faça o login.';


	  				$message .= '<button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
	    				<span aria-hidden="true">&times;</span>
	  				</button>
					</div>';
					echo $message;
					session_destroy();
				}
			?>
			<form class="form-signin text-center" action="src/model/login.php" method="POST">
				<i class="fa fa-sign-in fa-4x" aria-hidden="true"></i>
				<h1 class="h3 mb-3 font-weight-normal">Entrar</h1>
				<label for="in-email" class="sr-only">E-mail</label>
				<input type="email" name="in-email" id="in-email" class="form-control" placeholder="E-mail" required autofocus>
				<label for="in-password" class="sr-only">Senha</label>
				<input type="password" name="in-password" id="in-password" class="form-control" placeholder="Senha" required>
				<br/>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
			</form>
		</div>
	</div>
	</center>
</div>