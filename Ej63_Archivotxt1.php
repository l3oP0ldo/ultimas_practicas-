<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UFT-8">
  <title>guardar informacion</title>
</head>
<body>
  <h2>guardar informacion en un archivo</h2>

  <?php
  $nombre = "ana lopez";
  file_put_contents("alumnos.txt", $nombre . PHP_EOL,
        FILE_APPEND);
        echo "informacion guardada correctamente.";
        echo "<br><br>";
?>
<?php
  $nombre = "luis soto";
  file_put_contents("alumnos.txt", $nombre . PHP_EOL,
        FILE_APPEND);
        echo "informacion guardada correctamente.";
?>
<?php 
echo"<br><br>";
$contenido = file_put_contents("alumnos.txt");
//echo $contenido;
echo nL2br($contenido); 
?>
</body>
</html>
