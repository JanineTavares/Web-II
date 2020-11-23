<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <title> Uma simples página utilizando PHP </title>
  <meta name="description" content="Exemplo de página web utilizando PHP">
  <meta name="author" content="Janine Tavares">
  <meta name="keywords" content="HTML CSS PHP">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>

<body>
  <main>

    <div class="topo">
    <header class="header">
      <h1 id="tituloHeader">Resolvendo problemas com PHP!</h1>
    </header>
    <nav class="menu">
      <ul>
        <li> <a href="index.php"> Home </a></li>
        <li> <a href="ex1.php"> Ex1 </a></li>
        <li> <a href="ex2.php"> Ex2 </a></li>
        <li> <a href="ex3.php"> Ex3 </a></li>
        <li> <a href="ex4.php"> Ex4 </a></li>

      </ul>
    </nav>
  </div>

    <div class="questoes">
      <aside class="artigo">
      <?php
        $salarioFixo;
        $comissao;
        $vendas;
        $salarioFixo = 5400.4;
        $comissao = 0.04;
        $vendas = 15000.2;
        $valorComissao = $comissao * $vendas;
        $salarioFinal = $valorComissao + $salarioFixo;





        echo "<p>
        Salario fixo: $salarioFixo <br>
        Valor comissão: $valorComissao <br>
        Comissao em %: $comissao <br>
        Vendas: $vendas <br>
        Salario Final: $salarioFinal<br>
        </p>";

       ?>
     </aside>
    </div>


    <footer>
      <ul>
        <li>Author: Janine Tavares</li>
        <li>E-mail: janine.h201@gmail.com</li>
        <li>WhatsApp: (xx) XXXXX-XXXX</li>
      </ul>
    </footer>




  </main>

</body>

</html>
