<?php
abstract class Pagamento {
    abstract public function processar();
}

class Cartao extends Pagamento {
    public function processar() {
        return "Pagamento processado com Cartão.";
    }
}

class Pix extends Pagamento {
    public function processar() {
        return "Pagamento processado com Pix.";
    }
}

class Boleto extends Pagamento {
    public function processar() {
        return "Pagamento processado com Boleto.";
    }
}

$metodos = [new Cartao(), new Pix(), new Boleto()];
foreach ($metodos as $m) {
    echo $m->processar() . PHP_EOL;
}
?>