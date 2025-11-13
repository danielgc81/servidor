<?php
class Utilidades {
   public static function añadirPelicula (&$peliculas, Pelicula $nueva_pelicula) {
      $peliculas[] = $nueva_pelicula;
   }

   public static function incrementarVisitasCatalogo () {
      if (!isset($_SESSION["visitas_catalogo"])) {
         $_SESSION["visitas_catalogo"] = 0;
      }

      $_SESSION["visitas_catalogo"]++;
   }

   public static function filtrarPeliculas ($peliculas, $genero, $año, $director) {
      $resultado = [];

      foreach ($peliculas as $pelicula) {
         if (
            ($pelicula->genero == $genero || $genero == "") &&
            ($pelicula->año == $año || $año == "") &&
            (stripos($pelicula->director, $director) !== false || $director == "")
         ) {
            $resultado[] = $pelicula;
         }
      }

      return $resultado;
   }
}
