<?php
   session_start();
   include_once "internacionalizacion.php";

   if (!isset($_SESSION["usuario"])) {
      header("Location: login.php");
   }

   $genero = $_SESSION["genero"] ?? "";
   $año = $_SESSION["año"] ?? "";
   $director = $_SESSION["director"] ?? "";
?>


<!DOCTYPE html>
<html lang="<?php echo $_SESSION["lang"]?>">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/filtro.css">
   <title><?php echo $traducciones["title_index"]?></title>
</head>
<body>
   <div class="form__container">
      <form method="get" action="catalogo.php">
         <h1><?php echo $traducciones["title_index"]?></h1>
         <input type="hidden" name="lang" value="<?php echo $_SESSION["lang"] ?>">
         <label for="genero"><?php echo $traducciones["genero_index"] ?></label>
         <select name="genero" id="genero">
            <option value=""></option>
            <option value="<?php echo $traducciones["biografia_index"]?>" <?php echo $genero == $traducciones["biografia_index"] ? "selected" : "" ?> ><?php echo $traducciones["biografia_index"]?></option>
            <option value="<?php echo $traducciones["ciencia_ficcion_index"]?>" <?php echo $genero == $traducciones["ciencia_ficcion_index"] ? "selected" : "" ?> ><?php echo $traducciones["ciencia_ficcion_index"]?></option>
            <option value="Romance" <?php echo $genero == "Romance" ? "selected" : "" ?> >Romance</option>
            <option value="Drama" <?php echo $genero == "Drama" ? "selected" : "" ?> >Drama</option>
            <option value="Thriller" <?php echo $genero == "Thriller" ? "selected" : "" ?> >Thriller</option>
            <option value="<?php echo $traducciones["fantasy_index"]?>" <?php echo $genero == $traducciones["fantasy_index"] ? "selected" : "" ?>><?php echo $traducciones["fantasy_index"]?></option>
         </select>
         <label for="año"><?php echo $traducciones["año_index"] ?></label>
         <input type="number" name="año" id="año" value="<?php echo $año?>">
         <label for="director"><?php echo $traducciones["director_index"] ?></label>
         <input type="text" name="director" id="director" value="<?php echo $director?>">
         <input type="submit" value="<?php echo $traducciones["enviar_index"] ?>" name="enviar">
         <a href="nueva_pelicula.php?lang=<?php echo $_SESSION["lang"]?>" class="añadir__pelicula"><?php echo $traducciones["añadir_peliculas_index"] ?></a>
         <a href="logout.php" class="cerrar__sesion"><?php echo $traducciones["logout_index"] ?></a>
      </form>
   </div>
</body>
</html>


