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
      $nota1;
      $nota2;
      $nota3;
      $nota1 = 10;
      $nota2 = 9;
      $nota3 = 7;
      $mediaFinal = ($nota1 + $nota2 + $nota3) / 3;

      if($mediaFinal >= 6 ) {
        $resultado = "Aprovado";
      }else {
        $resultado = "Reprovado";
      }


      echo "<p>
      Nota 1: $nota1 <br>
      Nota 2: $nota2 <br>
      Nota 3: $nota3 <br>
      Média: $mediaFinal <br>
      O aluno foi: $resultado
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
