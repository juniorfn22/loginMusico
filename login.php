<?php
session_start();
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}
// var_dump( $_POST['usuario']);
// var_dump( md5($_POST['senha']));
// die();


$login = mysqli_real_escape_string ($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string ($conexao, $_POST['senha']);

$query = "SELECT nome,naipe FROM musico WHERE login='{$login}' and senha=md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
$naipeMusico = mysqli_fetch_assoc($result);
#$nomeMusico = mysqli_fetch_assoc($result);
$naipe = $naipeMusico['naipe'];
$nome = $naipeMusico['nome'];


if ($row == 1){
    if ($naipe == 0){
        $usuario_bd = mysqli_fetch_assoc($result);
        $_SESSION['nome'] = $nome;
        $_SESSION['naipe'] = $naipe;
        header('Location: areaMaestro.php');
        exit();
    }else{
        $usuario_bd = mysqli_fetch_assoc($result);
        $_SESSION['nome'] = $nome;
        $_SESSION['naipe'] = $naipe;
        header('Location: areaMusico.php');
        exit();
        }
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
} 