<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Alumnos</title>
</head>
<body>
<h2> Registro de Alumnos de 3A programacion</h2>
<form method="POST">
   Nombre del alumno:
   <input type="text" name="nombre">
   <br><br>
   <button type= "submit" name= "guardar">guardar</button>
</form>

<?php
if (isset($_POST["guardar"])){
  $nombre=$_POST["nombre"];
  file_put_contens(programacionA.txt,$nombre.PHP_EOL,FILE_APPEND);
  echo"<p>Nombre guardado correctamente.</p>"; 
}
?>
<h3> lista de alumnos de 3A registrados</h3>
<?php
if (file_exists("programacionA.txt")){
  $contenido=file_get_contents();
  file_put_contens(programacionA.txt,$nombre.PHP_EOL,FILE_APPEND);
  {echo"no exiaten registros.";}}
  ?>
</body>
</html>