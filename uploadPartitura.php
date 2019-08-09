<<<<<<< HEAD

<?php
session_start();
include('conexao.php');


    date_default_timezone_set("Brazil/East");

    $ext = strtolower(substr($_FILES['arquivo']['name'],-4));

    $nomeCaminho = rand().$ext;
    $novoNome = $_POST['nome'] . $ext;
    $dir = 'uploads/';
    
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$nomeCaminho);

    $caminho = $dir.$nomeCaminho;
    $naipe = $_POST['naipe'];
    $tipo = $_POST['tipo'];
    
    $sql = "insert into paritura (nome,caminho,naipe,tipo) values ('$novoNome','$caminho','$naipe','$tipo')";
    if ($conexao->query($sql)===true){
        $_SESSION['partitura_cadastro'] = true;

    }
    $conexao->close();
    header('Location:cadastroPartitura.php');
    exit();

    




=======

<?php

include('conexao.php');

if (isset($_FILES['arquivo'])){
    date_default_timezone_set("Brazil/East");

    $ext = strtolower(substr($_FILES['arquivo']['name'],-4));

    $nomeCaminho = rand().$ext;
    $novoNome = $_POST['nome'] . $ext;
    $dir = 'uploads/';

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$nomeCaminho);

    $caminho = $dir.$nomeCaminho;
    $naipe = $_POST['naipe'];
    
    $sql = "insert into partitura (nome,caminho,naipe) values ('$novoNome','$caminho','$naipe')";
    if ($conexao->query($sql)===true){
        header('Location:cadastroPartitura.php');

    }
    $conexao->close();
    


}


>>>>>>> aa5a047178cac4d8f037ed4a48802cda4bb85a0f
?>