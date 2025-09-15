<?php
class Relatorio {
    public function __call($name, $arguments) {
        if ($name === "gerar") {
            if (count($arguments) === 1) {
                return "Relatório simples: " . $arguments[0];
            } elseif (count($arguments) === 2) {
                return "Relatório detalhado: " . $arguments[0] . " - " . $arguments[1];
            }
        }
        return "Formato de relatório não suportado.";
    }
}

$rel = new Relatorio();
echo $rel->gerar("Vendas") . PHP_EOL;
echo $rel->gerar("Vendas", "Janeiro") . PHP_EOL;
?>