<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Página web utilizando framework, Linguagem PHP e formatação CSS, pratica de variáveis">
  <meta name="author" content="Janine Tavares">
  <meta name="keywords" content="html php css framework materialize">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Primeira página com PHP</title>
</head>
<body>
  <main class="container blue lighten-4">
    <header>
      <h1 class="center-align">Trabalhando com PHP</h1>
    </header>
    <article class="container light-green lighten-3">
      <p> <span style="font-weight:bold">1.</span> Desenvolva um algoritmo que receba três número, sendo eles: <br> numero1 = 10 <br>numero2 = 20 <br>numero3 = 20 <br>Seu programa deve encontrar e mostrar na tela a soma dos três números.</p>
      <?php
      $numero1;
      $numero2;
      $numero3;
      $soma;

      $numero1 = 10;
      $numero2 = 20;
      $numero3 = 20;
      $soma = $numero1 + $numero2 + $numero3;

      echo "<p> A soma total dos três números é: " .$soma. "</p>"
      ?>
    </article>

    <article class="container light-green lighten-3">
      <p><span style="font-weight:bold">2.</span> Desenvolva um algoritmo que receba dois valores e encontre a diferença entre eles. Sendo: <br>
        valor1 = 10 <br>
        valor2 = 2 <br>
        Seu programa deve mostrar o resultado na tela.</p>
        <?php
        $valor1;
        $valor2;
        $diferenca;
        $valor1 = 10;
        $valor2 = 2;
        $diferenca = 10 - 2;
        echo "<p> A diferença dos números é: " .$diferenca. "</p>"
        ?>
      </article>

      <article class="container light-green lighten-3">
        <p><span style="font-weight:bold">3.</span> Desenvolva um algoritmo que receba o nome de uma pessoa, o ano de nascimento e ano atual. Sendo: <br>
          nome = "Borigodolfa"; <br>
          nascimento = 2000; <br>
          atual = 2020; <br>

          Seu programa deve calcular a idade que a pessoa fará neste ano atual e mostrar na tela.</p>
          <?php
          $nome;
          $nascimento;
          $atual;

          $nome = "Borigodolfa";
          $nascimento = 2000;
          $atual = 2020;
          $idade = $atual - $nascimento;

          echo "<p> No ano de  $atual, $nome faz $idade anos </p>"
          ?>
        </article>

        <article class="container light-green lighten-3">
          <p><span style="font-weight:bold">4.</span> Desenvolva um algoritmo que receba o nome de um produto, seu valor e quantidade de compras. Sendo: <br>
            produto = "Bis" <br>
            valor = 4.50 <br>
            quantidade = 10 <br>
            Seu programa deve calcular o valor a pagar.</p>
            <?php
            $produto;
            $valor;
            $quantidade;
            $total;

            $produto = "Bis";
            $valor = 4.50;
            $quantidade = 10;
            $total = $quantidade * $valor;



            echo "<p> O total a pagar é R$ $total </p>"
            ?>
          </article>
        </main>

      </body>
      </html>
