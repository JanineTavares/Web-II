<?php
  session_start();

include 'header.php'; ?>

        <?php
          if(isset($_SESSION['reservas'])){
            include ('../model/reserva.class.php');
            $r = array();
            $r = unserialize($_SESSION['reservas']);
          }
         ?>

      <div class="container-fluid bg-danger" >
        <form action="../controller/reserva.controller.php?op=confirmaedicao" method="post" name="form01">
          <div class="form-group">
            <label for="txtidreserva">
              Código:
            </label>
            <input type="text" name="txtidreserva" class="form-control" value="<?php echo $r[0]->idreserva ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label for="txtnome">
              Nome:
            </label>
            <input type="text" name="txtnome" class="form-control" value="<?php echo $r[0]->nome ?>">
          </div>
          <div class="form-group">
            <label for="txttelefone">
              E-mail:
            </label>
            <input type="email" name="txtemail" class="form-control" value="<?php echo $r[0]->email ?>">
          </div>
          <div class="form-group">
            <label for="txtemail">
              Telefone:
            </label>
            <input type="number" name="txttelefone" class="form-control" value="<?php echo $r[0]->telefone ?>">
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-xs-6">
              <select class="form-control" name="txtquartos" value="<?php echo $r[0]->quantidadeQuartos ?>">
                <option>Nº. de quartos</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              </div>
              <div class="col-xs-6">
              <select class="form-control" name="txtadultos" value="<?php echo $r[0]->quantidadeAdultos ?>">
                <option>Nº. of Adultos</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
                <div class="col-xs-4">
                <select class="form-control" name="txtsuite" value="<?php echo $r[0]->$tipoSuite ?>">
                  <option>Suite</option>
                  <option value="01">Exitus</option>
                  <option value="02">Fiat Lux</option>
                  <option value="03">Agnus Dei</option>
                  <option value="04">Bona Fide</option>
                  <!-- <option>Suite</option>
                  <option>Exitus</option>
                  <option>Fiat Lux</option>
                  <option>Agnus Dei</option>
                  <option>Bona Fide</option> -->
                </select>
                </div>
              <div class="col-xs-4">
                <select name="txtdia" class="form-control col-sm-2"  id="expiry-month" value="<?php echo $r[0]->dia ?>">
                  <option>Dia</option>
                  <option value="01">1</option>
                  <option value="02">2</option>
                  <option value="03">3</option>
                  <option value="04">4</option>
                  <option value="05">5</option>
                  <option value="06">6</option>
                  <option value="07">7</option>
                  <option value="08">8</option>
                  <option value="09">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="22">23</option>
                  <option value="23">24</option>
                  <option value="24">25</option>
                  <option value="25">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
              </div>
              <div class="col-xs-4">
                <select class="form-control col-sm-2" name="txtmes" id="expiry-month" value="<?php echo $r[0]->mes ?>">
                  <option>Mês</option>
                  <option value="01">Jan</option>
                  <option value="02">Fev</option>
                  <option value="03">Mar</option>
                  <option value="04">Abr</option>
                  <option value="05">Mai</option>
                  <option value="06">Jun</option>
                  <option value="07">Jul</option>
                  <option value="08">Ago</option>
                  <option value="09">Set</option>
                  <option value="10">Out</option>
                  <option value="11">Nov</option>
                  <option value="12">Dez</option>
                </select>
              </div>
            </div>
          <div class="form-group">
            <label for="txtmensagem">
              Mensagem:
            </label>
            <textarea name="txtmensagem" rows="8" cols="15" class="form-control container-fluid"><?php echo $r[0]->mensagem ?></textarea>
          </div>
        </div>

          <?php
              unset($_SESSION['reservas']);
           ?>
          <input type="reset" name="limpa" value="Limpar" class="btn btn-primary">
          <input type="submit" name="altera" value="Alterar" class="btn btn-primary">
        </form>
      </div>





      </section>
    </main>
  </body>
</html>
