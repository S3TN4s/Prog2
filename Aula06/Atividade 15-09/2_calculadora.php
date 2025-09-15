<?php
class Calculadora {
    public function somar($a, $b, $c = null) {
        if ($c !== null) {
            return $a + $b + $c;
        }
        return $a + $b;
    }
}

$calc = new Calculadora();
echo $calc->somar(2, 3) . PHP_EOL;
echo $calc->somar(2, 3, 4) . PHP_EOL;
?>