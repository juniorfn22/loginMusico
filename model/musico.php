<?php

class Musico {
    private $nome;
    private $login;
    private $senha;
    private $naipe;

    function __construct($nome, $login, $senha, $naipe) {
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
        $this->naipe = $naipe;
    }

    function getNome() {
        return $this->nome;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNaipe() {
        return $this->naipe;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNaipe($naipe) {
        $this->naipe = $naipe;
    }


    function cadastrarMusico (){

        $nome   = mysqli_real_escape_string($conexao, trim($_POST['nome']));
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
    }

}