 <!DOCTYPE html>
<html lang="es">
<head>
      <title>Medicamentos</title>
      <meta charset="utf-8">
      <link href="../../img/capsula.ico" rel="shortcut icon" type="image/x-icon" />
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximun-scalable=1.0, minium-ascale1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- agregar estilos propios-->
      <link rel="stylesheet" href="css/estilos.css">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 </head>
  <body>
    <header>
    <div class="panel panel-default">
      <div class="panel-heading" style="background : #F2F2F2;">
      <h1>
        <p align=center> M E D I C A M E N T O S </p>
        <b> <p align=center> <img src="../../img/inventario.png" width="360" height="160"> </p>
          <a href="../../index.php"> <p align=center> <img src="../../img/home.png" width="50" height="50" name="Inicio"> </p> </a>
      </h1>
       </b>
<div class="panel-body" style="background : #FAFAFA;">


				<div class="container">
	            <!--form name="formulario" method="post" action="send_form_email.php"--> 
	            <form class="form-horizontal" action="insertar_medicamentos.html" role="form" method="POST">
	            
	                <div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="CodigoProducto">CÓDIGO DEL FARMACO</label>
								<input type="Int" class="form-control" name="CodigoProducto" maxlength="30" placeholder="CodigoProducto">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="Detalle">NOMBRE COMERCIAL</label>
	                            <input type="text" class="form-control" name="Detalle" maxlength="40" placeholder="Detalle">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="NombreCientifico">NOMBRE CIENTIFICO</label>
	                            <input type="text" class="form-control" name="NombreCientifico" maxlength="40" placeholder="NombreCientifico">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="FormaFarmaceutica">FORMA FARMACEUTICA</label>
	                            <select class="form-control" name="optradio" id="FormaFarmaceutica">
	                            	<option value="">Cápsulas</option>
									<option value="">Comprimidos</option>
									<option value="">Jarabes</option>
									<option value="">Inyectables</option>
									<option value="">Supositorios</option>
									<option value="">Otro</option>
	                            </select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="Precio">PRECIO</label>
	                            <input type="Int" class="form-control" name="Precio" maxlength="10" placeholder="Precio">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="dosis">Dosis</label>
	                            <input type="text" class="form-control" name="Dosis" maxlength="30" placeholder="Dosis">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="FechaDeCaducidad">FECHA DE CADUCIDAD</label>
	                            <input type="Int" class="form-control" name="FechaDeCaducidad" maxlength="30" placeholder="FechaDeCaducidad">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="LoteDeFabricacion">LOTE DE FABRICACIÓN</label>
	                            <input type="Int" class="form-control" name="LoteDeFabricacion" maxlength="10" placeholder="LoteDeFabricacion">
							</div>
						</div>
					</div>
					<hr>
	                <div class="row">	
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="NombreLaboratorio">NOMBRE LABORATORIO FARMACEUTICO</label>
	                            <input type="text" class="form-control" name="NombreLaboratorioo" maxlength="40" placeholder="NombreLaboratorio">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="DireccionLaboratorio">DIRECCION LABORATORIO FARMACEUTICO</label>
	                            <input type="text" class="form-control" name="DireccionLaboratorio" maxlength="40" placeholder="DireccionLaboratorio">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="NombreDirectorTecnico">NOMBRE DEL DIRECTOR TÉCNICO</label>
	                            <input type="text" class="form-control" name="NombreDirectorTecnico" maxlength="30" placeholder="NombreDirectorTecnico">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
	                            <label for="message">NOTAS ADICIONALES</label><br>
	                            <textarea  class="form-control" name="NotasMedicamentos" maxlength="120"></textarea>
							</div>
						</div>
					</div>
					<center>
						<button type="submit" class="btn btn-info">Enviar</button>
					</center>
                </form> 
				</div>
				</div>
				</div>
                <div class="panel-footer" style="background : #E6E6E6;">
      <p align=center> Programación de Sitios Web </p>
      <p align=center> 2017 </p>
      <p align=center> Universidad Nacional Abierta y a Distancia </p>
</body>
</html>