<?php
trait Formatear {
   public function toHTML() {
      if ($this instanceof Cortometraje) {
         return "
         <article>
            <ul>
               <h3>{$this->titulo}</h3>
               <li>{$this->año}</li>
               <li>{$this->director}</li>
               <li>{$this->actores}</li>
               <li>{$this->duracion}</li>
            </ul>
         </article>
      ";
      }

      if ($this instanceof Serie) {
         return "
         <article>
            <ul>
               <h3>{$this->titulo}</h3>
               <li>{$this->año}</li>
               <li>{$this->director}</li>
               <li>{$this->actores}</li>
               <li>{$this->genero}</li>
               <li>{$this->num_temporadas}</li>
            </ul>
         </article>
      ";
      }

      return "
         <article>
            <ul>
               <h3>{$this->titulo}</h3>
               <li>{$this->año}</li>
               <li>{$this->director}</li>
               <li>{$this->actores}</li>
               <li>{$this->genero}</li>
            </ul>
         </article>
      ";
   }

   public function toJSON() {
      return json_encode($this);
   }
}
