<?php
  class IMC{
    private $peso;
    private $altura;


    public function IMC(){

    }
    public function getPeso(){
      return $this->peso;
    }

    public function setPeso($peso){
      $this->peso = $peso;
    }
    public function getAltura(){
      return $this->altura;
    }

    public function setAltura($altura){
      $this->altura = $altura;
    }


    public function calcularImc() {
      return $this->peso / $this->altura ** 2;
    }

    public function mostrarIndicie() {
      if($this->calcularImc() >= 18.5 && $this->calcularImc() <= 24.9) {
        return  "Você está dentro do peso ideal";
      }else {
        return  "Você não está no peso ideal";
      }
    }


  }
 ?>
