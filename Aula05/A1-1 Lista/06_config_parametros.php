<?php
class Config
{
    protected array $parametros;

    public function __construct(array $parametros = [])
    {
        $this->parametros = $parametros;
    }
}

class AppConfig extends Config
{
    public function get(string $chave, mixed $default = null): mixed
    {
        return $this->parametros[$chave] ?? $default;
    }

    public function set(string $chave, mixed $valor): void
    {
        $this->parametros[$chave] = $valor;
    }

    public function all(): array
    {
        return $this->parametros;
    }
}

$c = new AppConfig(['tema' => 'claro']);
echo $c->get('tema') . PHP_EOL;
$c->set('itens_por_pagina', 50);
echo json_encode($c->all(), JSON_UNESCAPED_UNICODE) . PHP_EOL;
