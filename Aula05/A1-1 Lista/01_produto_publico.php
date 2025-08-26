<?php
class Produto
{
    public string $nome;
    public float $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

$p = new Produto('Caneta', 2.5);
echo $p->nome . ' ' . $p->preco . PHP_EOL;
