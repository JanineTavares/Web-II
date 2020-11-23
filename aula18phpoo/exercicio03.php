<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>
    PHO Orientado a Objetos
  </title>
  <meta name="author" content="Aline Zenker">
  <meta name="description" content="PHP OO">
  <meta name="keywords" content="PHP, CSS, Estilização, HTML, PHP">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
  <main class="geral container-fluid">

    <nav>
        <div class="nav-wrapper blue darken-4">
          <a href="#" class="brand-logo left">PHP OO</a>
          <ul class="nav-mobile right">
            <li><a href="index.php">Exemplo01</a></li>
            <li><a href="exemplo02.php">Exemplo02</a></li>
            <li><a href="exercicio01.php">Exercício01</a></li>
            <li><a href="exercicio02.php">Exercício02</a></li>
            <li><a href="exercicio03.php">Exercício03</a></li>
          </ul>
        </div>
      </nav>
      <section class="conteudo blue lighten-4" style="height:600px">
          <h2 class="center-align" style="margin-top:0">
            Exercicio01
          </h2>
          <p class="center-align">
            Programa que mostra o valor total das diarias de um hotel.
            <br>
            Pense em um hotel onde podemos fazer reservas. A diária durante a semana custa 180,00 - aos finais de semana essa diária vai à 210,00.
            A diária é para quarto de casal, caso tenha crianças até 10 anos - o valor da diária aumenta em R$50,00 por criança.
            Faça um programa que receba o número de diárias desejada, se a mesma é dia de semana (1) ou final de semana(2), receba o número de crianças até 10 anos, e ao final calcule o total da diária. OBS.: Caso seja apenas o casal sem crianças e fique mais de 3 dias - conceder 8% de desconto no total das diárias.          </p>
          <article class="resposta" style="width:50%; margin:auto; background-color:rgba(174, 169, 176, 0.3); border-radius:20px; padding:20px">

              <?php
                include 'reserva.class.php';

                $reserva = new Reserva();


                $reserva->setValorSemana(180.0);
                $reserva->setValorFinde(210.0);
                $reserva->setDiaSemana(1);
                $reserva->setDiaFinde(2);
                $reserva->setNumeroCriancas(0);
                $reserva->setNumeroDias(4);




                echo "<p>
                Ao fazer uma reserva para mais de 3 dias, ganhe 8% de desconto
                <br>
                Valor Dia da semana: " .$reserva->getValorSemana().
                "<br>
                Valor Fim de Semana: " .$reserva->getValorFinde().
                "<br>
                Valor Fim de Semana: " .$reserva->getDiaSemana().
                "<br>
                Valor Fim de Semana: " .$reserva->getDiaFinde().
                "<br>
                Número de crianças: " .$reserva->getNumeroCriancas().
                "<br>
                Número dias de reserva: " .$reserva->getNumeroDias().
                "<br>
                Valor desconto dia de semana: " .$reserva->aplicarDescontoDiaSemana().
                "<br>
                Valor desconto fim de semana: " .$reserva->aplicarDescontoFimDeSemana().
                "<br>
                Valor final com desconto: " .$reserva->mostrarValorFinal().
                "</p>"

               ?>


          </article>


      </section>
    </main>
  </body>
</html>
