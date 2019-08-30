<?php
//session_start();
include('verifica_login.php');
include('conexao.php');


$sql2 = "select nome from partitura where tipo = 'dobrados' group by nome";    
$result2= mysqli_query($conexao,$sql2);


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
    <?php include('navBar.php') ?>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <!-- Modal extra grande -->
      <?php
            while ($row2 = mysqli_fetch_assoc($result2)){
              $nome = $row2['nome'];

              echo '
              <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                    '.$nome.'
              </button>
              ';
              echo '
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">';
                $sql = "select * from partitura where tipo = 'dobrados' order by nome ";
                $result = mysqli_query($conexao,$sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['idpartitura'];
                  $nome = $row['nome'];
                  $caminho = $row['caminho'];
                  $naipe = $row['naipe'];
                  $tipo = $row['tipo'];
                  echo '<button class="btn btn-dark mr-3 mb-2" data-toggle="modal" data-target="#mymodal'.$id.'">' .$id . $nome . " - " . $naipe .' </button>';
                        echo '<div class="modal fade " id="mymodal'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" id="frame" src="'. $caminho .'"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>'; 
                          }
                echo '</div>';
              }
            


        ?>

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