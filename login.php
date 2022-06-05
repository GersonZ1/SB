<?php 
   include("login_controler.php");
   if (isset($_GET['error'])) {
    echo '<button class="alert" id="alert">
                  <span>Erro: Usuário ou senha inválida!</span>
          </button>';
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Standard Bank || Login</title>

    <!-- Bootstrap -->
    <link href="bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="bootstrap/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="bootstrap/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="bootstrap/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="bootstrap/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="#">
              <h1>
                  <img src="img/logo.png" style="width:4em;height:3.8em;  margin-top: -2em;border-radius: 50%;">
              </h1>
              <h1>Iniciar Sessão</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" name="email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Senha" name="senha" required="" />
              </div>
              <div>
                <input class="btn btn-default submit" type="submit" name="logar" value="Acessar">
                <a class="reset_pass" href="#">Esqueci a senha</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1></i></h1>
                  <p>Standard Bank Mozambique ©2022 Todos os Direitos Reservados.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Criar Conta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Tem uma conta? ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
