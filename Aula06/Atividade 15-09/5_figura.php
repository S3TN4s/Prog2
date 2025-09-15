<?php
abstract class FiguraGeometrica {
    abstract public function calcularArea();
}

class Quadrado extends FiguraGeometrica {
    private $lado;
    public function __construct($lado) {
        $this->lado = $lado;
    }
    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo extends FiguraGeometrica {
    private $raio;
    public function __construct($raio) {
        $this->raio = $raio;
    }
    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }
}

class Retangulo extends FiguraGeometrica {
    private $largura;
    private $altura;
    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }
    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}

echo "Área do quadrado: " . (new Quadrado(4))->calcularArea() . PHP_EOL;
echo "Área do círculo: " . (new Circulo(3))->calcularArea() . PHP_EOL;
echo "Área do retângulo: " . (new Retangulo(4, 6))->calcularArea() . PHP_EOL;
?>