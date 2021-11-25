<!DOCTYPE html>
<html lang='pt-br'>
<head>

  <!--Inclui arquivo com link de folhas de estilo -->

  <?php

    include_once('cssbase.php');

  ?>

  <!--Metadados-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">

	<title>Login</title>

</head>

<body>

<!-- Caixa de login -->

<div class="background hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center text-primary">
        <a href="#" class="h1"><b>taskmanager</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Faça login para continuar</p>

        <!-- Formulário de login -->

        <form action="#" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-7">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Lembrar do Usuário
                </label>
              </div>
            </div>

            <!-- Função esqueci a senha -->
            <p class="col-5 text-center p-1">
              <a href="forgot-password.html">Esqueci a Senha</a>
            </p>

              <!-- /.col -->
          </div>
          <div class="col-12 p-0">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
            
        </form>

        <div class='mt-1'>
          <p class="mb-0 btn btn-secondary col-12">
            <a href="register.php" class="text-center text-light">Registrar</a>
          </p>
        </div>

      </div>

    </div>

  </div>

</div>

<!-- Inclui arquivo com links de script necessários -->

<?php  
include_once('scripts.php');
?>

</body>

</html>