<?php
  class Mercadoria{
    private $nome;
    private $valor;
    private $formaPagamento;

    public function getNome(){
  		return $this->nome;
  	}

  	public function setNome($nome){
  		$this->nome = $nome;
  	}

  	public function getValor(){
  		return $this->valor;
  	}

  	public function setValor($valor){
  		$this->valor = $valor;
  	}

  	public function getFormaPagamento(){
  		return $this->formaPagamento;
  	}
    public function setFormaPagamento($formaPagamento){
		    $this->formaPagamento = $formaPagamento;
	   }


    public function calcularValorPagar(){
      if($this->formaPagamento == 1 ){
        return $this->valor * 0.95; //100% - 5% = 95%/100 = 0,95 = 0.95
      }else{
        return $this->valor * 1.18; //100% + 18% = 118% = 1,18 = 1.18
      }
    }
  }

 ?>
