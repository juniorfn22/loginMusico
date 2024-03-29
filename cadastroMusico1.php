<?php 
session_start();

?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <?php 
                    if (isset($_SESSION['status_cadastro'])){
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
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
                    <div class="box">
                        
                        <div class="field">
                                <a href="maestro.php">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>