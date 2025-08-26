<?php
class Funcionario
{
    protected float $salario;

    public function __construct(float $salario)
    {
        $this->salario = $salario;
    }
}

class Gerente extends Funcionario
{
    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $valor): void
    {
        $this->salario = $valor;
    }
}

$g = new Gerente(5000);
echo number_format($g->getSalario(), 2, '.', '') . PHP_EOL;
$g->setSalario(6000);
echo number_format($g->getSalario(), 2, '.', '') . PHP_EOL;
