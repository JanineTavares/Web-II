<?php include 'header.php';?>


       <div class="row container-fluid">
         <section>

               <h2 class="text-center"> Reservas Cadastradas </h2>

               <?php
                 include '../dao/reservadao.class.php';
                 include '../model/reserva.class.php';


                 $reservaDAO = new ReservaDAO();
                 $reservas = $reservaDAO->buscarReservas();

                ?>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Telefone</th>
                      <th>Quartos</th>
                      <th>Suite</th>
                      <th>Adultos</th>
                      <th>Dia</th>
                      <th>Mês</th>
                      <th>Mensagem</th>
                      <th>Editar/Excluir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       foreach ($reservas as $r) {
                         echo "<tr>";
                         echo "<td>".$r->idreserva."</td>";
                         echo "<td>".$r->nome."</td>";
                         echo "<td>".$r->email."</td>";
                         echo "<td>".$r->telefone."</td>";
                         echo "<td>".$r->quantidadeQuartos."</td>";
                         echo "<td>".$r->tipoSuite."</td>";
                         echo "<td>".$r->quantidadeAdultos."</td>";
                         echo "<td>".$r->dia."</td>";
                         echo "<td>".$r->mes."</td>";
                         echo "<td>".$r->mensagem."</td>";

                         echo "<td>
                                 <a href='../controller/reserva.controller.php?op=alterar&idreserva=$r->idreserva'><img src='../img/edita.png' alt='Icone Edição'></a>&nbsp;&nbsp;
                                 <a href='../controller/reserva.controller.php?op=deletar&idreserva=$r->idreserva'><img src='../img/exclui.png' alt='Icone Excluir'>
                                 </a>
                               </td>";
                         echo "</tr>";
                       }
                     ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>

             </section>

</div>





<?php include 'footer.php';?>
