
<?php
session_start();
include('conexao.php');

    $ext = strtolower(substr($_FILES['arquivo']['name'],-4));
    $nomeCaminho = rand().$ext;
    $novoNome = $_POST['nome'] . $ext;
    $dir = 'uploads/';
    
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$nomeCaminho);
    $nome = $novoNome;
    $caminho = $dir.$nomeCaminho;
    $naipe = $_POST['naipe'];
    $tipo = $_POST['tipo'];
    
    $sql = "insert into partitura (nome,caminho,naipe,tipo) values ('$nome','$caminho','$naipe','$tipo')";
    if ($conexao->query($sql)===true){
        $_SESSION['partitura_cadastro'] = true;

    }
    $conexao->close();
    header('Location:cadastroPartitura.php');
    exit();

    




?>