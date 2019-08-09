<?php
//session_start();
include('verifica_login.php');
include('conexao.php');

$sql = "select idpartitura,nome, caminho,naipe from partitura ";
    $result = mysqli_query($conexao,$sql);

?>

<!DOCTYPE html>
<html lang="en">

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
        <a href="#">Area do Músico</a>
        
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
          <li class="header-menu ">
            <span>Menu</span>
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
      <a href="logout.php">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    
    <!-- Modal extra grande -->
    <?php
            
            while ($row = mysqli_fetch_array($result)) {
                    
            
            echo '<button class="btn btn-dark mr-3" data-toggle="modal" data-target="#mymodal'.$row['idpartitura'].'">' . $row['nome'] .' </button>';
            $caminho = $row['caminho'];
            
        
            echo '<div class="modal fade modal" id="mymodal'.$row['idpartitura'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" id="frame" src="'. $caminho .'"></iframe>
                        </div>
                    </div>
                </div>
            </div>';
        }   
            ?>
    <div class="container-fluid">    

  
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