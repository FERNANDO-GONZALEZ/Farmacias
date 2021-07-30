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
$sql = "CREATE TABLE VENTAS (
VentaNo INT(30) PRIMARY KEY,
VendedorNo INT(30) NOT NULL,
NombreVendedor VARCHAR(30) NOT NULL,
FechaDeVenta INT(30) NOT NULL,
IdCliente INT(30) NOT NULL,
NombreCliente VARCHAR(40) NOT NULL,
Direccion VARCHAR(40) NOT NULL,
Telefono VARCHAR(13) NOT NULL,
Celular VARCHAR(13) NOT NULL,
CodigoProducto INT(30) NOT NULL,
Detalle VARCHAR(40) NOT NULL,
Cantidad INT(5) NOT NULL,
Subtotal INT(10) NOT NULL,
TotalVenta INT(10) NOT NULL,
Notas VARCHAR(120) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla VENTAS creada satisfactoriamente";
} else {
    echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 