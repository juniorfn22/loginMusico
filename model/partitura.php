<?php 

class Partitura {
    private $nome;
    private $caminho;
    private $naipe;
    private $tipo;

    
    function __construct($nome, $caminho, $naipe, $tipo){
        $this->nome = $nome;
        $this->caminho = $caminho;
        $this->naipe = $naipe;
        $this->tipo = $tipo;
    }
        
    function getNome() {
        return $this->nome;
    }

    function getCaminho() {
        return $this->caminho;
    }

    function getNaipe(){
        return $this->naipe;
    }

    function getTipo(){
        return $this->tipo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCaminho($caminho){
        $this->caminho = $caminho;
    }

    function setNaipe($naipe){
        $this->naipe = $naipe;
    }

    function setTipo($tipo){
        $this->tipo = $tipo;
    }

    function cadastrarPartitura(){
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
    }

    function allPartitura (){
        
    }

}