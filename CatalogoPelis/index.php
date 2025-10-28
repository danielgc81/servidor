<?php
   session_start();

   if (!isset($_SESSION["usuario"])) {
      header("Location: login.php");
   }

   $genero = $_SESSION["genero"] ?? "";
   $año = $_SESSION["año"] ?? "";
   $director = $_SESSION["director"] ?? "";
?>


<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/filtro.css">
   <title>Filtro de Películas</title>
</head>
<body>
   <div class="form__container">
      <form method="get" action="catalogo.php">
         <h1>Filtro de Películas</h1>
         <label for="genero">Género</label>
         <select name="genero" id="genero">
            <option value=""></option>
            <option value="Biografía" <?php echo $genero == "Biografía" ? "selected" : "" ?> >Biografía</option>
            <option value="Ciencia ficción" <?php echo $genero == "Ciencia ficción" ? "selected" : "" ?> >Ciencia ficción</option>
            <option value="Romance" <?php echo $genero == "Romance" ? "selected" : "" ?> >Romance</option>
            <option value="Drama" <?php echo $genero == "Drama" ? "selected" : "" ?> >Drama</option>
            <option value="Thriller" <?php echo $genero == "Thriller" ? "selected" : "" ?> >Thriller</option>
            <option value="Fantasía" <?php echo $genero == "Fantasía" ? "selected" : "" ?>>Fantasía</option>
         </select>
         <label for="año">Año</label>
         <input type="number" name="año" id="año" value="<?php echo $año?>">
         <label for="director">Director</label>
         <input type="text" name="director" id="director" value="<?php echo $director?>">
         <input type="submit" value="Enviar" name="enviar">
         <a href="nueva_pelicula.php" class="añadir__pelicula">¿Quieres añadir Películas?</a>
         <a href="logout.php" class="cerrar__sesion">Cerrar Sesión</a>
      </form>
   </div>
</body>
</html>


