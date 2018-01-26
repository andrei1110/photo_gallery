<div class="modal fade" id="editProfile" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i> Editar Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="return-update"></div>
        <form class="form-signin text-center" action="src/model/signup.php" method="POST">
          <br/>
          <label for="up-name" class="sr-only">Nome</label>
          <input type="text" id="update-name" name="update-name" class="form-control" value="<?php echo $_SESSION['login']['user']['name']; ?>" placeholder="Nome Completo" pattern=".{5,60}" required autofocus>
          <br/>
          <label for="up-email" class="sr-only">E-mail</label>
          <input type="email" id="update-email" name="update-email" class="form-control" value="<?php echo $_SESSION['login']['user']['email']; ?>" placeholder="E-mail" required>
          <br/>
          <label for="up-password" class="sr-only">Senha</label>
          <input type="password" id="update-password" name="update-password" class="form-control" value="!DONTUPDATE!" placeholder="Senha (Mín. 6 caracteres)" pattern=".{6,60}">
          <br/>
          <a href="#modal-delete-profile" class="btn btn-danger" data-toggle="modal">Excluir Perfil</a>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onClick="updateProfile()">Salvar Alterações</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-delete-profile" tabindex="-1" role="dialog" aria-labelledby="modalForDeleteProfile" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="image">
  <div class="modal-content">
  <div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Excluir perfil</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <div class="modal-body">
    Olá <?php echo $_SESSION['login']['user']['name']; ?>. Tem certeza que deseja excluir seu perfil?
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
  <a href="src/model/delete-profile.php" class="btn btn-danger">Excluir</a>
  </div>
  </div>
  </div>
</div>