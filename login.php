<?php
session_start();
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}


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
<<<<<<< HEAD
        header('Location: areaMaestro.php');
=======
        header('Location: maestro.php');
>>>>>>> aa5a047178cac4d8f037ed4a48802cda4bb85a0f
        exit();
    }else{
        $usuario_bd = mysqli_fetch_assoc($result);
        $_SESSION['nome'] = $nome;
        $_SESSION['naipe'] = $naipe;
<<<<<<< HEAD
        header('Location: areaMusico.php');
=======
        header('Location: musico.php');
>>>>>>> aa5a047178cac4d8f037ed4a48802cda4bb85a0f
        exit();
        }
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
} 