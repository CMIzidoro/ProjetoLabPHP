<?php
session_start();
if(empty( $_SESSION['nome'])){  ?>
 <!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="CSS/menu.css">
      <link rel="stylesheet" type="text/css" href="CSS/logo.css">
        <title>Inicio</title> 
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <!-- Os Bag do CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
  <body>
<!-- Div do menu não linkei nada ainda-->
<div id="menu">
  <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
        <li><a href="Calculo.php">Calculo</a></li>
        <li><a href="Consultar.php">Consultar</a></li>
        <li><a href="perfil.php">Perfil</a></li>
      <li><a href="Login.php">Entrar</a></li>
    </ul>          
  </nav>
</div>

<div class="container">
  <div class="row">
    <div class="col"><h2>Nossa missão </h2><p>Essa aplicação é voltada em 
      calcular e armazenar os dados de salário 
        líquido, vale transporte, inss, imposto de 
          renda retido na fonte (IRRF)
            fundo de garantia de tempo de serviço (FGTS) 
            utilizando como base os 
          dados de salário contribuição e número de 
        dependentes de um usuário 
      previamente cadastrado no sistema.</p>
    </div>
  <div class="col"><img src="img/marca.gif" alt="Logo"  ></div>  
    <div class="w-100"></div>
    <div class="col"></div>
    <div class="col"></div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{ 
 
  include_once('PHP/header.php'); 
  
}
?>
  