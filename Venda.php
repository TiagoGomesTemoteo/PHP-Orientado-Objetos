<?php

class Venda {

    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal){
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function exibirDadosVenda(){
        echo "Data: " .$this->data;
        echo "Produto: ".$this->produto;
        echo "Quantidade: ".$this->quantidade;
        echo "Valor total: ".$this->valorTotal;
    }
}

$venda = new Venda(
    '10/05/2022',
    'Notebook',
    1,
    3600.00
);

echo $venda->exibirDadosVenda();