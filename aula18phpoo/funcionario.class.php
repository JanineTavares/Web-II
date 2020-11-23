<?php
  class Funcionario{
    private $salarioFixo;
    private $valorVendas;
    private $comissao;


    public function Funcionario(){


    }
    public function getSalarioFixo(){
  		return $this->salarioFixo;
  	}

  	public function setSalarioFixo($salarioFixo){
  		$this->salarioFixo = $salarioFixo;
  	}

  	public function getValorVendas(){
  		return $this->valorVendas;
  	}

  	public function setValorVendas($valorVendas){
  		$this->valorVendas = $valorVendas;
  	}

  	public function getComissao(){
  		return $this->comissao;
  	}

  	public function setComissao($comissao){
  		$this->comissao = $comissao;
  	}


    public function mostrarComissao() {
      return $this->comissao * $this->valorVendas;
    }

    public function mostrarSalarioFinal() {
      return $this->mostrarComissao() + $this->salarioFixo;
    }


  }
 ?>
