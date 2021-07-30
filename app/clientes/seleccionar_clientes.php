 <?php
$servername = "localhost";
$username = "root";
$password = "fercen24";
$dbname = "myDB";
$id = $_POST['NIT'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT NIT, NombreComercial, Telefono, Celular FROM clientes WHERE NIT=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Cliente No.: " . $row["NIT"]. " - Nombre Comercial: " . $row["NombreComercial"]. " - Telefono " . $row["Telefono"] . " - Celular " . $row["Celular"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 