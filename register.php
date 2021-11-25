
<!DOCTYPE html>
<html lang="pt-br">
<head>

  <!--Inclui arquivo com link de folhas de estilo -->

  <?php
    include_once('cssbase.php');
  ?>

  <!--Metadados-->
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">

  <title>Registro</title>

</head>

<body class="background hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-primary text-center">
       <a href="index.php" class="h1"><b>taskmanager</b></a>
      </div>
      <div class="card-body"> 
        <p class="login-box-msg">Registrar um novo usuário </p>
        <form name="frmcadastro" id="frmcadastro" action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" required placeholder="Nome Completo">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" required placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name='senha1' id='senha1' type="password" class="form-control" required placeholder="Senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- Implementar futuramente!!!!

          <div class="input-group mb-3">
            <input name='senha2' id='senha2' type="password" class="form-control" required placeholder="Repetir a senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          -->
          
            <div class="col-8">
              <a class="text-secondary" data-toggle="modal" data-target="#modal-xl">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value='agree' required>
                  <label for="agreeTerms">  
                   Eu aceito os <spam class="text-primary"> termos</spam> 
                  </label>
                </div>
              </a> 
            </div>
       

          <div class="m-1">
            <button name="btnregistro" id="btnregistro" type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </form>
        <a href="index.php" class="text-center">Já possuo uma conta</a>
      </div>
    </div>
  </div>


<!-- Inclui arquivo com modal e texto de termos de uso -->

<?php
include_once('termosdeuso.php');
?>

<!-- Inclui arquivo com links de script necessários -->
  <?php  
  include_once('scripts.php');
  ?>

<!--Inclui scripts especificos da página-->
  <!--Script para validação de dados de cadastro-->
  <!--e utilização no modal para validar o checkbox-->
  <script type="text/javascript" src="js/cadastro.js"></script>

</body>
</html>
