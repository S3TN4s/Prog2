<?php
class Produto2
{
    public string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $valor): void
    {
        $this->preco = $valor;
    }
}

$p = new Produto2('Caderno', 10.0);
echo $p->nome . ' ' . number_format($p->getPreco(), 2, '.', '') . PHP_EOL;
$p->setPreco(12.5);
echo number_format($p->getPreco(), 2, '.', '') . PHP_EOL;
