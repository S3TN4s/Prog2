<?php
class Cliente
{
    public string $nome;
    protected string $cpf;
    private string $telefone;

    public function __construct(string $nome, string $cpf, string $telefone)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }
}

$cli = new Cliente('Ana', '123.456.789-00', '(49)99999-0000');
echo $cli->nome . PHP_EOL;
echo $cli->getCpf() . PHP_EOL;
echo $cli->getTelefone() . PHP_EOL;
