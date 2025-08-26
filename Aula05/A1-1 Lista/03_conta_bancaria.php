<?php
class ContaBancaria
{
    private float $saldo;

    public function __construct(float $saldo = 0)
    {
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): void
    {
        $this->saldo += $valor;
    }

    public function sacar(float $valor): void
    {
        $this->saldo -= $valor;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }
}

$c = new ContaBancaria(100);
$c->depositar(50);
$c->sacar(30);
echo number_format($c->getSaldo(), 2, '.', '') . PHP_EOL;
