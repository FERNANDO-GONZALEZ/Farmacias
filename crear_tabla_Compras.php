 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmacias";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE COMPRAS (
CodigoProducto INT(30) PRIMARY KEY,
Detalle VARCHAR(40) NOT NULL,
NombreCientifico VARCHAR(40) NOT NULL,
FormaFarmaceutica VARCHAR(30) NOT NULL,
FechaDeCompra INT(30) NOT NULL,
PrecioDeCompra INT(30) NOT NULL,
CantidadSolicitada INT(5) NOT NULL,
TotalCompra INT(10) NOT NULL,
ProveedorNo INT(30) NOT NULL,
NombreLaboratorio VARCHAR(40) NOT NULL,
DireccionLaboratorio VARCHAR(40) NOT NULL,
NombreContacto VARCHAR(30) NOT NULL,
NotasCompras VARCHAR(120) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla COMPRAS creada satisfactoriamente";
} else {
    echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 