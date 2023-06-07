<?php

class Retangulo {
    private $ladoMaior;
    private $ladoMenor;
    public function setLadoMaior($maior) {
        $this->ladoMaior = $maior;
    }

    public function setLadoMenor($menor) {
        $this->ladoMenor = $menor;
    }

    public function calculaArea() {
        return $this->ladoMaior * $this->ladoMenor;
    }
}
if (isset($_POST['calcular'])) {
    $ladoMaior = $_POST['ladoMaior'];
    $ladoMenor = $_POST['ladoMenor'];
    $retangulo = new Retangulo();
    $retangulo->setLadoMaior($ladoMaior);
    $retangulo->setLadoMenor($ladoMenor);
    $area = $retangulo->calculaArea();
    echo "A área do retângulo é: " . $area;
} else {
    ?>
    <form method="POST" action="retangulo.php">
        <label for="ladoMaior">Lado Maior:</label>
        <input type="number" name="ladoMaior" id="ladoMaior" required><br>      
        <label for="ladoMenor">Lado Menor:</label>
        <input type="number" name="ladoMenor" id="ladoMenor" required><br>
        <input type="submit" name="calcular" value="Calcula Área">
    </form>
    <?php
}

?>