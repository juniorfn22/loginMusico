<?php
//session_start();
include('verifica_login.php');
include('conexao.php');

/*$sql = "select idpartitura, nome, caminho,naipe,tipo from partitura where tipo = 'dobrados' group by idpartitura, nome, caminho, naipe, tipo";
    $result = mysqli_query($conexao,$sql);
      while ($row = mysqli_fetch_assoc($result)) {
        
        $nome = $row['nome'];
#print_r($nome);
        }*/

$sql = "select idpartitura, nome, caminho,naipe,tipo from partitura where tipo = 'dobrados' ";
    $result = mysqli_query($conexao,$sql);
    $rows = array();
        while ($row = mysqli_fetch_array($result)){
            $rows[] = $row;
            
        }
        foreach ($rows as $row){
            echo $row['nome'].$row['naipe'].'<br>';
        }
?>
