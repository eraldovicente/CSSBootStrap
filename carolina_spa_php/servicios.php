<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lato:wght@400;700;900&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    
    <header class="encabezado-sitio container">
      <div class="row justify-content-md-between align-items-center">
      <!--
     justify-content-md-center, md-around md-start, md-end
      opcional: align-items-center -start -end -center -baseline -stretch -->
            <div class="col-lg-4">
                <a href="index.php">
                    <img src="img/logo.svg" class="img-fluid mx-auto d-block pt-4 pb-4">
                </a>
            </div> <!--col-lg-4-->

            <div class="col-lg-4">
                <nav class="sociales text-center text-lg-right">
                    <ul>
                        <li>
                           <a href="http://facebook.com">
                             <span class="sr-only">Facebook</span>
                           </a>
                        </li>
                        <li>
                           <a href="http://twitter.com">
                              <span class="sr-only">Twitter</span>
                           </a>
                        </li>
                        <li>
                           <a href="http://instagram.com">
                              <span class="sr-only">Instagram</span>
                           </a>
                        </li>
                        <li>
                           <a href="http://pinterest.com">
                              <span class="sr-only">Pinterest </span>
                           </a>
                        </li>
                        <li>
                           <a href="http://youtube.com">
                              <span class="sr-only">YouTube</span>
                           </a>
                        </li>
                    </ul>
                </nav>
            </div> <!--.col-lg-4-->
        </div> <!--.row-->
  </header>

  <div class="navegacion mt-3 py-1">
    <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
      <!-- menu responsive aqui -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal" aria-label="Mostrar Navegacion">
        <span class="navbar-toggler-icon">

        </span>
      </button>
      <a href="#" class="navbar-brand d-lg-none">Carolina Spa</a>
        <div class="container">
            <div class="collapse navbar-collapse w-100" id="nav_principal">
                  <ul class="nav nav-justified w-100 flex-column flex-sm-row">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="nosotros.html" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="servicios.html" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="productos.html" class="nav-link">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacto.html" class="nav-link">Contacto</a>
                    </li>
                  </ul>
            </div> <!--.collapse-->
      </div> <!--.container-->
    </nav>
  </div>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <!-- Aparece em dispositivo grande -->
          <img src="img/servicios.jpg" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <!-- Aparece em dispositivo pequeno -->
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Servicios
          </h2>

          <div id="servicios">
            <div class="card">
              <div class="card-header" id="servicio1">
                <h2 class="md-0">
                  <button class="btn btn-link" data-toggle="collapse"
                  data-target="#descripcion1" aria-expanded="true"
                  aria-controls="#descripcion1">
                    Servicio 1
                  </button>
                </h2>
              </div><!--.card-header-->
              <div id="descripcion1" class="collapse show"
              aria-labelledby="servicio1" data-parent="#servicios">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur officiis, quia quisquam doloribus ratione impedit tempora itaque maxime qui voluptatem, suscipit labore ducimus recusandae, soluta eius reiciendis odit ipsum voluptatibus?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores ex vel eum quos deleniti, iste sequi nostrum sint? Necessitatibus animi veritatis quisquam obcaecati beatae dolor natus quo illum quae culpa.</p>
              </div>
            </div><!--.card-->

            <div class="card">
              <div class="card-header" id="servicio2">
                <h2 class="md-0">
                  <button class="btn btn-link" data-toggle="collapse"
                  data-target="#descripcion2" aria-expanded="false"
                  aria-controls="#descripcion2">
                    Servicio 2
                  </button>
                </h2>
              </div><!--.card-header-->
              <div id="descripcion2" class="collapse"
              aria-labelledby="servicio2" data-parent="#servicios">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur officiis, quia quisquam doloribus ratione impedit tempora itaque maxime qui voluptatem, suscipit labore ducimus recusandae, soluta eius reiciendis odit ipsum voluptatibus?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores ex vel eum quos deleniti, iste sequi nostrum sint? Necessitatibus animi veritatis quisquam obcaecati beatae dolor natus quo illum quae culpa.</p>
              </div>
            </div><!--.card-->

            <div class="card">
              <div class="card-header" id="servicio3">
                <h2 class="md-0">
                  <button class="btn btn-link" data-toggle="collapse"
                  data-target="#descripcion3" aria-expanded="false"
                  aria-controls="#descripcion3">
                    Servicio 3
                  </button>
                </h2>
              </div><!--.card-header-->
              <div id="descripcion3" class="collapse"
              aria-labelledby="servicio3" data-parent="#servicios">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur officiis, quia quisquam doloribus ratione impedit tempora itaque maxime qui voluptatem, suscipit labore ducimus recusandae, soluta eius reiciendis odit ipsum voluptatibus?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores ex vel eum quos deleniti, iste sequi nostrum sint? Necessitatibus animi veritatis quisquam obcaecati beatae dolor natus quo illum quae culpa.</p>
              </div>
            </div><!--.card-->
          </div>

        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar p-3">
            <h2 class="text-center text-uppercase mt-4">Nuevos Clientes</h2>
            <p class="lead text-center mt-4">
              Recibe 20% de descuento con este cupón
            </p>

            <div class="cupon px-2 py-5 mt-5">
              <p class="text-uppercase text-center mb-0">
                <span class="display-4">20% Descuento</span></br>
                en todos los servicios
              </p>
            </div>
          </div>
        </aside>
      </div>
    </div>

    <div class="citas container-fluid py-5 mt-5">
      <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 text-center">
            <h3 class="text-uppercase">Realiza un cita</h3>
            <p class="mt-5">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ad hic, nostrum iusto, voluptas quia est nemo veniam rerum tempora recusandae, vero error exercitationem ducimus rem expedita esse praesentium impedit.
            </p>
            <a href="#" class="btn btn-primary mt-3 text-uppercase">Leer más</a>
          </div>
      </div>
    </div>

    <footer class="footer-sitio pt-3 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quam. Non architecto fuga nostrum voluptate quaerat perspiciatis sequi nisi quia, odio est! Sequi placeat culpa rerum quisquam corporis earum asperiores.</p>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase pb-4">Horario</h3>
            <p>Lun-Vie: 9 AM - 7 PM</p>
            <p>Sábado: 10 AM - 2 PM</p>
            <p>Domingo: Cerrado</p>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase pb-4">Contacto</h3>
            <p>66 East Sunnyslope Avenue</p>
            <p>Lansdowne, PA 19050</p>
            <nav class="sociales text-center">
              <ul>
                  <li>
                     <a href="http://facebook.com">
                       <span class="sr-only">Facebook</span>
                     </a>
                  </li>
                  <li>
                     <a href="http://twitter.com">
                        <span class="sr-only">Twitter</span>
                     </a>
                  </li>
                  <li>
                     <a href="http://instagram.com">
                        <span class="sr-only">Instagram</span>
                     </a>
                  </li>
                  <li>
                     <a href="http://pinterest.com">
                        <span class="sr-only">Pinterest </span>
                     </a>
                  </li>
                  <li>
                     <a href="http://youtube.com">
                        <span class="sr-only">YouTube</span>
                     </a>
                  </li>
              </ul>
          </nav>
          </div><!--.col-md-4-->
          <hr class="w-100">
          <p class="text-center copyright w-100">Carolina Spa & Salon 2020. Todos los derechos reservados</p>
        </div><!--.row-->
      </div><!--.container-->
    </footer>

    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>