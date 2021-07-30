<?php
session_start();
if(empty( $_SESSION['nome'])){  ?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="CSS/menu.css">
      <link rel="stylesheet" type="text/css" href="CSS/logo.css">
        <title>Calculo</title> 
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
      <li>><a href="index.php">Inicio</a></li>
        <li><a href="Calculo.php">Calculo</a></li>
        <li><a href="Consultar.php">Consultar</a></li>
        <li><a href="perfil.php">Perfil</a></li>
      <li><a href="Login.php">Entrar</a></li>
    </ul>          
  </nav>
</div>

<div class="container">
    <div class="row justify-content-md-center">
      
      <div class="col-md-auto">
        <br/>
        <br/>
        <h1>Calculos </h1>
      </div>
    </div>
<br/><br/><br/><br/>

<div class="row">

    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/Tabela-IRRF.jpg"alt="Imagem de capa do card"height="200">
                <div class="card-body">
                    <h5 class="card-title">IRRF</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="Calculos/irrf.php" class="btn btn-primary">Visitar</a>
                </div>
          </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/fgts-05-1551470025982_v2_615x300.png" alt="Imagem de capa do card"  height="200">
                <div class="card-body">
                    <h5 class="card-title">FGTS</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="Calculos/fgts.php" class="btn btn-primary">Visitar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/unnamed.jpg" alt="Imagem de capa do card"height="200">
                <div class="card-body">
                    <h5 class="card-title">Salario</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="Calculos/salario.php" class="btn btn-primary">Visitar</a>
                </div>
            </div>
        </div>
        
      </div>
      <br>
      <br>
      <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/original-2c8798bcd96b41b36151f03c0ba7b98f.png" alt="Imagem de capa do card"height="200">
                <div class="card-body">
                  <h5 class="card-title">Vale Transporte</h5>
                  <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                  <a href="Calculos/vt.php" class="btn btn-primary">Visitar</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/d376362ee1422333a4221f33a77cae06.png" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">INSS</h5>
                  <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                  <a href="Calculos/inss.php" class="btn btn-primary">Visitar</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/gato-secretario.jpg" alt="Imagem de capa do card"height="180">
                <div class="card-body">
                  <h5 class="card-title">Precisa de ajuda ?</h5>
                  <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                  <a href="#" class="btn btn-primary">Visitar</a>
                </div>
              </div>
        </div>
      </div>
    </div>
    
      


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{ 
 
  include_once('PHP/LogCalculo.php'); 
  
}
?>