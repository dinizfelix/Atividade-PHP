class Adulto {
    private $peso;

    public function engordar($quilos) {
        $this->peso += $quilos;
    }

    public function emagrecer($quilos) {
        $this->peso -= $quilos;
    }
}
