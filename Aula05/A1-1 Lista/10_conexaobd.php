<?php
class ConexaoBD
{
    private ?PDO $conexao = null;

    private function conectar(): PDO
    {
        if ($this->conexao === null) {
            $this->conexao = new PDO('sqlite::memory:');
        }
        return $this->conexao;
    }

    public function getConexao(): PDO
    {
        return $this->conectar();
    }
}

$db = new ConexaoBD();
$pdo = $db->getConexao();
echo ($pdo instanceof PDO ? 'ok' : 'erro') . PHP_EOL;
