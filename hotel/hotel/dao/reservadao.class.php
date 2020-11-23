<?php
  require '../persistence/conexao.class.php';



  class ReservaDAO {
    private $conexao = null;

    public function __construct(){
			$this->conexao = Conexao::getInstance();
        }

    public function __destruct(){

    }

    public function cadastrarReserva($r){
      try{

        $stat = $this->conexao->prepare("INSERT INTO reserva (idreserva,nome,email,telefone,quantidadequartos,tiposuite,quantidadeadultos,dia,mes,mensagem)VALUES(NULL,?,?,?,?,?,?,?,?,?)");

        $stat->bindValue(1,$r->nome);
				$stat->bindValue(2,$r->email);
        $stat->bindValue(3,$r->telefone);
				$stat->bindValue(4,$r->quantidadeQuartos);
				$stat->bindValue(5,$r->tipoSuite);
				$stat->bindValue(6,$r->quantidadeAdultos);
				$stat->bindValue(7,$r->dia);
				$stat->bindValue(8,$r->mes);
				$stat->bindValue(9,$r->mensagem);

        $stat->execute();
			}catch(PDOException $e){
			     echo "Erro ao fazer reserva. ".$e;
      }
    }


    public function buscarReservas(){
      try{

        $stat = $this->conexao->query("SELECT * FROM reserva");

        $array = array();
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Reserva');

        $this->conexao = null;
        return $array;

      }catch(PDOException $e){
        echo "Erro ao buscar reservas. ".$e;
      }
    }


    public function deletarReserva($idreserva){

      try {

        $stat = $this->conexao->prepare("DELETE FROM reserva WHERE idreserva=?");

        $stat->bindValue(1,$idreserva);

        $stat->execute();

        $this->conexao = null;
      } catch (PDOException $e) {
        echo "Erro ao deletar reserva. ".$e;
      }
    }
    public function buscar($query){

      try {

        $stat = $this->conexao->query("SELECT * FROM reserva ".$query);
        //guardando o resultado da busca em um array:
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Reserva');
        $this->conexao = null;
        //retornar o que ele encontrou:
        return $array;
      } catch (PDOException $e) {
        echo "Erro ao buscar reserva. ".$e;
      }
    }

    public function alterarReserva($r){
      try {
        $stat = $this->conexao->prepare("UPDATE reserva SET nome = ?,email = ?,telefone = ?,quantidadequartos = ?, tiposuite = ?, quantidadeadultos = ?,dia = ?,mes = ?,mensagem = ? WHERE idreserva = ?");

        //Especificar os ????
        $stat->bindValue(1,$r->nome);
				$stat->bindValue(2,$r->email);
        $stat->bindValue(3,$r->telefone);
				$stat->bindValue(4,$r->quantidadeQuartos);
				$stat->bindValue(5,$r->tipoSuite);
				$stat->bindValue(6,$r->quantidadeAdultos);
				$stat->bindValue(7,$r->dia);
				$stat->bindValue(8,$r->mes);
        $stat->bindValue(9,$r->mensagem);
        $stat->bindValue(10,$r->idreserva);

        $stat->execute();

        $this->conexao = null;
      } catch (PDOException $e) {
        echo "Erro ao alterar reserva. ".$e;
      }
    }


  }

?>
