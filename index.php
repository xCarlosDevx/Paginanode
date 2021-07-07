<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>CookingShop - Inicio</title>
  <!--
CookingShop CSS Template
https://templatemo.com/tm-532-next-level
-->
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="row tm-brand-row">
      <div class="col-lg-4 col-10">
        <div class="tm-brand-container">
          <div class="tm-brand-texts">
            <h1 class="text-uppercase tm-brand-name">CookingShop</h1>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-2 tm-nav-col">
        <div class="tm-nav">
          <nav class="navbar navbar-expand-lg navbar-light tm-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto mr-0">
                <li class="nav-item">
                  <div class="tm-nav-link-highlight"></div>
                  <a class="nav-link" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <div class="tm-nav-link-highlight"></div>
                  <a class="nav-link" href="frontend/Menu.html">Ordenar</a>
                </li>
                <li class="nav-item">
                  <div class="tm-nav-link-highlight"></div>
                  <a class="nav-link" href="frontend/Contacto.html">Contacto</a>
                </li>
                <li class="nav-item dropdown" id="profile">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" style="cursor: pointer;" onclick="logout()">Cerrar Sesion</a>
                  </div>
                </li>
                <li class="nav-item" id="login">
                  <div class="tm-nav-link-highlight"></div>
                  <a class="nav-link" href="frontend/login-vista.html">Iniciar Sesion</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="row tm-welcome-row">
      <div class="col-12 tm-page-cols-container">
        <div class="tm-page-col-left tm-welcome-box tm-bg-gradient">
          <p class="tm-welcome-text">
            <em>"CookingShop no solo es una app de envios de comida a domicilio también es una salida para cuidar lo que
              comes y tu salud."</em>
          </p>
        </div>
        <div class="tm-page-col-right">
          <div class="tm-welcome-parallax" data-parallax="scroll" data-image-src="img/3.png"></div>
        </div>
      </div>
    </div>

    <section class="row tm-pt-4 tm-pb-6">
      <div class="col-12 tm-tabs-container tm-page-cols-container">
        <div class="tm-page-col-left tm-tab-links">
          <ul class="tabs clearfix" data-tabgroup="first-tab-group">
            <li>
              <a href="#tab1" class="active">
                <div class="tm-tab-icon"></div>
                Sobre Nosotros
              </a>
            </li>
            <li>
              <a href="#tab2" class="">
                <div class="tm-tab-icon"></div>
                Visión y Misión
              </a>
            </li>
          </ul>
        </div>
        <div class="tm-page-col-right tm-tab-contents">
          <div id="first-tab-group" class="tabgroup">
            <div id="tab1">
              <div class="text-content">
                <h3 class="tm-text-secondary tm-mb-5">
                  ¿Quiénes somos?
                </h3>
                <p class="tm-mb-5">


                  Somos una app y página web para realizar pedidos de comida independientemente
                  del lugar donde la persona esté en el territorio nacional, desde su computador.
                </p>
                <h3 class="tm-text-secondary tm-mb-5">
                  ¿Cuál es nuestro objetivo?
                </h3>
                <p class="tm-mb-5">
                  Permitir a las personas de distintos lugares
                  del pais ordenar y pedir su comida, ya sea desayuno, almuerzo, un snack o cena.
                </p>
              </div>
              <div class="row tm-pt-5">
                <div class="col-md-4 text-center">
                  <div class="tm-about-person mx-auto">
                    <img src="img/bitcoin-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                    <h4 class="tm-text-secondary tm-mb-1">
                      Hecho con amor
                    </h4>


                    <p>
                      Todo lo que hacemos en CookingShop está hecho con amor y dedicación, la calidad de nuestros
                      alimentos demuestran
                      lo que decimos, nos comprometemos a ofrecerle lo que le gusta para su satisfacción.
                    </p>
                  </div>
                </div>

                <div class="col-md-4 text-center">
                  <div class="tm-about-person mx-auto">
                    <img src="img/ar-guy.jpg" alt="Image" class="img-fluid tm-mb-1" />
                    <h4 class="tm-text-secondary tm-mb-1">Comida Saludable </h4>

                    <div class="tm-mb-3">

                    </div>
                    <p>
                      Haz escuchado el dicho: "Eres lo que comes", bueno sí es así, queremos ayudarte con eso
                      ya que, en CookingShop queremos ayudarte a que cuides tu salud mientras disfrutas de alfo
                      delicioso.
                    </p>
                  </div>
                </div>

                <div class="col-md-4 text-center">
                  <div class="tm-about-person mx-auto">
                    <img src="img/desk-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                    <h4 class="tm-text-secondary tm-mb-1">Los mejores alimentos</h4>
                    <div class="tm-mb-3">

                    </div>
                    <p>
                      Compramos los mejores alimentos e ingredientes para realizar sus platos preferidos, para que se
                      sienta a gusto con lo que consumirá.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab2">
              <div class="text-content">
                <h3 class="tm-text-secondary tm-mb-5">
                  Visión y Misión</h3>
                <p class="tm-mb-5">

                  Nuestra visión es dominar el negocio de comida a domicilio, a través de la satisfacción del cliente.
                  Ser reconocidos por los empleados, clientes, competidores, proveedores y
                  público en general. Promover la innovación y creatividad.
                </p>
                <p class="tm-mb-5">
                  Nuestra misión es conectar a millones de
                  personas en busca de comida
                  con miles de restaurantes con
                  delivery de manera rápida.
                </p>
              </div>
              <div class="row tm-pt-5">
                <div class="col-md-4 text-center">
                  <div class="tm-about-person mx-auto">
                    <img src="img/bitcoin-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                    <h4 class="tm-text-secondary tm-mb-1">
                      Hecho con amor
                    </h4>
                    <p class="tm-mb-2">De nuestra cocina a tu casa.</p>

                    <p>
                      Los platos están hecho con dedicación y amor para ti.
                    </p>
                  </div>
                </div>

                <div class="col-md-4 text-center">
                  <div class="tm-about-person mx-auto">
                    <img src="img/ar-guy.jpg" alt="Image" class="img-fluid tm-mb-1" />
                    <h4 class="tm-text-secondary tm-mb-1">Comida Saludable </h4>

                    <div class="tm-mb-3">

                    </div>
                    <p>
                      Haz escuchado el dicho: "Eres lo que comes", bueno sí es así, queremos ayudarte con eso
                      ya que, en CookingShop queremos ayudarte a que cuides tu salud mientras disfrutas de alfo
                      delicioso.
                    </p>
                  </div>
                </div>

                <div class="col-md-4 text-center">
                  <div class="tm-about-person mx-auto">
                    <img src="img/desk-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                    <h4 class="tm-text-secondary tm-mb-1">Los mejores alimentos</h4>

                    <div class="tm-mb-3">

                    </div>
                    <p>
                      Compramos los mejores alimentos e ingredientes para realizar sus platos preferidos, para que se
                      sienta a gusto con lo que consumirá.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row tm-pt-5">
              <div class="col-md-4 text-center">
                <div class="tm-about-person mx-auto">
                  <img src="img/bitcoin-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                  <h4 class="tm-text-secondary tm-mb-1">
                    Hecho con amor
                  </h4>
                  <p class="tm-mb-2">De nuestra cocina a tu casa.</p>

                  <p>
                    Los platos están hecho con dedicación y amor para ti.
                  </p>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="tm-about-person mx-auto">
                  <img src="img/ar-guy.jpg" alt="Image" class="img-fluid tm-mb-1" />
                  <h4 class="tm-text-secondary tm-mb-1">Comida Saludable </h4>
                  <p>
                    Haz escuchado el dicho: "Eres lo que comes", bueno sí es así, queremos ayudarte con eso
                    ya que, en CookingShop queremos ayudarte a que cuides tu salud mientras disfrutas de alfo delicioso.
                  </p>
                </div>
              </div>

              <div class="col-md-4 text-center">
                <div class="tm-about-person mx-auto">
                  <img src="img/desk-girl.jpg" alt="Image" class="img-fluid tm-mb-1" />
                  <h4 class="tm-text-secondary tm-mb-1">Los mejores alimentos</h4>
                  <div class="tm-mb-3">

                  </div>
                  <p>
                    Compramos los mejores alimentos e ingredientes para realizar sus platos preferidos, para que se
                    sienta a gusto con lo que consumirá.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <!-- Call to Action -->
  <section class="row" id="tmCallToAction">
    <div class="col-12 tm-page-cols-container tm-call-to-action-col">
      <div class="tm-page-col-right">
        <div class="tm-call-to-action-box">
          <i class="fas fa-3x fa-rss-square tm-call-to-action-icon"></i>
          <div class="tm-call-to-action-text">
            <h3 class="tm-call-to-action-title">
              Necesita que le realicemos alguna...
            </h3>
            <p class="tm-call-to-action-description">
              Preparación especial como picadera, almuerzo especial, pastel de bodas o buffet, puede comunicarse con
              nosotros insertando su correo
              para que lleguemos a un acuerdo; Inserte aquí debajo su correo.
            </p>
            <form action="#" method="GET" class="tm-call-to-action-form">
              <input type="email" name="email" placeholder="Correo" class="tm-email-input" required />
              <button type="submit" class="btn btn-primary">
                Enviar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Page footer -->
  <footer class="row tm-page-footer">
    <p class="col-12 tm-copyright-text mb-0">
      Copyright &copy; 2021 CookingShop...
    </p>
  </footer>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/userData.js"></script>
  <script>
    $(function () {
      // Tabs
      $(".tabgroup > div").hide();
      $(".tabgroup > div:first-of-type").show();
      $(".tabs a").click(function (e) {
        e.preventDefault();
        var $this = $(this),
          tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
          others = $this
          .closest("li")
          .siblings()
          .children("a"),
          target = $this.attr("href");
        others.removeClass("active");
        $this.addClass("active");
        $(tabgroup)
          .children("div")
          .hide();
        $(target).show();

        // Scroll to tab content (for mobile)
        if ($(window).width() < 992) {
          $("html, body").animate({
              scrollTop: $("#first-tab-group").offset().top
            },
            200
          );
        }
      });
    });
  </script>
</body>

</html>
