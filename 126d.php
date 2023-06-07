class Triangulo {
    private $base;
    private $altura;

    public function setBase($base) {
        $this->base = $base;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function calculaArea() {
        return ($this->base * $this->altura) / 2;
    }
}