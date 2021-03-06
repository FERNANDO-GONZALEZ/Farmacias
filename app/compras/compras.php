 <!DOCTYPE html>
<html lang="es">
<head>
  <title>Compras</title>
  <meta charset="utf-8">
  <link href="../../img/capsula.ico" rel="shortcut icon" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <p align=center> C O M P R A S </p>
        <b> <p align=center> <img src="../../img/compra.png" width="360" height="200"> </p>
          <a href="../../index.php"> <p align=center> <img src="../../img/home.png" width="50" height="50" name="Inicio"> </p> </a>
      </h1>
       </b>
<div class="panel-body" style="background : #FAFAFA;">


  				<div class="container">
                <!--form name="formulario" method="post" action="send_form_email.php"--> 
				<form class="form-horizontal" action="insertar_compras.html" role="form" method="POST">
                 <div class="row">
					<div class="col-md-4">
						<div class="form-group">
                            <label for="CodigoProducto">CÓDIGO FÁRMACO</label>
                            <input  type="Int" class="form-control" name="CodigoProducto" maxlength="30" placeholder="CodigoProducto">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                            <label for="Detalle">NOMBRE COMERCIAL</label>
                            <input  type="text" class="form-control" name="Detalle" maxlength="40" placeholder="Detalle">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                            <label for="NombreCientifico">NOMBRE CIENTIFICO</label>
                            <input  type="text" class="form-control" name="NombreCientifico" maxlength="40" placeholder="NombreCientifico">
						</div>
					</div>
					<div class="col-md-8">
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
                            <label for="FechaDeCompra">FECHA DE COMPRA</label>
                            <input  type="text" class="form-control" name="FechaDeCompra" maxlength="30" placeholder="FechaDeCompra">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                            <label for="PrecioDeCompra">PRECIO DE COMPRA</label>
                            <input  type="Int" class="form-control" name="PrecioDeCompra" maxlength="30" placeholder="PrecioDeCompra">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                            <label for="CantidadSolicitada">CANTIDAD A SOLICITAR</label>
                            <input  type="text" class="form-control" name="dosis" maxlength="30" placeholder="CantidadSolicitada">
                            <label class="radio-inline"><input type="radio" name="optradio">Cajas</label>
                            <label class="radio-inline"><input type="radio" name="optradio">Docenas</label>
                            <label class="radio-inline"><input type="radio" name="optradio">Unidades</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                            <label for="TotalCompra">TOTAL COMPRA $$$</label>
                            <input  type="text" class="form-control" name="TotalCompra" maxlength="10" placeholder="TotalCompra">
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
					<div class="col-md-6">
						<div class="form-group">
                            <label for="ProveedorNo">CÓDIGO DEL PROVEEDOR</label>
                            <input  type="Int" class="form-control" name="ProveedorNo" maxlength="30" placeholder="ProveedorNo">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                            <label for="NombreLaboratorio">NOMBRE LABORATORIO PROVEEDOR</label>
                            <input  type="text" class="form-control" name="NombreLaboratorio" maxlength="40" placeholder="NombreLaboratorio">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                            <label for="DireccionLaboratorio">DIRECCION LABORATORIO PROVEEDOR</label>
                            <input  type="text" class="form-control" name="DireccionLaboratorio" maxlength="40" placeholder="DireccionLaboratorio">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                            <label for="NombreContacto">NOMBRE DEL CONTACTO DE VENTAS</label>
                            <input  type="text" class="form-control" name="NombreContacto" maxlength="30" placeholder="NombreContacto">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
                            <label for="message">NOTAS ADICIONALES</label><br>
                            <textarea  class="form-control" name="NotasCompras" maxlength="120"></textarea>
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