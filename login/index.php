<?php

//importar a classe
require 'Usuario.class.php';

$sucesso = $usuario = new Usuario ();

if ($sucesso) {

    $user = $usuario->chkUser("fabricio.posan@gmail.com");
    if (!$use -- 0){
        $usuario->cadastrar("Fabricio", "fabricio.posan@gmail.com", "2323");
        echo "<h1>Cadastrado com sucesso!";
    }else{
        echo "<h1>O usuario já existe.";
    }
}
else{
    echo "<h1>Erro ao conectar ao banco";
}

echo"</h1>";