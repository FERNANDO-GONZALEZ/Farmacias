<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guardar Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<?php

$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];
$contraseña=$_POST['contraseña'];
$telefono=$_POST['telefono'];
$area=$_POST['area'];
$fecha=$_POST['fecha'];


$file = fopen("../../plain/$codigo.txt", "w");

fwrite($file, "Nombre: ".$nombre . PHP_EOL);

fwrite($file, "Código: ".$codigo . PHP_EOL);

fwrite($file, "Contraseña: ".$contraseña . PHP_EOL);

fwrite($file, "Telefono: ".$telefono . PHP_EOL);

fwrite($file, "Area: ".$area . PHP_EOL);

fwrite($file, "Fecha: ".$fecha . PHP_EOL);

fwrite($file, "Fin del registro" . PHP_EOL);


fclose($file);




?>

<div class="container">
    <p class="bg-primary">El reporte ha sido almacenado con éxito</p>
  </div>


<div class="container">
  <a href="usuarios.php" align class="btn btn-info" role="button">Volver a Administración de Usuarios</a>
 </div>

</body>
</html>
