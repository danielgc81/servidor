<?php
   session_start();
   include_once "internacionalizacion.php";

   if (isset($_SESSION["usuario"])) {
      header("Location: index.php");
   }

   if ($file == "lang/es.php") {
      $_SESSION["lang"] = "es";
   } else {
      $_SESSION["lang"] = "en";
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
         header("Location: index.php?lang=" . $_SESSION["lang"]);
      } else {
         $error = $traducciones["error_mensaje"];
      }
   }
?>

<!-- IMPORTANTE: SOLO SE PUEDE CAMBIAR EL IDIOMA EN LOGIN -->

<!DOCTYPE html>
<html lang="<?php echo $_SESSION["lang"]?>" >
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $traducciones["title_login"]?></title>
   <link rel="stylesheet" href="css/login.css">
</head>
<body>
   <form action="login.php?lang=<?php echo $_SESSION["lang"]?>" method="POST" class="form__container">
      <h2><?php echo $traducciones["title_login"]?></h2>

      <div>
      <a href="?lang=es" class="traducciones">Español</a>
      <a href="?lang=en" class="traducciones">English</a>
      </div>
      <label for="username"><?php echo $traducciones["username_login"]?></label>
      <input type="text" name="usuario" id="username" <?php echo $file == "lang/es.php" ? 'placeholder="Usuario"' : 'placeholder="Username"'?> required>
      <label for="contraseña"><?php echo $traducciones["contraseña_login"]?></label>
      <input type="password" name="contraseña" id="contraseña" placeholder="***********" required>
      <p><?php echo !empty($error) ? $error : ""?></p>

      <input type="submit" value="<?php echo $traducciones["boton_login"]?>">
   </form>
</body>
</html>
