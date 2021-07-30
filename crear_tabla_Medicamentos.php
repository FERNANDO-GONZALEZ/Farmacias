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
$sql = "CREATE TABLE MEDICAMENTOS (
CodigoProducto INT(30) PRIMARY KEY,
Detalle VARCHAR(40) NOT NULL,
NombreCientifico VARCHAR(40) NOT NULL,
FormaFarmaceutica VARCHAR(30) NOT NULL,
Precio INT(10) NOT NULL,
Dosis VARCHAR(30) NOT NULL,
FechaDeCaducidad INT(30) NOT NULL,
LoteDeFabricacion INT(10) NOT NULL,
NombreLaboratorio VARCHAR(40) NOT NULL,
DireccionLaboratorio VARCHAR(40) NOT NULL,
NombreDirectorTecnico VARCHAR(30) NOT NULL,
NotasMedicamentos VARCHAR(120) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla MEDICAMENTOS creada satisfactoriamente";
} else {
    echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 