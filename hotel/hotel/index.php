<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>
    Hotel Urbanus
  </title>
  <meta name="author" content="Janine Tavares">
  <meta name="description" content="Localizado na zona central de Porto Alegre, o Hotel Urbanus">
  <meta name="keywords" content="PHP, CSS, Estilização, HTML, PHP">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Compiled and minified CSS -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="view/assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="view/assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="view/assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="view/assets/gallery/blueimp-gallery.min.css">


<!-- favicon -->
<link rel="shortcut icon" href="view/images/favicon.png" type="image/x-icon">
<link rel="icon" href="view/images/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="view/assets/style.css">



<script type="text/javascript">
$(document).ready(function(){
  $("#telefone").mask("(00) 00000-0000")
})

</script>

</head>

<body id="home">


  <!-- top -->
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Inscreva-se</button>
    </form>


<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="view/images/logo.png"  alt="Urbanus"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li><a href="index.php">Home </a></li>
        <li><a href="view/rooms-tariff.php">Quartos e Tarifas</a></li>
        <li><a href="view/gallery.php">Galeria</a></li>
        <li><a href="view/contact.php">Contato</a></li>
        <li><a href="view/mostrarreservas.php">Sua Reserva</a></li>
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->


<!-- banner -->
<div class="banner">
    <img src="view/images/photos/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Hotel URBANUS</h1>
                <p class="animated fadeInUp">O mais luxuoso hotel de Porto Alegre com tratamento real e excelente serviço ao hóspede</p>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <div>
      <img src="view/images/interior.png" width="100%" height="400" alt=""></div>
    </div>
<div class="col-sm-5 col-md-4">
<h3>Reserva</h3>
    <form action="controller/reserva.controller.php?op=cadastrar"  role="form" class="wowload fadeInRight" method="post">
        <div class="form-group ">
            <input type="text" name="txtnome" class="form-control"  placeholder="Nome" required pattern="^[a-zA-Z ]{4,25}$">
        </div>
        <div class="form-group ">
            <input type="email" name="txtemail" class="form-control"  placeholder="Email">
        </div>
        <div class="form-group ">
            <input id="telefone" type="text" name="txttelefone" class="form-control"  placeholder="Telefone" pattern="^[0-9]{11}$">
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="txtquartos">
              <option>Nº. de quartos</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>
            <div class="col-xs-6">
            <select class="form-control" name="txtadultos">
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
              <select class="form-control" name="txtsuite">
                <option>Suite</option>
                <option value="01">Exitus</option>
                <option value="02">Fiat Lux</option>
                <option value="03">Agnus Dei</option>
                <option value="04">Bona Fide</option>
              </select>
              </div>
            <div class="col-xs-4">
              <select name="txtdia" class="form-control col-sm-2"  id="expiry-month">
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
              <select class="form-control col-sm-2" name="txtmes" id="expiry-month">
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
        </div>
        <div class="form-group">
            <textarea name="txtmensagem" class="form-control"  placeholder="Observação" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Reservar</button>
    </form>
</div>
</div>
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="view/images/photos/8.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="view/images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="view/images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Quartos<a href="view/rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="view/images/photos/6.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="view/images/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="view/images/photos/4.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Pacotes<a href="view/gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="view/images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="view/images/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="view/images/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Alimentação<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>Urbanus</h4>
                    <p><q>A verdadeira arte de viajar...<br>
A gente sempre deve sair à rua como quem foge de casa,<br>
Como se estivessem abertos diante de nós todos os caminhos do mundo.<br>
Não importa que os compromissos, as obrigações, estejam ali...<br>
Chegamos de muito longe, de alma aberta e o coração cantando!</q><br>

— Mario Quintana. </p>
                </div>

                 <div class="col-sm-3">
                    <h4>Links rápidos</h4>
                    <ul class="list-unstyled">
                        <li><a href="view/rooms-tariff.php">Quartos e Tarifas</a></li>
                        <li><a href="view/introduction.php">Introdução</a></li>
                        <li><a href="view/gallery.php">Galeria</a></li>
                        <li><a href="view/tour.php">Pacotes</a></li>
                        <li><a href="view/contact.php">Contato</a></li>
                    </ul>
                </div>
                 <div class="col-sm-4 subscribe">
                    <h4>Incrição</h4>
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Seu e-mail aqui">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Ser Notificado</button>
                    </span>
                    </div>
                    <div class="social">
                    <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
                    <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                    <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->

    <!--/.footer-bottom-->
</footer>

<div class="text-center copyright">Powered by <a href="http://thebootstrapthemes.com">thebootstrapthemes.com</a></div>

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>





<script src="view/assets/jquery.js"></script>

<!-- wow script -->
<script src="view/asset/javascript/wow/wow.min.js"></script>

<!-- uniform -->
<script src="view/assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="view/assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="view/assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="view/assets/respond/respond.js"></script>

<!-- gallery -->
<script src="view/assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="view/assets/script.js"></script>

</body>
</html>
