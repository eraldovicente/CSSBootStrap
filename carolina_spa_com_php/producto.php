<?php

    if ( isset( $_GET['id'] ) ) {
      if ( filter_var( $_GET['id'], FILTER_VALIDATE_INT ) ) {
        $producto_id = $_GET['id'];
      } else {
        header('Location: 404.html');
        exit;
      }
    }
    include 'templates/header.php';
    include 'templates/navegacion.php';
    include 'inc/funciones.php';

    // ini_set("display_error", "1");
    // error_reporting(E_ALL);

    $resultado = obtenerProducto( $producto_id );
    while($producto = $resultado->fetch_assoc() ) {

      echo "<pre>";
      var_dump($producto);
      echo "<pre>";
?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <!-- Aparece em dispositivo grande -->
          <img src="img/producto_01.jpg" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Producto 1</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row no-gutters">
        <!-- Aparece em dispositivo pequeno -->
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Producto 1
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum quia nesciunt rem quod ut. Nam molestias quibusdam voluptas, maxime sit, quae in autem voluptate nesciunt aliquid perferendis adipisci ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quibusdam placeat praesentium nisi, veniam dignissimos saepe minus est quidem cupiditate corrupti possimus nemo eaque id dolorem assumenda error porro sit.</p>

          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis architecto nulla deleniti sunt esse quibusdam eos consequuntur. Quasi quaerat, numquam voluptatem tenetur, repellendus fuga officia quod quam libero vitae dolorem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum quo, alias, commodi veritatis aliquam quis ducimus inventore, atque aut harum enim perspiciatis id? Assumenda ex fugit nobis, molestiae officiis temporibus!</p> 
        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar pt-5 descripcion_producto">
            <h2 class="text-center text-uppercase mt-4">Descripcion</h2>
            <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et eius facilis magni beatae voluptate porro?</p>

            <h3 class="text-center text-uppercase mt-5">Precio</h3>
            <p class="display-4 text-center">$25.00</p>
          </div>
        </aside>
      </div>
    </div>

<?php
    } // Fin del while
    include 'templates/footer.php';
?>