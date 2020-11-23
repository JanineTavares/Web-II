<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
<meta charset="utf-8">
<title> Criando Mascaras </title>
<meta name="description" content="Página utilizando Jquery para criação de máscaras">
<meta name="author" content="Janine Tavares">
<meta name="keywords" content="HTML CSS PHP JS JQUERY">
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
<!-- <script src="js/javascript/jquery-3.3.1.min.js"></script>
<script src="js/javascript/jquery.mask.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#telefone").mask("(00) 00000-0000")
})

</script>
</head>
<body>

<main>

<div>
<header class="bg-dark container jumbotron">
<h1 class="text-primary"> Contato </h1>
</header>
</div>

<div class="form-group container">
<form action="resultado.php" method="get">
<fieldset>
  <legend>Contato</legend>
  <label for="txtnome">Nome: </label>
  <input type="text" name="txtnome" class="form-control">
  <label for="txtemail">Email: </label>
  <input type="email" name="txtemail" class="form-control" placeholder="seuemail@email.com">
  <label for="txttel">Telefone: </label>
  <input type="text" name="txttel" id="telefone" class="form-control" placeholder="(00)00000-0000">
  <button type="submit" class="mt-2 btn btn-primary">Enviar</b
</fieldset>
</form>
</div>



?>




</main>

</body>

</html>
