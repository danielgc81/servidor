<?php
   $nombre = "Gonzalo";

   $nombre2 = $nombre;

   $nombre2 = "Pepe";

   echo "El nombre es $nombre<br>";
   echo "El nombre es $nombre2<br>";

   $nombre3 = &$nombre;

   $nombre3 = "Pedro";

   echo "El nombre es $nombre<br>";
   echo "El nombre es $nombre3<br>";

   function saludar () {
      global $nombre;
      echo "Hola $nombre<br>";
   }

   saludar();

   function saludar2 ($nombre) {
      static $contador = 0;
      $contador++;
      echo $contador . "<br>";
      echo "Hola $nombre<br>";
   }

   saludar2("Daniel");
   saludar2("Carlos");

   include "clases.php";

   $asignatura = new Asignatura("ASETE");
   echo $asignatura->mostrarInfo();

   echo Asignatura::saludo();
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


