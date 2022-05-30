<?php

declare(strict_types=1);

class ContaBancaria {

    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function  __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo){
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo() : string {
        return 'Seu saldo atual é: R$'. $this->saldo;
    }
    public function depositar($valor) : string {
        $this->saldo += $valor;
        return "Deposito de R$ " .$valor . ",00 realizado";
    }
    public function sacar($valor) : string {
        $this->saldo -= $valor;
        return "Saque de R$ " .$valor . ",00 realizado";
    }

}

$conta = new ContaBancaria(
    'Banco do Brasil',
    'Tiago Gomes',
    '85647',
    '2445456',
    0
);

echo $conta->obterSaldo();
echo "<br>";

echo $conta->depositar(100.00);
echo "<br>";

echo $conta->obterSaldo();
echo "<br>";

echo $conta->sacar(50.00);
echo "<br>";
echo $conta->obterSaldo();
