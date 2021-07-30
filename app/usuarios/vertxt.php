 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Ver Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
	<h2>Usuarios</h2>
	<p>El usuario asociado al código digitado es:</p>
</div>

<?php
$codigo=$_POST['codigo'];
$codigo = "../../plain/".$codigo;
$fp = fopen("$codigo.txt", "r");
while(!feof($fp)) 
{
$linea = fgets($fp);
?>

<div class="container">
	<table class="table">
		<thead>
		</thead>
				<tbody>
					<tr><td><?php echo $linea . "<br />";   ?></td></tr>
				</tbody>
	</table>
</div>


<?php 
} 
?>

<?php
fclose($fp);
?>

<div class="container">
   <p class="bg-primary">El archivo ha sido leído con éxito</p>
</div>
<br>
<br>

<div class="container">
  <a href="usuarios.php" align class="btn btn-info" role="button">Volver a Administración de Usuarios</a>
</div>


</body>
</html>