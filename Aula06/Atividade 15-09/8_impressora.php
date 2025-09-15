<?php
abstract class Impressora {
    abstract public function imprimir();
}

class PDF extends Impressora {
    public function imprimir() {
        return "Imprimindo documento em PDF.";
    }
}

class Texto extends Impressora {
    public function imprimir() {
        return "Imprimindo documento de Texto.";
    }
}

class Imagem extends Impressora {
    public function imprimir() {
        return "Imprimindo arquivo de Imagem.";
    }
}

$docs = [new PDF(), new Texto(), new Imagem()];
foreach ($docs as $d) {
    echo $d->imprimir() . PHP_EOL;
}
?>