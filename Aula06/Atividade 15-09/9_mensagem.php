<?php
abstract class Mensagem {
    abstract public function formatar($texto);
}

class Maiusculo extends Mensagem {
    public function formatar($texto) {
        return strtoupper($texto);
    }
}

class Minusculo extends Mensagem {
    public function formatar($texto) {
        return strtolower($texto);
    }
}

class Capitalizado extends Mensagem {
    public function formatar($texto) {
        return ucfirst(strtolower($texto));
    }
}

$msg = "olá mundo";
$formatadores = [new Maiusculo(), new Minusculo(), new Capitalizado()];
foreach ($formatadores as $f) {
    echo $f->formatar($msg) . PHP_EOL;
}
?>