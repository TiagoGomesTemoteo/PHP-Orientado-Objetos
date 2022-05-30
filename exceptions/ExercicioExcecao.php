<?php

declare(strict_types=1);

function divisao($valorA, $valorB){
    if($valorA == 0 || $valorB == 0){
        throw new Exception("Informe um valor maior que zero");
    }
    return true;
}

$status = false;

try{
    $status = divisao(10,0);
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    var_dump("Status da operação: ".(int)$status);
    die();
}
