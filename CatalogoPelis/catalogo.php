<?php
session_start();
include_once "iniciar_peliculas.php";
include_once "internacionalizacion.php";


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
<html lang="<?php echo $_SESSION["lang"]?>">
   <head>
      <meta charset="UTF-8">
      <title><?php echo $traducciones["title_catalogo"]?></title>
      <link rel="stylesheet" href="css/catalogo.css">
   </head>
   <body>

   <h1><?php echo $traducciones["title_catalogo"]?></h1>

   <a href="nueva_pelicula.php?lang=<?php echo $_SESSION["lang"]?>"><?php echo $traducciones["añadir_peliculas_catalogo"]?></a> <br>
   <a href="logout.php"><?php echo $traducciones["logout_catalogo"]?></a>
   <table>
      <thead>
         <tr>
            <th><?php echo $traducciones["titulo_catalogo"]?></th>
            <th><?php echo $traducciones["año_catalogo"]?></th>
            <th><?php echo $traducciones["genero_catalogo"]?></th>
            <th><?php echo $traducciones["director_catalogo"]?></th>
            <th><?php echo $traducciones["actores_catalogo"]?></th>
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
      <h2><?php echo $traducciones["no_busquedas_catalogo"]?></h2>
   <?php else: ?>
      <h2><?php echo $contador . $traducciones["coincidencia_catalogo"] . ($contador == 1 || $contador == 0  ? "" : $traducciones["coincidencia_plural_catalogo"])?></h2>
   <?php endif ?>
   <a href="index.php?lang=<?php echo $_SESSION["lang"]?>" class="volver__formulario"><?php echo $traducciones["volver_catalogo"]?></a>
   </body>
</html>
