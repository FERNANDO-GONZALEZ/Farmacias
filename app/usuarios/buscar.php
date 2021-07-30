<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ver usuario</title>
  <meta charset="utf-8">
  <link href="../../img/capsula.ico" rel="shortcut icon" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align=center>VER USUARIO</h2>
  <p align=center> <img src="../../img/usuariolupa.jpeg" width="160" height="160"></p>
<a href="../../index.php"> <p align=center> <img src="../../img/home.png" width="50" height="50" name="Inicio"> </p> </a>

  <form class="form-horizontal" action="vertxt.php" role="form" method="POST">

    
    <div class="input">
      <label for="Codigo">Codigo:</label>
      <input type="text" class="form-control" name="codigo" placeholder="Ingrese el código del usuario" required="">
    </div>
  
  <BR>
  <BR>

    <button type="submit" name="submit" class="btn btn-default">Ver usuario</button>
  </form>
</div>



</body>
</html>