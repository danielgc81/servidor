<?php
   require_once "traits.php";
   class Pelicula {

      use Formatear;
      public $titulo;
      public $año;
      public $director;
      public $actores;
      public $genero;

      public function __construct($titulo, $año, $director, $actores, $genero) {
         $this->titulo = $titulo;
         $this->año = $año;
         $this->director = $director;
         $this->actores = $actores;
         $this->genero = $genero;
      }

      public function mostrarPelicula() {
         return "
               <tr>
                  <td>$this->titulo</td>
                  <td>$this->año</td>
                  <td>$this->director</td>
                  <td>$this->actores</td>
                  <td>$this->genero</td>
               </tr>
         ";
      }
   }

   class Serie extends Pelicula {
      use Formatear;
      public $num_temporadas;

      public function __construct ($titulo, $año, $director, $actores, $genero, $num_temporadas) {
         parent::__construct($titulo, $año, $director, $actores, $genero);
         $this->num_temporadas = $num_temporadas;
      }

      public function mostrarPelicula() {
         return "
               <tr>
                  <td>$this->titulo</td>
                  <td>$this->año</td>
                  <td>$this->director</td>
                  <td>$this->actores</td>
                  <td>$this->genero</td>
               </tr>
         ";
      }
   }

   class Cortometraje extends Pelicula {
      use Formatear;
      public $duracion;

      public function __construct($titulo, $año, $director, $actores, $genero, $duracion) {
         return parent::__construct($titulo, $año, $director, $actores, $genero);
         $this->duracion = $duracion;
      }

      public function mostrarPelicula() {
         return "
               <tr>
                  <td>$this->titulo</td>
                  <td>$this->año</td>
                  <td>$this->director</td>
                  <td>$this->actores</td>
                  <td>$this->genero</td>
               </tr>
         ";
      }
   }
