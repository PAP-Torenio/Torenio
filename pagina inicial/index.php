<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Expert &mdash; Onepage Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php session_start();?>


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="index.html" class="text-uppercase">TORENIO</a></div>
          <div>
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-xl-block">
                <li><a href="#inicio-section" class="nav-link">Início</a></li>
                <li><a href="#sobre-section" class="nav-link">Sobre Nós</a></li>
                <li><a href="#jogos-section" class="nav-link">Jogos</a></li>
                <li><a href="#regras-section" class="nav-link">Regras do Torneio</a></li>
                <li><a href="#staff-section" class="nav-link">Staff</a></li>

              </ul>
            </nav>
          </div>
		  <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
<?php
  if(!empty($_SESSION)){
    echo'<li class="cta"><a href="../Registar e login/Master/Logout.php" class="nav-link"><span class="border bg-danger rounded text-white border-danger">Logout</span></a></li>';
  }
  else{
    echo'<li class="cta"><a href="../Registar e login/Master/Login.php" class="nav-link"><span class="border bg-danger rounded text-white border-danger">Login</span></a></li>';
  }
?>
			  <li class="cta"><a href="../Registar e login/Utilizador/registar.html" class="nav-link"><span class="border bg-danger rounded text-white border-danger">Registar</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section custom-owl-carousel" id="inicio-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mr-auto" data-aos="fade-up">

            <div class="owl-carousel slide-one-item-alt-text">
              <div class="slide-text">
                <h1>Bem-vindo</h1>
                <p class="mb-5">Temos como objetivo fazer com que todos os jogadores de divirtam.</p>
              </div>
              <div class="slide-text">
               <h1>Torenio, o torneio gaming da ESR</h1>
               <p class="mb-5">Este torneio é realizado pelo Curso Profissional Técnico de Gestão de Equipamentos Informáticos.</p>
              </div>
              <div class="slide-text">
                <h1>Variadade de Jogos</h1>
                <p class="mb-5">Temos uma lista de jogos disponiveis no nosso torneio para vocês.</p>
              </div>
            </div>

          </div>
          <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="100">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/imagem2.jpg" alt="Image" class="img-fluid">
              <img src="images/imagem1.jpg" alt="Image" class="img-fluid">
              <img src="images/imagem3.jpg" alt="Image" class="img-fluid">
            </div>

            <div class="owl-custom-direction">
              <a href="#" class="custom-prev"><span class="icon-keyboard_arrow_left"></span></a>
              <a href="#" class="custom-next"><span class="icon-keyboard_arrow_right"></span></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-2" id="sobre-section" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">Sobre Nós</h2>
            <p>Nós somos um grupo de alunos do Curso profissional Técnico de Gestão de Equipamentos informáticos da Escola Secundária da Ramada, estando agora no nosso terceiro ano de curso temos que realizar uma PAP, Projeto de Aptidão Profissional, e tivemos a ideia de criar uma pequena LAN de jogos aqui na nossa escola aberta a todos os seus alunos.</p>
			<p>Aprveitem e Divirtam-se.</p>
          </div>
        </div>

      </div>

<div class="site-section section-2 bg-light" id="jogos-section" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">Jogos</h2>
            <p>Temos uma lista de jogos disponiveis para que possam jogar no nosso torneio.</p>
			<p>Esta lista não é realizada em função de jogos famoso mas sim em função das condições.</p>
          </div>
        </div>


      <div class="owl-carousel nonloop-block-13">

          <a class="work-thumb" href="images/game1.jpg" data-fancybox="gallery">
            <div class="work-text">
              <h3>Counter Strike Global Ofensive</h3>
            </div>
            <img src="images/game1.jpg" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="images/game2.jpg" data-fancybox="gallery">
            <div class="work-text">
              <h3>Counter Strike 1.6</h3>
            </div>
            <img src="images/game2.jpg" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="images/game3.jpg" data-fancybox="gallery">
            <div class="work-text">
              <h3>Minecraft</h3>
            </div>
            <img src="images/game3.jpg" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="images/game4.jpg" data-fancybox="gallery">
            <div class="work-text">
              <h3>Half-Life</h3>
            </div>
            <img src="images/game4.jpg" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="images/game5.jpg" data-fancybox="gallery">
            <div class="work-text">
              <h3>Team Fortress 2</h3>
            </div>
            <img src="images/game5.jpg" alt="Image" class="img-fluid">
          </a>
      </div>


    </div>

    <div class="site-section testimonial-wrap custom-owl-carousel" id="regras-section">
      <div class="container">
        <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
          <div class="col-lg-6 mb-5 text-center">
            <h2 class="section-title w-100 mx-auto">Regras</h2>
            <p>As regras do nosso torneio serão simples, por favor cumpram e não haverá problemas.</p>
			<p>Obrigado pela vossa compriensão.</p>
          </div>
        </div>
        <div class="row align-items-center"  data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5 mr-auto">

            <div class="owl-carousel slide-one-item-alt-text">
              <div class="slide-text">
                <blockquote>
                <p class="author">&mdash; Regra 1</p>
				<p><span>&ldquo;</span>É obrigatório seres aluno da nossa escola.<span>&rdquo;</span></p>
                </blockquote>
              </div>
              <div class="slide-text">
                <blockquote>
                  <p class="author">&mdash; Regra 2</p>
				  <p><span>&ldquo;</span>Só pode entrar no torneio quem estiver registado.<span>&rdquo;</span></p>
                </blockquote>
              </div>
              <div class="slide-text">
               <blockquote>
                  <p class="author">&mdash; Regra 3</p>
				  <p><span>&ldquo;</span>Não podes falar mal de outros jogadores e respeitar os outros.<span>&rdquo;</span></p>
                </blockquote>
              </div>
              <div class="slide-text">
                <blockquote>
                  <p class="author">&mdash; Regra 4</p>
                  <p><span>&ldquo;</span>Não utilizar mais programa nenhum a não ser o jogo que estás a jogar.<span>&rdquo;</span></p>
                </blockquote>
              </div>
            </div>

          </div>

          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="staff-section" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">Staff</h2>
            <p>André Dias, Nº3,  3ºJ</p>     <p>  Carlos Gonçalves, Nº6,   3ºJ </p>        <p>João Albuquerque, Nº15,   3ºJ  </p>     <p> Manuel Costa, Nº17,   3ºJ</p>
          </div>
        </div>





  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>


  </body>
</html>
