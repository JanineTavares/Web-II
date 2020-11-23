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
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body class="corpo-controller">
      <main class="geral container-fluid ">
          <nav class="p-2 m-5">
              <div class="nav-wrapper red darken-4">
                  <a href="index.php" class="brand-logo left">Avaliação N1 - Folha pagamento Funcionario</a>
                  <ul class="nav-mobile right">
                    <li><a href="../index.php">Voltar ao Inicio</a></li>
                    <li><a href="../view/cadastrafuncionario.php">Cadastrar</a></li>
                  </ul>
              </div>
          </nav>
          <section>
          <?php
            include '../model/funcionario.class.php';

            $nome = $_GET['txtnome'];
            $cpf = $_GET['txtcpf'];
            $cargo = $_GET['txtcargo'];
            $valorHora = $_GET['txtvalorhora'];
            $quantidadeHoras = $_GET['txtquantidadehoras'];
            $horasExtras50 = $_GET['txthorasextras50'];
            $horasExtras100 = $_GET['txthorasextras100'];
            $dependentes = $_GET['txtdependentes'];
            $tipoInsalubridade = $_GET['txtinsalubridade'];
            $valorTransporteMensal = $_GET['txtvaletransporte'];
            $valorRefeicaoDiaria = $_GET['txtvalerefeicao'];

            if(empty($nome) || empty($cpf) || empty($cargo) || empty($valorHora) || empty($quantidadeHoras) || empty($horasExtras50) || empty($horasExtras100) || empty($dependentes) || empty($tipoInsalubridade) || empty($valorTransporteMensal) || empty($valorRefeicaoDiaria)){
              echo  "<strong>Preencha todos os campos</strong>";
            } else {
              $f = new Funcionario($nome, $cpf,$cargo,$valorHora,$quantidadeHoras,$horasExtras50,$horasExtras100,$dependentes,$tipoInsalubridade,$valorTransporteMensal,$valorRefeicaoDiaria);

            echo "<div style='margin-left: 50px;'><p>DADOS DO FUNCIONARIO: " .$f->toString().
                 "<br>Salario Familia: R$" .$f->calcularSalarioFamilia().
                 "<br>Valor Insalubridade: R$" .$f->calcularInsalubridade().
                 "<br>Valor Vale Refeição: R$" .$f->calcularValeRefeicao().
                 "<br>Valor Vale Transporte: R$" .$f->calcularValeTransporte().
                 "<br>Valor Hora Extra 50: R$" .$f->calcularValorExtra50().
                 "<br>Valor Hora Extra 100: R$" .$f->calcularValorExtra100().
                 "<br>Valor Total das Horas Extras: R$" .$f->calcularTotalHorasExtras().
                 "<br>Valor Salário Bruto: R$" .$f->calcularSalarioBruto().
                 "<br>Valor INSS: R$" .$f->calcularInss().
                 "<br>Valor Salario Liquido: R$" .$f->calcularSalarioLiquido().
                 "</p></div>";

               }

          ?>
          <p>
            <a href="../view/cadastrafuncionario.php" style='margin-left: 50px;' class="btn btn-info"> Voltar ao Cadastramento </a>
         </p>
          </section>
      </main>
    </body>
</html>
