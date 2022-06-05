<?php 

   include("conn.php");
   setcookie("login",null);

   if(isset($_POST['logar'])) {

      $email = mysqli_real_escape_string($mysqli,$_POST['email']);
      $senha = mysqli_real_escape_string($mysqli,$_POST['senha']); 
      
      $Pega_usuario = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
      $executa_pega_usuario = mysqli_query($mysqli,$Pega_usuario);
      $conta_usuarios = mysqli_num_rows($executa_pega_usuario);
      $assoc_pega_usuario=mysqli_fetch_assoc($executa_pega_usuario);


      if($conta_usuarios == 1) {
        $pega_usuario_logado = $assoc_pega_usuario['id'];
        setcookie("login",$pega_usuario_logado);
        echo '<script>window.location="index.php"</script>';
      }else{
          $pega_funcionario = "SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha'";
          $executa_Funcionario = mysqli_query($mysqli, $pega_funcionario);
          $num_funcionarios = mysqli_num_rows($executa_Funcionario);
          $assoc_funcionario = mysqli_fetch_assoc($executa_Funcionario);
          $nivel = $assoc_funcionario['nivel'];

          if ($num_funcionarios == 1) {
            if ($nivel == 'Admin') {
              $pega_usuario_logado = $assoc_funcionario['id'];
              setcookie("login",$pega_usuario_logado);
              header("location:index_admin.php");
            }elseif ($nivel == 'Outro') {
              $pega_usuario_logado = $assoc_funcionario['id'];
              setcookie("login",$pega_usuario_logado);
              header("location:index_outro.php");
            }
            
          }else{
            header("location:login.php?error=1");
          }
      }
    }
?>





