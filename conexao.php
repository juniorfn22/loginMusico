<?php
define('HOST', '127.0.0.1');
define ('USUARIO','root');
define('SENHA','');
define('DB','loginMusico');

$conexao = mysqli_connect(HOST, USUARIO,SENHA,DB) or die ('Erro de conexão');