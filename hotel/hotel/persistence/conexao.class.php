<?php
  class Conexao extends PDO {
    private static $instance = null;

    public function __construct($dsn,$user,$pass){

      parent::__construct($dsn,$user,$pass);
    }

    public static function getInstance(){
      if(!isset(self::$instance)){
        try{
          self::$instance = new Conexao("mysql:dbname=id15366942_hotel;host=localhost","id15366942_janine","0%QPYh+/@yFhjyV@");
          // self::$instance = new Conexao("mysql:dbname=hotel;host=localhost","root","");
        }catch(PDOException $e){
          echo "Erro ao conectar. ".$e;
        }
      }
      return self::$instance;
    }
  }
?>
