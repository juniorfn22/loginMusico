<?php
//session_start();
include('verifica_login.php');
include('conexao.php');

$sql2 = "select nome from partitura where tipo = 'avulsos' group by  nome";    
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
<?php
    while ($row2 = mysqli_fetch_assoc($result2)){
              $nome = $row2['nome'];
              
              echo'
              
      <div id="accordianId" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="section1HeaderId">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordianId" href="#'.$nome.'" aria-expanded="true" aria-controls="'.$nome.'">
                '.$nome.'
              </a>
            </h5>
          </div>';
        


        $sql = "select * from partitura where nome = '$nome' order by nome ";
        $result = mysqli_query($conexao,$sql);
        
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['idpartitura'];
          $nome = $row['nome'];
          $caminho = $row['caminho'];
          $naipe = $row['naipe'];
          $tipo = $row['tipo'];
           
      echo '
          <div id="'.$nome.'" class="collapse in" role="tabpanel" aria-labelledby="'.$nome.'">
            <div class="card-body">
            <button class="btn btn-dark mr-3" data-toggle="modal" data-target="#mymodal'.$row['idpartitura'].'">' . $row['nome'] . " - " . $row['naipe'] .' </button>';
            $caminho = $row['caminho'];
            
            echo '<div class="modal fade " id="mymodal'.$row['idpartitura'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" id="frame" src="'. $caminho .'"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          
        </div>';
        }
      }
        ?>

      <!-- Modal extra grande -->

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