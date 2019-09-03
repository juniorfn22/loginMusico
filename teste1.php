<?php
//session_start();
include('verifica_login.php');
include('conexao.php');


$separarNome = mysqli_query($conexao, "select nome from partitura where tipo = 'dobrados' group by nome");

while ($resNome = mysqli_fetch_array($separarNome)){
    $nomePartitura = $resNome['nome'];
    $separarDados = (mysqli_query($conexao, "select idpartitura, nome, caminho,naipe,tipo from partitura where nome='$nomePartitura'"));
    echo $resNome['nome'].'<hr>';
    while ($resNome2 = mysqli_fetch_array($separarDados)){
        echo $resNome2['nome'].'<br>';
        echo $resNome2['caminho'].'<br>';
        echo $resNome2['naipe'].'<br>';
    }
}



?>
