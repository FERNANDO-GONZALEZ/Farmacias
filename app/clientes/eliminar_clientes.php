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
    die("connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM clientes WHERE NIT=$id";

if (mysqli_query($conn, $sql)) {
    echo "Registro eliminado";
} else {
    echo "Error eliminando registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 