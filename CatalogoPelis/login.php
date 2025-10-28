<?php
   session_start();

   // $host = "localhost";
   // $username = "root";
   // $contraseña = "bbdd";
   // $db_nombre = "FiltroPelicula";

   // NO FUNCIONA mysqli
   // $conexion = new mysqli($host, $username, $contraseña, $db_nombre);

   if (isset($_SESSION["usuario"])) {
      header("Location: index.php");
   }

   $usuarios = [
      "admin" => "1234",
      "dani" => "messi",
      "gonzalo" => "abcd"
   ];

   $usuario = $_POST["usuario"] ?? "";
   $contraseña = $_POST["contraseña"] ?? "";

   $error = "";
   if ($_SERVER["REQUEST_METHOD"] === "POST") {
      if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $contraseña) {
         $_SESSION["usuario"] = $usuario;
         header("Location: index.php");
      } else {
         $error = "Usuario o contraseña incorrectos";
      }
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="css/login.css">
</head>
<body>
   <!-- <?php // if ($conexion -> connect_error): ?>
      <h2>Conexión fallida a la base de datos Filtro Pelicula</h2>
   <?php // endif; ?> -->

   <form action="login.php" method="POST" class="form__container">
      <h2>Inicio de Sesión</h2>

      <label for="username">Nombre de Usuario</label>
      <input type="text" name="usuario" id="username" placeholder="Usuario" required>
      <label for="contraseña">Contraseña</label>
      <input type="password" name="contraseña" id="contraseña" placeholder="***********" required>
      <p><?php echo !empty($error) ? $error : ""?></p>

      <input type="submit" value="Iniciar Sesión">
   </form>
</body>
</html>
