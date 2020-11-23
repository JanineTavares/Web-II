<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <title> Utilizando operadores matematicos </title>
  <meta name="description" content="Exemplo de página web fazendo calculos com PHP">
  <meta name="author" content="Janine Tavares">
  <meta name="keywords" content="HTML CSS PHP">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <main class="bg-warning container jumbotron jumbrotron-fluid">
    <div class="topo">
      <header class="container jumbotron jumbotron-fluid bg-info">
        <h1 id="tituloHeader">PHP: Operadores matemáticos!</h1>
      </header>
    </div>
    <aside>
      <div class="container">
        <p><strong>1. Desenvolva um programa que leia um valor em dólar ($10), e a cotação atual do dólar(5.66). Seu programa deve mostrar a conversão para Reais.</strong></p>

        <?php
        $dolar;
        $cotacao;
        $valor;
        $dolar =  10;
        $cotacao = 5.66;
        $valor = $dolar * $cotacao;
        echo "<p>R: O resultado da conversão é: R$ " .$valor. " reais</p>";
        ?>
      </div>
      <hr>

      <div class="container">
        <p><strong>2. Desenvolva um algoritmo CONVERSOR, este deve ler número de anos (10), e deverá converter este ano para meses, converter ano para semana, converter ano para dias. Ex.: 1 ano, 12 meses, 52 semanas, 365 dias.</strong>
        </p>

        <?php
        $anoInicial;
        $meses;
        $semanas;
        $dias;
        $anoInicial = 10;
        $meses = $anoInicial * 12;
        $semanas = $anoInicial * 52;
        $dias = $anoInicial * 365;

        echo "<p>R:  $anoInicial tem $meses meses, $semanas semanas e  $dias dias </p>";
        ?>
      </div>
        <hr>

      <div class="container">
        <p><strong>3. Desenvolva um programa que leia a altura (2) e base (3) de um retângulo. Seu programa deve calcular a área do retângulo.</strong></p>
        <?php
        $altura;
        $base;
        $area;
        $altura = 2;
        $base = 3;
        $area = $base * $altura;
        echo "<p>R: A area de um retagulo de altura $altura e base $base é: $area </p>";
        ?>
      </div>
      <hr>



      <div class="container">
        <p><strong>4. Desenhe um programa que leia o raio de um círculo (3). Seu programa dever calcular a área e calcular o perímetro do círculo.</strong></p>
        <?php
        $raio;
        $area;
        $perimetro;
        $raio = 3;
        $area = pi() * pow($raio,2) ;
        $perimetro = 2*pi()*$raio;
        echo "<p>R: a area do circulo é $area e o perimetro é $perimetro </p>";
        ?>
      </div>
      <hr>


      <div class="container">
        <p><strong>5. Desenvolva um programa que leia nome (Arroz) , valor de custo de um produto (2.30).
          Seu programa deve o valor com juros de 200% de um valor com desconto de 8%.</strong></p>
          <h5>Não fiz pois achei confusa a explicação do que deveria ser feito</h5>
        </div>

        <div class="container">
          <p><strong>6. EXTRA - Desenvolva um programa que leia o nome, três notas e seus respectivos pesos. Seu programa deve calcular a média ponderada. Faça com que os valores sejam recebidos pela barra de endereço.</strong></p>
          <?php
          $nome;
          $nota1;
          $nota2;
          $nota2;
          $mediaPonderada;
          $nome = $_GET["nome"];
          $nota1 = $_GET["nota1"];
          $nota2 = $_GET["nota2"];
          $nota3 = $_GET["nota3"];
          $pesoNota1 = $_GET["peso1"];
          $pesoNota2 = $_GET["peso2"];
          $pesoNota3 = $_GET["peso3"];
          $mediaPonderada = ($nota1 * $pesoNota1 + $nota2 * $pesoNota2 + $nota3 * $pesoNota3) / ($pesoNota1 + $pesoNota2 + $pesoNota3);
            echo "<p>R: A media ponderada da aluna $nome é: $mediaPonderada </p>";
          ?>
        </div>
        <hr>

      </aside>
    </main>
  </body>
  </html>
