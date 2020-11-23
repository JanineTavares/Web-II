<?php
  class Pessoa {
    private $nome;
    private $email;
    private $telefone;


    public function Pessoa($nome, $email,$telefone){
    $this->nome=$nome;
    $this->email=$email;
    $this->telefone=$telefone;


  }

  public function getNome()
  {
      return $this->nome;
  }


  public function setNome($nome)
  {
      $this->nome = $nome;

      return $this;
  }


  public function getEmail()
  {
      return $this->email;
  }


  public function setEmail($email)
  {
      $this->email = $email;

      return $this;
  }


  public function getTelefone()
  {
      return $this->telefone;
  }


  public function setTelefone($telefone)
  {
      $this->telefone = $telefone;

      return $this;
  }





    public function toString() {
      return "<br>Nome: " .$this->nome.
      "<br>E-mail: " .$this->email.
      "<br>Telefone: " .$this->telefone;

    }





}
?>
