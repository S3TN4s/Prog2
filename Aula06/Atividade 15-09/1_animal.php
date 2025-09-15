<?php
class Animal {
    public function falar() {
        return "";
    }
}

class Cachorro extends Animal {
    public function falar() {
        return "Au Au!";
    }
}

class Gato extends Animal {
    public function falar() {
        return "Miau!";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();
echo $cachorro->falar() . PHP_EOL;
echo $gato->falar() . PHP_EOL;
?>