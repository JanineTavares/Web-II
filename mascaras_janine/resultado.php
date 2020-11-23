<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
<meta charset="utf-8">
<title> Criando Mascaras </title>
<meta name="description" content="Página utilizando Jquery para criação de máscaras">
<meta name="author" content="Janine Tavares">
<meta name="keywords" content="HTML CSS PHP JS JQUERY">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
      <main class="geral container-fluid ">
        <div>
        <header class="bg-dark container jumbotron">
        <h1 class="text-primary"> Seus Dados </h1>
        </header>
        </div>
          <section>
          <?php
            include 'pessoa.class.php';

            $nome = $_GET['txtnome'];
            $email = $_GET['txtemail'];
            $telefone = $_GET['txttel'];

            $pessoa = new Pessoa($nome, $email, $telefone);

            $msg = "Nome: ".$nome. "\n
            E-mail: ".$email. "\n
            Telefone: " .$telefone;

            // $msg = wordwrap($msg,70);

            mail("janine.h201@gmail.com","Seus dados cadastrados",$msg);

            echo "<div class='form-group container' <p>Cadastro Feito com sucesso! <br>
            Dados Cadastrados enviados para seu e-mail <br><br>DADOS DO USUARIO: " .$pessoa->toString();

          ?>
        </section>
          <div class="form-group container">
          <p>
            <a href="index.php" class="btn btn-info"> Voltar ao Cadastramento </a>
         </p>
       </div>
      </main>
    </body>
</html>
