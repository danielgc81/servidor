<?php
session_start();
include_once "iniciar_peliculas.php";

if (!isset($_SESSION["usuario"])) {
   header("Location: login.php");
}

$genero = $_GET["genero"] ?? "";
$año = $_GET["año"] ?? "";
$director = $_GET["director"] ?? "";

$_SESSION["genero"] = $genero;
$_SESSION["año"] = $año;
$_SESSION["director"] = $director;
?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Catálogo de películas filtrado</title>
      <link rel="stylesheet" href="css/catalogo.css">
   </head>
   <body>

   <h1>Catálogo de películas</h1>

   <a href="nueva_pelicula.php">¿Quieres añadir Películas?</a> <br>
   <a href="logout.php">Cerrar Sesión</a>
   <table>
      <thead>
         <tr>
            <th>Título</th>
            <th>Año</th>
            <th>Genero</th>
            <th>Director</th>
            <th>Actores</th>
         </tr>
      </thead>
      <tbody>
         <?php $contador = 0;?>
         <?php foreach ($_SESSION["peliculas"] as $pelicula): ?>
            <?php if (($pelicula["genero"] == $genero || $genero == "")
            && ($pelicula["año"] == $año || $año == "")
            && (stripos($pelicula["director"], $director) != false || $director == "")):?>
            <tr>
               <td><?php echo $pelicula["titulo"]?></td>
               <td><?php echo $pelicula["año"]?></td>
               <td><?php echo $pelicula["genero"]?></td>
               <td><?php echo $pelicula["director"]?></td>
               <td><?php echo $pelicula["actores"]?></td>
            </tr>
            <?php $contador++;?>
            <?php endif;?>
         <?php endforeach; ?>
      </tbody>
   </table>
   <?php if(empty($contador)): ?>
      <h2>No se han encontrado resultados para la búsqueda</h2>
   <?php else: ?>
      <h2><?php echo $contador . " coindencia" . ($contador == 1 || $contador == 0  ? "" : "s")?></h2>
   <?php endif ?>
   <a href="index.php" class="volver__formulario">Volver al formulario</a>
   </body>
</html>
