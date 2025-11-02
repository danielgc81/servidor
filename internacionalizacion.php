<?php
	//session_start();

   //Recuperamos el idioma por GET
   $lang = $_GET["lang"] ?? "es";

   //Construir archivo
   $file = "lang/$lang.php";

   //Cargar archivo del idioma
   if (file_exists($file)) {
      require $file;
   } else {
      require "lang/es.php";
   }
?>


<html>
<head>
   <meta charset="UTF-8">
   <title>ASETE</title>
</head>
<body>
   <h1><?php echo $traducciones["title"]; ?></h1>
   <p><?php echo $traducciones["parrafo1"]; ?></p>

   <div>
      <p>Idioma actual: <?php echo $traducciones["language"]; ?>:</p>
      <a href="?lang=es">Español</a>
      <a href="?lang=en">English</a>
   </div>
</body>
</html>
