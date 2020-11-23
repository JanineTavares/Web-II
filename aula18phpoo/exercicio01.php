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
            Programa que mostra a comissão e o salario final.
            <br>
            1.Um funcionário recebe um salário fixo mais 4% de comissão sobre as vendas. Faça um programa que receba o salário fixo de 5400.40, e o valor de suas vendas de 15000.20. Calcule e mostre a comissão e o salário final do funcionário.
          </p>
          <article class="resposta" style="width:50%; margin:auto; background-color:rgba(174, 169, 176, 0.3); border-radius:20px; padding:20px">

              <?php
                include 'funcionario.class.php';

                $f = new Funcionario();


                $f->setSalarioFixo(5400.4);
                $f->setComissao(0.04);
                $f->setValorVendas(15000.2);



                echo "<p>
                Salario fixo: " .$f->getSalarioFixo().
               "<br>
                 Valor comissão: " .$f->mostrarComissao().
                 "<br>
                 Comissao em %: " .$f->getComissao().
                 "<br>
               Vendas: " .$f->getValorVendas().
               "<br>
                 Salario Final: ".$f->mostrarSalarioFinal().
                " <br>
                </p>";
               ?>


          </article>


      </section>
    </main>
  </body>
</html>
