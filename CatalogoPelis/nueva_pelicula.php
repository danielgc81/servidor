<?php
   include_once "Utilidades.php";
   include_once "Pelicula.php";
   session_start();
   include_once "iniciar_peliculas.php";
   include_once "internacionalizacion.php";

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
         if (strcasecmp($p->titulo, $titulo) === 0) {
            $mensaje = $traducciones["no_añadida_nuevapelicula"];
            $pelicula_existe = true;
            break;
         }
      }

      // Si la película no existe en el array $_SESSION["peliculas], añadimos la película al array
      if (!$pelicula_existe) {
         $mensaje = $traducciones["añadida_nuevapelicula"];
         $nueva_pelicula = new Pelicula($titulo, $año, $director, $actores, $genero);
         Utilidades::añadirPelicula($_SESSION["peliculas"], $nueva_pelicula);
      }
   }
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION["lang"]?>">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $traducciones["title_nuevapelicula"]?></title>
   <link rel="stylesheet" href="css/nueva_pelicula.css">
</head>
<body>
   <form method="POST" action="nueva_pelicula.php?lang=<?php echo $_SESSION["lang"]?>">
      <h1><?php echo $traducciones["title_nuevapelicula"]?></h1>
      <label for="titulo"><?php echo $traducciones["titulo_nuevapelicula"]?></label>
      <input type="text" id="titulo" name="titulo" required>
      <label for="año"><?php echo $traducciones["año_nuevapelicula"]?></label>
      <input type="text" id="año" name="año" required>
      <label for="director"><?php echo $traducciones["director_nuevapelicula"]?></label>
      <input type="text" id="director" name="director" required>
      <label for="actores"><?php echo $traducciones["actores_nuevapelicula"]?></label>
      <input type="text" id="actores" name="actores" required>
      <label for="genero"><?php echo $traducciones["genero_nuevapelicula"]?></label>
      <select name="genero" id="genero" required>
         <option value=""></option>
         <option value="<?php echo $traducciones["biografia_nuevapelicula"]?>"><?php echo $traducciones["biografia_nuevapelicula"]?></option>
         <option value="<?php echo $traducciones["ciencia_ficcion_nuevapelicula"]?>"><?php echo $traducciones["ciencia_ficcion_nuevapelicula"]?></option>
         <option value="Romance">Romance</option>
         <option value="Drama">Drama</option>
         <option value="Thriller">Thriller</option>
         <option value="<?php echo $traducciones["fantasy_nuevapelicula"]?>"><?php echo $traducciones["fantasy_nuevapelicula"]?></option>
      </select>
      <input type="submit" name="enviar" value="<?php echo $traducciones["añadir_nuevapelicula"]?>">
      <?php if (!$pelicula_existe): ?>
         <p class="pelicula_añadida"><?php echo $mensaje?></p>
      <?php else: ?>
         <p class="pelicula_duplicada"><?php echo $mensaje?></p>
      <?php endif; ?>
      <a href="index.php?lang=<?php echo $_SESSION["lang"]?>" class="volver__formulario"><?php echo $traducciones["volver_nuevapelicula"]?></a>
   </form>
</body>
</html>


