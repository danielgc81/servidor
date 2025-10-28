<?php
   session_start();
   include_once "iniciar_peliculas.php";

   if (!isset($_SESSION["usuario"])) {
      header("Location: login.php");
   }

   $pelicula_existe = false;
   $mensaje = "";
   if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $titulo = $_POST["titulo"] ?? "";
      $año = $_POST["año"] ?? "";
      $director = $_POST["director"] ?? "";
      $actores = $_POST["actores"] ?? "";
      $genero = $_POST["genero"] ?? "";

      // Comprobamos que la pelicula que queremos no se encuentre ya en el array de películas para evitar duplicados
      foreach ($_SESSION["peliculas"] as $p) {
         if ($titulo == $p["titulo"]) {
            $mensaje = "La película ya existe";
            $pelicula_existe = true;
            break;
         }
      }

      // Si la película no existe en el array en sesión de películas, añadimos la película al array
      if (!$pelicula_existe) {
         $mensaje = "Película añadida";
         $_SESSION["peliculas"][] = [
            "titulo" => $titulo,
            "año" => $año,
            "director" => $director,
            "genero" => $genero,
            "actores" => $actores
         ];
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Añadir Peliculas</title>
   <link rel="stylesheet" href="css/nueva_pelicula.css">
</head>
<body>
   <form method="POST" action="nueva_pelicula.php">
      <h1>Añade Películas</h1>
      <label for="titulo">Título</label>
      <input type="text" id="titulo" name="titulo" required>
      <label for="año">Año</label>
      <input type="text" id="año" name="año" required>
      <label for="director">Director</label>
      <input type="text" id="director" name="director" required>
      <label for="actores">Actores</label>
      <input type="text" id="actores" name="actores" required>
      <label for="genero">Género</label>
      <select name="genero" id="genero" required>
         <option value=""></option>
         <option value="Biografía">Biografía</option>
         <option value="Ciencia ficción">Ciencia ficción</option>
         <option value="Romance">Romance</option>
         <option value="Drama">Drama</option>
         <option value="Thriller">Thriller</option>
         <option value="Fantasía">Fantasía</option>
      </select>
      <input type="submit" name="enviar" value="Añadir Película">
      <?php if (!$pelicula_existe): ?>
         <p class="pelicula_añadida"><?php echo $mensaje?></p>
      <?php else: ?>
         <p class="pelicula_duplicada"><?php echo $mensaje?></p>
      <?php endif; ?>
      <a href="index.php" class="volver__formulario">Volver al formulario</a>
   </form>
</body>
</html>


