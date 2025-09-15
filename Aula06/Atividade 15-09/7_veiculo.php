<?php
abstract class Veiculo {
    abstract public function mover();
}

class Carro extends Veiculo {
    public function mover() {
        return "O carro está se movendo pela estrada.";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        return "A bicicleta está pedalando pela ciclovia.";
    }
}

class Aviao extends Veiculo {
    public function mover() {
        return "O avião está voando pelo céu.";
    }
}

$veiculos = [new Carro(), new Bicicleta(), new Aviao()];
foreach ($veiculos as $v) {
    echo $v->mover() . PHP_EOL;
}
?>