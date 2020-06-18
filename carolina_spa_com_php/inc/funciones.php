<?php

// Muestra multiples productos, cantidad de productos como parametro
function obtenerProductos($cantidad = 1) {
     include 'conexion.php';

     try {
          $sql = " SELECT * FROM productos LIMIT $cantidad "; 
          $resultado = $bd->query( $sql );
     } catch(Exception $e) {
          echo $e->getMessage();
          return array();
     }
     return $resultado;
}

