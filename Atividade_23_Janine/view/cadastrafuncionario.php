<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title> N1 utilizando POO e padrão MVC </title>
      <meta name="author" content="Janine Tavares e Bruno Lerner">
      <meta name="description" content="Trabalho N1 - Pagina de Cadastramento de Funcionario">
      <meta name="keywords" content="PHP, CSS, Estilização, HTML, MVC">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <main class="cadastrocontainer-fluid">
            <nav>
                <div class="nav-wrapper red darken-4">
                    <a href="../index.php" class="brand-logo left">Avaliação N1 - Folha pagamento Funcionario</a>
                    <ul class="nav-mobile right">
                        <li><a href="../index.php">Voltar ao Inicio</a></li>
                    </ul>
                </div>
            </nav>
            <section>

              <form action="../controller/funcionario.controller.php" method="get" name="formfuncionario">
                <div class="form-group">
                  <label for="txtnome">Nome:</label>
                  <input type="text" name="txtnome" required pattern="^[a-zA-Z ]{4,25}$" >
                </div>
                <div class="form-group">
                  <label for="txtemail">E-mail:</label>
                  <input type="text" name="txtemail" required placeholder="seuemail@email.com">
                </div>
                <div class="form-group">
                  <label for="txtcpf">CPF:</label>
                  <input type="number" name="txtcpf" required pattern="^[0-9]{11}$" >
                </div>
                <div class="form-group">
                  <label for="txtcargo">Cargo:</label>
                  <input type="text" name="txtcargo" pattern="^{4,30}$" required>
                </div>
                <div class="form-group">
                  <label for="txtvalorhora">Valor Hora:</label>
                  <input type="number" name="txtvalorhora" required pattern="^[0-9]{1,2}$" placeholder="">
                </div>
                <div class="form-group">
                  <label for="txtquantidadehoras">Quantidade de Horas:</label>
                  <input type="number" name="txtquantidadehoras" pattern="^[0-9]{1,2}$">
                </div>
                <div class="form-group">
                  <label for="txthorasextras50">Horas Extras 50:</label>
                  <input type="number" name="txthorasextras50" pattern="^[0-9]{1,2}$" required>
                </div>
                <div class="form-group">
                  <label for="txthorasextras100">Horas Extras 100:</label>
                  <input type="number" name="txthorasextras100" pattern="^[0-9]{1,2}$" required>
                </div>
                <div class="form-group">
                  <label for="txtdependentes">Dependentes:</label>
                  <input type="number" name="txtdependentes" pattern="^[0-9]{1,2}$" >
                </div>
                <div class="form-group">
                  <label for="txtinsalubridade">Insalubridade:</label>
                  <select class="form-control" name="txtinsalubridade" required >
                  <option value="1">Sem Salubridade</option>
                  <option value="2">Minimo</option>
                  <option value="3">Médio</option>
                  <option value="4">Máximo</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="txtvaletransporte">Vale Transporte:</label>
                  <input type="number" name="txtvaletransporte" pattern="^[0-9]{1,2}$" required>
                </div>
                <div class="form-group">
                  <label for="txtvalerefeicao">Vale Refeição:</label>
                  <input type="number" name="txtvalerefeicao" pattern="^[0-9]{1,2}$" required >
                </div>
                <input type="submit" value="Verificar" class="btn btn-info">
                <input type="reset" value="Limpar tudo" class="btn btn-danger">
              </form>


            </section>
        </main>

    </body>
</html>
