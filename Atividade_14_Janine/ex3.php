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
        $valorProduto;
        $juros3Parcelas;
        $jurosAcima3Parcelas;
        $valorProduto = 260.5;
        $juros3Parcelas = 0.12;
        $jurosAcima3Parcelas = 0.25;
        $valorParcelas = $juros3Parcelas * $valorProduto;
        $valorAPagar = $valorParcelas + $valorProduto;
        $valorCadaParcela = $valorAPagar / 3;






        echo "<p>
        Valor Produto: $valorProduto <br>
        Juros de 3 parcelas: $juros3Parcelas % <br>
        Juros acima de 3 parcelas: $jurosAcima3Parcelas % <br>
        Valor parcelas: $valorParcelas <br>
        Valor a pagar: $valorAPagar <br>
        Valor cada parcela: $valorCadaParcela
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
