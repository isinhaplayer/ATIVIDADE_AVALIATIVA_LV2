<?php
class Empregado {
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    
    public function __construct($nome, $sobrenome, $salarioMensal) {
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setSalarioMensal($salarioMensal);
    }

   
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }

    
    public function recebaAumento($percentualAumento) {
        $this->salarioMensal += $this->salarioMensal * ($percentualAumento / 100);
    }

    public function getSalarioAnual() {
        return $this->salarioMensal * 12;
    }
}


?>