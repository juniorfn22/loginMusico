
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


?>