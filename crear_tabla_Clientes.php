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
$sql = "CREATE TABLE CLIENTES (
NIT INT(30) PRIMARY KEY,
NombreComercial VARCHAR(40) NOT NULL,
Tipo VARCHAR(30) NOT NULL,
Categoria VARCHAR(30) NOT NULL,
DireccionCliente VARCHAR(40) NOT NULL,
Barrio VARCHAR(40) NOT NULL,
Ciudad VARCHAR(40) NOT NULL,
Telefono INT(13) NOT NULL,
Celular INT(13) NOT NULL,
Email VARCHAR(50) NOT NULL,
PaginaWeb VARCHAR(50)NOT NULL,
NombreContacto VARCHAR(30) NOT NULL,
NotasClientes VARCHAR(120) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla CLIENTES creada satisfactoriamente";
} else {
    echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 