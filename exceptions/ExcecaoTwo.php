<?php

function validadeUsuario(array $usuario){
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
        return false;
    }
    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => 'Tiago',
    'idade' => 57,
];

$usuarioValido = validadeUsuario($usuario);

if(!$usuarioValido){
    echo "Usuário Inválido!";
    return false;
}

echo "\n.... executando .... \n";