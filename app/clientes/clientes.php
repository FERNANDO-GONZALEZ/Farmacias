 <!DOCTYPE html>
<html lang="es">
<head>
  <title>Clientes</title>

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
        <p align=center> CLIENTES CORPORATIVOS</p>
        <b> <p align=center> <img src="../../img/gob.jpg" width="500" height="200"> </p>
          <a href="../../index.php"> <p align=center> <img src="../../img/home.png" width="50" height="50" name="Inicio"> </p> </a>
      </h1>
       </b>
<div class="panel-body" style="background : #FAFAFA;">


  				<div class="container">
                <form name="formulario" method="post" action="send_form_email.php"> 
                
	                <div class="row">
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="NIT">NIT</label>
	                            <input  type="Int" class="form-control" name="NIT" maxlength="30" placeholder="NIT">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="NombreComercial">NOMBRE COMERCIAL</label>
	                            <input  type="text" class="form-control" name="NombreComercial" maxlength="40" placeholder="NombreComercial">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="Tipo">TIPO DE CLIENTE</label>
	                            <select class="form-control" name="optradio" id="Tipo">
	                            	<option value="">Clínica</option>
									<option value="">Hospital</option>
									<option value="">C./Salud</option>
									<option value="">E.P.S.</option>
									<option value="">I.P.S.</option>
									<option value="">Otro</option>
	                            </select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="precio">CATEGORÍA</label>
	                            <div class="radio">
		                            <label class="radio-inline"><input type="radio" name="optradio">Grande</label>
		                            <label class="radio-inline"><input type="radio" name="optradio">Mediano</label>
		                            <label class="radio-inline"><input type="radio" name="optradio">Pequeño</label>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	                            <label for="Direccion">DIRECCIÓN</label>
	                            <input  type="text" class="form-control" name="Direccion" maxlength="40" placeholder="Direccion">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="Barrio">BARRIO</label>
                    			<input  type="text" class="form-control" name="Barrio" maxlength="40" placeholder="Barrio">
                    		</div>
                    	</div>
   						<div class="col-md-4">
							<div class="form-group">
								<label for="Ciudad">CIUDAD</label>
                    			<input  type="text" class="form-control" name="Ciudad" maxlength="40" placeholder="Ciudad">
                    		</div>
                    	</div>
   						<div class="col-md-4">
							<div class="form-group">
								<label for="Telefono">TELÉFONO</label>
                    			<input  type="Int" class="form-control" name="Telefono" maxlength="13" placeholder="Telefono">
                    		</div>
                    	</div>
   						<div class="col-md-4">
							<div class="form-group">
								<label for="Celular">CELULAR</label>
                    			<input  type="Int" class="form-control" name="Celular" maxlength="13" placeholder="Celular">
                    		</div>
                    	</div>
   						<div class="col-md-4">
							<div class="form-group">
								<label for="Email">E-Mail</label>
                    			<input  type="text" class="form-control" name="Email" maxlength="50" placeholder="Email">
                    		</div>
                    	</div>
   						<div class="col-md-4">
							<div class="form-group">
								<label for="PaginaWeb">Página Web</label>
                    			<input  type="text" class="form-control" name="PaginaWeb" maxlength="50" placeholder="PaginaWeb">
                    		</div>
                    	</div>
   						<div class="col-md-4">
							<div class="form-group">
								<label for="NombreContacto">NOMBRE DEL CONTACTO</label>
                    			<input  type="text" class="form-control" name="NombreContacto" maxlength="30" placeholder="NombreContacto">
                    		</div>
                    	</div>
       
						<div class="col-md-12">
							<div class="form-group">
								<label for="message">NOTAS ADICIONALES</label><br>
                    			<textarea name="NotasClientes" class="form-control" maxlength="120"></textarea>
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