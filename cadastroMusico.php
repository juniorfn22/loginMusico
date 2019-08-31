<?php
//session_start();
include('verifica_login.php');
include('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/areaMaestro.css">
    <script src="javascript.js"></script>

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <?php include('navBar.php') ?>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
            <div class="container-fluid">
                <h3 class="h3">Cadastro de Músico</h3>
                <?php 
                    if (isset($_SESSION['status_cadastro'])){
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                    </div>
                    <?php 
                    };
                    unset($_SESSION['status_cadastro']);
                    ?>

                    <?php 
                    if (isset($_SESSION['usuario_existe'])){
                    ?>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php 
                    };
                    unset($_SESSION['usuario_existe']);
                    ?>
                <form action="cadastrar.php" method="POST">
                      <div class="row">
                        <div class="col">
                            <label for="nome" class="label mr-1">Nome:</label>
                            <input type="text" name="nome" placeholder="digite o nome" class="form-control" required>
                      </div>
                      <div class="col">
                            <label for="login" class="label mr-1">Usuário:</label>
                            <input type="text" name="usuario" placeholder="digite o usuario" class="form-control" required>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col">
                            <label for="senha" class="label mr-1">Senha:</label>
                            <input type="password" name="senha" placeholder="digite a senha" class="form-control" required>
                        </div>  
                      <div class="col">
                            <label for="nome" class="label mr-1">Naipe:</label>
                            <select name="naipe" id="naipe" class="custom-select" required>
                                                <option value="" class="op" id="op" disable selected>selecione o naipe</option>
                                                <option value="0">Maestro</option>
                                                <option value="1">1º Clarinete</option>
                                                <option value="2">2º Clarinete</option>
                                                <option value="3">1º Trompete</option>
                                                <option value="4">2º Trompete</option>
                                                <option value="5">Flauta</option>
                                                <option value="6">Sax Alto</option>
                                                <option value="7">Sax Tenor</option>
                                                <option value="8">Trombone</option>
                                                <option value="9">Tuba Bb</option>
                                                <option value="10">Tuba Eb</option>
                                                <option value="11">Violino</option>
                            </select>
                      </div>
                      </div>
              <input type="submit" class="btn mt-2 btn-primary"  value="cadastrar"> 
          </form>
</div>

      
      

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>