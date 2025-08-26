<?php
class ContaBancaria2
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

    public function sacar(float $valor): bool
    {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }
}

$c = new ContaBancaria2(100);
echo ($c->sacar(150) ? '1' : '0') . PHP_EOL;
echo number_format($c->getSaldo(), 2, '.', '') . PHP_EOL;
echo ($c->sacar(80) ? '1' : '0') . PHP_EOL;
echo number_format($c->getSaldo(), 2, '.', '') . PHP_EOL;
