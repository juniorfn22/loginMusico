<?php
//session_start();
include('verifica_login.php');
include('conexao.php');

$sql = "select idpartitura,nome, caminho,naipe from paritura where naipe='{$_SESSION['naipe']}' ";
$result = mysqli_query($conexao,$sql);


?>

<!--<h2>Olá, <?php echo $_SESSION['nome'];?> | <a href="logout.php">Sair</a></h2>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>
<nav class="navbar navbar-expand-sm navbar-light    ">
<a class="navbar-brand" href="#">Área do Músico</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Item</a>
                    <a class="dropdown-item" href="#">Item</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <label class="label mr-2" for="">Olá, <?php echo $_SESSION['nome'];?> </label>
            <a class="btn btn-primary" href="logout.php">Sair</a>
        </form>
    </div>
</nav>


    <div class="container">
        <!-- Modal extra grande -->
        <?php
            
            while ($row = mysqli_fetch_array($result)) {
                    
            
            echo '<button class="btn btn-primary mr-3" data-toggle="modal" data-target="#mymodal'.$row['idpartitura'].'">' . $row['nome'] .' </button>';
            $caminho = $row['caminho'];
            
        
            echo '<div class="modal fade " id="mymodal'.$row['idpartitura'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" id="frame" src="'. $caminho .'"></iframe>
                        </div>
                    </div>
                </div>
            </div>';
        }   
            ?>
    </div>


</body>
</html>
