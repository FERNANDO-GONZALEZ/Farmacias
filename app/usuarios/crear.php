<!DOCTYPE html>
<html lang="es">
<head>
  <title>Crear usuario</title>
  <meta charset="utf-8">
  <link href="../../img/capsula.ico" rel="shortcut icon" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align=center>CREAR USUARIO</h2>
  <p align=center> <img src="../../img/usuario.jpeg" width="160" height="160"> </p>
<a href="../../index.php"> <p align=center> <img src="../../img/home.png" width="50" height="50" name="Inicio"> </p> </a>

  <form class="form-horizontal" action="txt.php" role="form" method="POST">

    <div class="input">
      <label for="Nombre">Nombre: <b>*</b></label>
      <input type="text" class="form-control"  name="nombre" placeholder="Ingrese el nombre del usuario a ingresar" required="">
    </div>

    <div class="input">
      <label for="Codigo">Codigo: <b>*</b></label>
      <input type="text" class="form-control" name="codigo" placeholder="Ingrese el código del usuario" required="">
    </div>

    <div class="input">
      <label for="Contraseña">Contraseña: <b>*</b></label>
      <input type="password" class="form-control" name="contraseña" placeholder="Ingrese la contraseña del usuario">
    </div>

    <div class="input">
      <label for="Telefono">Telefono:</label>
      <input type="text" class="form-control" name="telefono" placeholder="Ingrese el teléfono del usuario">
    </div>

    <div class="input">
      <label for="Area">Area:</label>
      <input type="text" class="form-control" name="area" placeholder="Ingrese el area de trabajo del usuario">
    </div>

    <div class="input">
      <label for="fecha">Fecha:</label>
      <input type="date" class="form-control"  name="fecha" placeholder="Ingrese la fecha en que ingreso el usuario">
    </div>
  
  <BR>
  <BR>

    <button type="submit" name="submit" class="btn btn-default">Guardar Reporte en TXT</button>
  </form>
</div>



</body>
</html>