<?php
class Reserva{
  private $valorSemana;
  private $valorFinde;
  private $numeroDias;
  private $diaSemana;
  private $diaFinde;
  private $numeroCriancas;



  public function Reserva(){

  }

  public function getValorSemana(){
    return $this->valorSemana;
  }

  public function setValorSemana($valorSemana){
    $this->valorSemana = $valorSemana;
  }

  public function getValorFinde(){
    return $this->valorFinde;
  }

  public function setValorFinde($valorFinde){
    $this->valorFinde = $valorFinde;
  }

  public function getNumeroDias(){
    return $this->numeroDias;
  }

  public function setNumeroDias($numeroDias){
    $this->numeroDias = $numeroDias;
  }

  public function getDiaSemana(){
    return $this->diaSemana;
  }

  public function setDiaSemana($diaSemana){
    $this->diaSemana = $diaSemana;
  }

  public function getDiaFinde(){
    return $this->diaFinde;
  }

  public function setDiaFinde($diaFinde){
    $this->diaFinde = $diaFinde;
  }

  public function getNumeroCriancas(){
    return $this->numeroCriancas;
  }

  public function setNumeroCriancas($numeroCriancas){
    $this->numeroCriancas = $numeroCriancas;
  }


  public function aplicarDescontoDiaSemana() {
    if($this->numeroDias > 3 && $this->diaSemana == 1){
      return 0.08 * $this->valorSemana;
    }else {
      return $this->valorSemana;
    }
  }

  public function aplicarDescontoFimDeSemana() {
    if($this->numeroDias > 3 && $this->diaFinde == 2){
      return 0.08 * $this->valorFinde;
    }else {
      return $this->valorFinde;
    }
  }

  public function mostrarValorFinal() {
    return ($this->numeroDias * $this->valorFinde) - $this->aplicarDescontoFimDeSemana() * $this->numeroDias;
  }






}
?>
