<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<!--Links do CSS, qualquer coisa ta na pasta login CSS-->
<link rel="stylesheet" type="text/css" href="CSS/login.css">
<link rel="stylesheet" type="text/css" href="CSS/logo.css">

  <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Chamando os Recurso do BootStrap, usei o css, mas... é aquele ditado uso desodorante e perfume-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <!-- Div do menu não linkei nada ainda-->
  <div id="menu">
    <nav>
      <ul>
        <li><a href="Index.php">Inicio</a></li>
        <li><a href="Calculo.php">Calculo</a></li>
        <li><a href="Consultar.php">Consultar</a></li>
        <li><a href="perfil.php">Perfil</a></li>

        
      </ul>          
    </nav>
  </div>
<!--Logo tentei colcoar a imagem numa pasta mas da bug-->
  <figure class="logo">
    <img src="img/marca.gif" alt="Logo" >
  </figure>
  
  <div class="login">    
    <h1>Login</h1>
    <?php
      if(isset($_SESSION['erro'])):
      ?>
      <div>
        <p>Usuario ou senha invalidos</p>
        <br/>
      </div>
      <?php
      unset($_SESSION['erro']);
      endif;
      ?>
      <form action="PHP/login.php" method="POST">
      
        <p>Email</p>
        <input type="text" name="user" required>
        <p>Senha</p>
        <input type="password" name="senha" required >
        <input type="submit" name="" value="Entrar"><br>
        <a href="esqueci_senha.html">esqueceu a senha?</a><br>
        <a href="registrar.html">Ainda não possui uma conta ?</a>
      </form>
<!--Mais coisa do Boostrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>