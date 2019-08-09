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




}