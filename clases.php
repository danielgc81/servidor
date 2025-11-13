<?php

class Asignatura {

   public $nombre;

   public function __construct($nombre) {
      $this->nombre = $nombre;
   }

   public function mostrarInfo () {
      return"<p>Asignatura: $this->nombre</p>";
   }

   public static function saludo () {
      return "<p>Hola otra vez</p>";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

</body>
</html>
