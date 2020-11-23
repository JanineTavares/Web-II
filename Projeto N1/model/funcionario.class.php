<?php
  class Funcionario {
    private $nome;
    private $cpf;
    private $cargo;
    private $valorHora;
    private $quantidadeHoras;
    private $horasExtras50;
    private $horasExtras100;
    private $dependentes;
    private $tipoInsalubridade;
    private $valorTransporteMensal;
    private $valorRefeicaoDiaria;




    public function Funcionario($nome, $cpf,$cargo,$valorHora,$quantidadeHoras,$horasExtras50,$horasExtras100,$dependentes,$tipoInsalubridade,$valorTransporteMensal,$valorRefeicaoDiaria){
    $this->nome=$nome;
    $this->cpf=$nome;
    $this->cargo=$cargo;
    $this->valorHora=$valorHora;
    $this->quantidadeHoras=$quantidadeHoras;
    $this->horasExtras50=$horasExtras50;
    $this->horasExtras100=$horasExtras100;
    $this->dependentes=$dependentes;
    $this->tipoInsalubridade=$tipoInsalubridade;
    $this->valorTransporteMensal=$valorTransporteMensal;
    $this->valorRefeicaoDiaria=$valorRefeicaoDiaria;

  }

    public function getNome(){
      return $this->nome;
    }

    public function setNome($nome){
      $this->nome = $nome;
    }

    public function getCpf(){
      return $this->cpf;
    }

    public function setCpf($cpf){
      $this->cpf = $cpf;
    }

    public function getCargo(){
      return $this->cargo;
    }

    public function setCargo($cargo){
      $this->cargo = $cargo;
    }

    public function getValorHora(){
      return $this->valorHora;
    }

    public function setValorHora($valorHora){
      $this->valorHora = $valorHora;
    }

    public function getQuantidadeHoras(){
      return $this->quantidadeHoras;
    }

    public function setQuantidadeHoras($quantidadeHoras){
      $this->quantidadeHoras = $quantidadeHoras;
    }

    public function getHorasExtras50(){
      return $this->horasExtras50;
    }

    public function setHorasExtras50($horasExtras50){
      $this->horasExtras50 = $horasExtras50;
    }

    public function getHorasExtras100(){
      return $this->horasExtras100;
    }

    public function setHorasExtras100($horasExtras100){
      $this->horasExtras100 = $horasExtras100;
    }

    public function getDependentes(){
      return $this->dependentes;
    }

    public function setDependentes($dependentes){
      $this->dependentes = $dependentes;
    }

    public function getTipoInsalubridade(){
      return $this->tipoInsalubridade;
    }

    public function setTipoInsalubridade($tipoInsalubridade){
      $this->tipoInsalubridade = $tipoInsalubridade;
    }

    public function getValorTransporteMensal(){
      return $this->valorTransporteMensal;
    }

    public function setValorTransporteMensal($valorTransporteMensal){
      $this->valorTransporteMensal = $valorTransporteMensal;
    }

    public function getValorRefeicaoDiaria(){
      return $this->valorRefeicaoDiaria;
    }

    public function setValorRefeicaoDiaria($valorRefeicaoDiaria){
      $this->valorRefeicaoDiaria = $valorRefeicaoDiaria;
    }


    public function calcularSalarioBruto() {
      return $this->valorHora * $this->quantidadeHoras;

    }
    public function calcularValeTransporte(){
      $this->valorValeTransporte = 0.06 * $this->calcularSalarioBruto();
      if($this->valorValeTransporte > $this->valorTransporteMensal) {
        return 0;
      } else {
        return $this->valorValeTransporte;
      }

    }
    public function calcularSalarioFamilia(){
      if($this->calcularSalarioBruto() <= 1425.56) {
        return $this->dependentes * 48.62;
      }else {
        return 0;
      }

    }
    public function calcularInsalubridade(){
      switch($this->tipoInsalubridade) {
        case 1:
        return 0;
        case 2:
        return  1045 * 0.10;
        case 3:
        return 1045 * 0.20;
        case 4:
        return  1045 * 0.40;


      }
    }

    public function calcularInss(){
      if($this->calcularSalarioBruto() <= 1751.81){
        return  $this->calcularSalarioBruto() * 0.08;
      } else if ($this->calcularSalarioBruto() >= 1751.81 && $this->calcularSalarioBruto() <= 2919.72){
        return  $this->calcularSalarioBruto() * 0.09;
      } else if ($this->calcularSalarioBruto() >= 2919.72 && $this->calcularSalarioBruto() <= 5839.45){
        return  $this->calcularSalarioBruto() * 0.11;
      }else {
        return $this->calcularSalarioBruto() * 0.27;
      }
    }

    public function calcularValeRefeicao(){
      return (25 * $this->valorRefeicaoDiaria) * 0.20;

    }

    public function calcularValorExtra50(){
      return ($this->valorHora * $this->horasExtras50) * 1.50;

    }

    public function calcularValorExtra100(){
      return ($this->valorHora * $this->horasExtras100) * 2;

    }
    public function calcularTotalHorasExtras(){
      return $this->calcularValorExtra50() + $this->calcularValorExtra100();

    }
    public function calcularSalarioLiquido(){
     return $this->calcularSalarioBruto() + $this->calcularSalarioFamilia() + $this->calcularInsalubridade() + $this->calcularValorExtra50() + $this->calcularValorExtra100() + $this->calcularTotalHorasExtras() - $this->calcularInss() - $this->calcularValeTransporte() - $this->calcularValeRefeicao();
    }

    public function toString() {
      return "<br>Nome: " .$this->nome.
      "<br>CPF: " .$this->cpf.
      "<br>Cargo: " .$this->cargo.
      "<br>Valor Hora: " .$this->valorHora.
      "<br>Quantidade Horas: " .$this->quantidadeHoras.
      "<br>Horas Extras 50: " .$this->horasExtras50.
      "<br>Horas Extras 100: " .$this->horasExtras100.
      "<br>Dependentes: " .$this->dependentes.
      "<br>Tipo Insalubridade: " .$this->tipoInsalubridade;
    }
  }
?>
