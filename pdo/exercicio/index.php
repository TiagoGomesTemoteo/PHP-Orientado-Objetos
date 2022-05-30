<?php

require 'Post.php';

$post = new Post();

switch ($_GET['operacao']){
    case 'list':
        echo '<h3>Posts: </h3>';

        foreach ($post->list() as $value){
            echo 'Id: ' . $value['id'] . '<br> Titulo: ' . $value['titulo'] . '<br>Descrição: ' . $value['descricao'] . '<br> Data: ' . $value['dataHora'] . '<hr>';
        }
        break;
    case 'insert':
        $data = new DateTime();
        $status = $post->insert('Regional CREIO Itaquaquecetuba', 'No próximo ensaio todas as regionais');

        if(!$status){
            echo "Não foi possível executar a operação";
            return false;
        }else{
            echo "Registro inserido com sucesso";
        }
        break;
    case 'update':
        $status = $post->update('Regional CREIO Itaquaquecetuba', 'No próximo ensaio todas ', 1);

        if(!$status){
            echo "Não foi possível executar a operação";
            return false;
        }else{
            echo "Registro atualizado com sucesso";
        }
        break;
    case 'delete':
        $status = $post->delete(2);

        if(!$status){
            echo "Não foi possível executar a operação";
            return false;
        }else{
            echo "Registro deletado com sucesso";
        }
        break;

}