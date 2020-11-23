<?php
  class Util{
    public function validarEmail($email){
      return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function testarExpressao($expressao, $atributo){
      return preg_match($expressao, $atributo);
    }

    public function converterMaiusculo($variavel){
      return strtoupper($variavel);
    }
    public function converterMinusculo($variavel){
      return strtolower($variavel);
    }
    public function contarCaracteres($variavel){
      return strlen($variavel);
    }
    public function retirarEspaco($variavel){
      return trim($variavel);
    }
    public function converterPrimeiraMaiuscula($variavel){
      return ucwords($variavel);
    }
  }
?>
