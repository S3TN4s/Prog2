<?php
class Pedido
{
    private array $itens = [];

    public function adicionarItem(string $item): void
    {
        $this->itens[] = $item;
    }

    public function listarItens(): array
    {
        return $this->itens;
    }
}

$p = new Pedido();
$p->adicionarItem('Produto A');
$p->adicionarItem('Produto B');
echo implode(',', $p->listarItens()) . PHP_EOL;
