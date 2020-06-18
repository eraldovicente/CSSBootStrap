<?php
    include 'templates/header.php';
    include 'templates/navegacion.php';

?>

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

<?php
    include 'templates/footer.php';
?>