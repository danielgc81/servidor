<?php
class Pelicula {
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
