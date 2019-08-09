
<?php
//session_start();
include('verifica_login.php');
include('conexao.php');

$sql = "select idpartitura,nome, caminho,naipe from paritura ";
    $result = mysqli_query($conexao,$sql);

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
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="areaMaestro.php">Area do Maestro</a>
        
      </div>
      <div class="sidebar-header">
        
        <div class="user-info">
          <span class="user-name">
            <strong><?php echo $_SESSION['nome'];?></strong>
          </span>
          <span class="user-role"><?php echo $_SESSION['naipe'];?></span>
          
        </div>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li>
          <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a data-toggle="collapse" href="#collapse1">Cadastrar</a>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body ml-3"><a href="cadastroMusico.php">Musico</a></div>
                <div class="panel-footer ml-3"><a href="cadastroPartitura.php">Partitura</a></div>
                </div>
            </div>
            </div>
            </li> 
            <li>
          <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a data-toggle="collapse" href="#collapse2">Hinos</a>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-footer ml-3"><a href="#">Avulsos</a></div>
                <div class="panel-footer ml-3"><a href="#">Cantor Cristão</a></div>
                <div class="panel-footer ml-3"><a href="#">Dobrados</a></div>
                <div class="panel-body ml-3"><a href="#">Harpa Cristã</a></div>
                </div>
            </div>
            </div>
            </li> 
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav> 
  <!-- sidebar-wrapper  -->
  <main class="page-content">
            <div class="container-fluid">
                <h3 class="h3">Cadastro de Partitura</h3>
                <?php 
                    if (isset($_SESSION['partitura_cadastro'])){
                    ?>
                    <div class="notification is-success">
                      <p>Partitura Cadastrada!</p>
                    </div>
                    <?php 
                    };
                    unset($_SESSION['partitura_cadastro']);
                    ?>
                  <form class="form-group" method="post" action="uploadPartitura.php" enctype="multipart/form-data">

                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="arquivo" name="arquivo" lang="pt" required>
                          <label class="custom-file-label" for="file">selecione o arquivo</label>
                      </div>  
                      
                      <div class="row">
                        <div class="col">
                            <label for="nome" class="label mr-1">Nome:</label>
                            <input type="text" name="nome" placeholder="digite o nome" class="form-control" required>
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
                        <div class="col">
                            <label for="tipo" class="label mr-1">Tipo:</label>
                            <select name="tipo" id="tipo" class="custom-select" required>
                                                <option value="" class="op" id="op" disable selected>selecione o tipo do hino</option>
                                                <option value="0">Avulso</option>
                                                <option value="1">Cantor Cristão</option>
                                                <option value="2">Dobrados</option>
                                                <option value="3">Harpa Cristã</option>
                                                
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

