<?php
  //Determinar a classe - Molde
  class Pessoa{
    //Atributos - são os dados da classe - são as características
    //São os itens que preciso cadastrar de cada pessoa:
    private $nome;
    private $idade;
    //Métodos - funções - ações - operações - cálculos:
    //Métodos Acessores - dois métodos get e imap_set
    //set - settar - envia um valor ao dado
    //get - pegar o dado
    public function setNome($nome){
      $this->nome = $nome;
    }
    public function getNome(){
      return $this->nome;
    }
    public function setIdade($idade){
      $this->idade = $idade;
    }
    public function getIdade(){
      return $this->idade;
    }
    //Métodos de cálculos:
    public function acharAnoNascimento(){
      return 2020 - $this->idade;
    }
  }
?>
