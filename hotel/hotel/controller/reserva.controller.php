<?php

              session_start();
              include '../model/reserva.class.php';
              include '../util/util.class.php';
              include '../dao/reservadao.class.php';

              $u1 = new Util();
              switch($_GET['op']){
                case 'cadastrar':
                  $nome = $_POST['txtnome'];
                  $email = $_POST['txtemail'];
                  $telefone = $_POST['txttelefone'];
                  $quantidadeQuartos = $_POST['txtquartos'];
                  $tipoSuite = $_POST['txtsuite'];
                  $quantidadeAdultos = $_POST['txtadultos'];
                  $dia = $_POST['txtdia'];
                  $mes = $_POST['txtmes'];
                  $mensagem = $_POST['txtmensagem'];


                  if(empty($nome) || empty($telefone) || empty($email) || empty($quantidadeAdultos) || empty($quantidadeQuartos) || empty($dia) || empty($mes) || empty($tipoSuite)){
                    echo 'Preencha os campos.';
                  }else if(!$u1->testarExpressaoRegular('/^[A-Za-zÀ-Úà-ú ]{2,30}$/',$nome)){
                    echo 'Nome fora do padrão';
                  }else if(!$u1->testarExpressaoRegular('/^[0-9]{8,20}$/',$telefone)){
                    echo 'Telefone fora do padrão';
                  }else if(!$u1->validarEmail($email)){
                    echo 'E-mail fora de padrão';
                  }else{
                    $reserva = new Reserva();
                    $reserva->nome = $nome;
                    $reserva->email = $email;
                    $reserva->telefone = $telefone;
                    $reserva->quantidadeQuartos = $quantidadeQuartos;
                    $reserva->tipoSuite = $tipoSuite;
                    $reserva->quantidadeAdultos = $quantidadeAdultos;
                    $reserva->dia = $dia;
                    $reserva->mes = $mes;
                    $reserva->mensagem = $mensagem;


                    $reservaDAO = new ReservaDAO();
                    $reservaDAO->cadastrarReserva($reserva);

                    $msg = "Nome: ".$nome. "\n
                    E-mail: ".$email. "\n
                    Telefone: " .$telefone. "\n
                    Nº de quartos: " .$quantidadeQuartos. "\n
                    Nº de adultos: " .$quantidadeAdultos. "\n
                    Dia: " .$telefone. "\n
                    Mês: " .$telefone. "\n
                    Observações: " .$mensagem;


                    mail($email,"Seus dados cadastrados",$msg);


                    header('location:../view/confirmareserva.php');
                  }
                  break;

                case 'deletar':
                  $rDAO = new ReservaDAO();
                  $rDAO->deletarReserva($_REQUEST['idreserva']);
                  header('location:../view/mostrarreservas.php');
                  break;

                  case 'alterar':
                  $idreserva = $_REQUEST['idreserva'];
                  $query = 'where idreserva = '.$idreserva;
                  $rDAO = new ReservaDAO();
                  $reservas = array();
                  $reservas = $rDAO->buscar($query);
                  $_SESSION['reservas']=serialize($reservas);
                  header("location:../view/alterarreserva.php");
                break;
                case 'confirmaedicao':
                  $r = new Reserva();
                  $r->idreserva = $_POST['txtidreserva'];
                  $r->nome = $_POST['txtnome'];
                  $r->email = $_POST['txtemail'];
                  $r->telefone = $_POST['txttelefone'];
                  $r->quantidadeQuartos = $_POST['txtquartos'];
                  $r->tipoSuite = $_POST['txtsuite'];
                  $r->quantidadeAdultos = $_POST['txtadultos'];
                  $r->dia = $_POST['txtdia'];
                  $r->mes = $_POST['txtmes'];
                  $r->mensagem = $_POST['txtmensagem'];
                  $rDAO = new ReservaDAO();
                  $rDAO->alterarReserva($r);
                  header('location:../view/mostrarreservas.php');
                break;

                default:
                  echo "Errou o nome do case!!!";
                }
              ?>
