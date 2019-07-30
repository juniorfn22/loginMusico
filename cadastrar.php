<?php
session_start();
include('conexao.php');

$nome  = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$login = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$naipe = mysqli_real_escape_string($conexao, trim($_POST['naipe']));

$sql    = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row    = mysqli_fetch_assoc($result);

if ($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location:cadastro.php');
    exit();
}

$sql = "insert into musico (nome,login,senha,naipe) values ('$nome','$login','$senha','$naipe')";

if ($conexao->query($sql) === true){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location:cadastroMusico.php');
exit();

?>