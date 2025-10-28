<?php
   $nombre = "Ana";
   $correo = "ana@ana.es";
   $fecha = date("d/m/y");
   $tipo_usuario = "admin";

   // Array indexado
   $users = ["Pepe", "Pedro", "Ana"];
   foreach ($users as $u) {
      echo $u;
   }

   // Array Asociativo (java ->  Map<T>)
   $usuarios = [
      [
         "nombre" => "Ana",
         "correo" => "ana@ana.es",
         "edad" => 23,
         "tipo_usuario" => "admin"
      ],
      [
         "nombre" => "Daniel",
         "correo" => "daniel@daniel.es",
         "edad" => 19,
         "tipo_usuario" => "cliente"
      ],
      [
         "nombre" => "Pepe",
         "correo" => "pepe@pepe.es",
         "edad" => 50,
         "tipo_usuario" => "admin"
      ]
   ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Prueba</title>
</head>
<body>
   <?php
      $contador = 0;
      foreach ($usuarios as $usuario):
         $contador++;
   ?>
      <h1>Usuario <?php echo $contador?></h1>
      <p>Nombre: <?php echo $usuario["nombre"]?></p>
      <p>Correo: <?php echo $usuario["correo"]?></p>
      <p>F. nacimiento: <?php echo $usuario["edad"]?></p>

      <?php
      if ($usuario["tipo_usuario"] == "admin"):
         ?>
      <p style="color: blue;">Es uasuario admin</p>
      <p>Tiene privilegios de administrador</p>

   <?php
      else:
         ?>
      <p style="color: red;">Es usuario cliente</p>
      <p>No tiene privilegios de administrador</p>

   <?php endif;?>
   <?php endforeach;?>
</body>
</html>
