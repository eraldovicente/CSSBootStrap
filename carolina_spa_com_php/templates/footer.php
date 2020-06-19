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

<?php
   // Guarda todo el contenido a un archivo
   $fp = fopen($archivoCache, 'w');
   fwrite($fp, ob_get_contents());
   fclose($fp);
   // Enviar al navegador
   ob_end_flush();
?>