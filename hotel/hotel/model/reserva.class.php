<?php
  class Reserva{
    private $idreserva;
    private $nome;
    private $email;
    private $telefone;
    private $mensagem;
    private $quantidadeQuartos;
    private $tipoSuite;
    private $quantidadeAdultos;


    public function __construct(){

    }

    public function __get($atributo){
      return $this->$atributo;
    }

    public function __set($atributo,$valor){
      $this->$atributo = $valor;
    }

    public function __toString(){
      return "<br>Código: ".$this->idreserva.
             "<br>Nome: ".$this->nome.
             "<br>Telefone: ".$this->telefone.
             "<br>E-mail: ".$this->email.
             "<br>Dia: ".$this->dia.
             "<br>Mês: ".$this->mes.
             "<br>Nº de Quartos: ".$this->quantidadeQuartos.
             "<br>Suite: " .$this->$tipoSuite.
             "<br>Nº de Adultos: " .$this->quantidadeAdultos.
             "<br>Mensagem: ".$this->mensagem;
    }
}

?>
