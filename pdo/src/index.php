<?php

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']){
    case 'list':
        echo '<h3>Produtos: </h3>';

        foreach ($produto->list() as $value){
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
        break;

    case 'insert':
        $status = $produto->insert('Teste');

        if(!$status){
            echo "Não foi possível executar a operação";
            return false;
        }else{
            echo "Registro inserido com sucesso";
        }
        break;

    case 'update':
        $status = $produto->update('Notebook',3);

        if(!$status){
            echo "Não foi possível executar a operação";
            return false;
        }else{
            echo "Registro atualizado com sucesso";
        }
        break;

    case 'delete':
        $status = $produto->delete(2);

        if(!$status){
            echo "Não foi possível executar a operação";
            return false;
        }else{
            echo "Registro deletado com sucesso";
        }
        break;
}