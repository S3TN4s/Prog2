<?php
class Usuario
{
    private string $senha;

    public function __construct(string $senha)
    {
        $this->senha = $senha;
    }

    public function verificarSenha(string $senha): bool
    {
        return $this->senha === $senha;
    }
}

$u = new Usuario('1234');
echo ($u->verificarSenha('1234') ? '1' : '0') . PHP_EOL;
echo ($u->verificarSenha('0000') ? '1' : '0') . PHP_EOL;
