<?php
abstract class Transporte {
    abstract public function calcularTarifa();
}

class Onibus extends Transporte {
    public function calcularTarifa() {
        return 4.50;
    }
}

class Metro extends Transporte {
    public function calcularTarifa() {
        return 5.00;
    }
}

class Taxi extends Transporte {
    public function calcularTarifa() {
        return 20.00;
    }
}

$transportes = [new Onibus(), new Metro(), new Taxi()];
foreach ($transportes as $t) {
    echo "Tarifa: R$" . number_format($t->calcularTarifa(), 2, ',', '.') . PHP_EOL;
}
?>