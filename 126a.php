class Quadrado {
    private $lado;

    public function setLado($lado) {
        $this->lado = $lado;
    }

    public function calculaArea() {
        return $this->lado * $this->lado;
    }
}