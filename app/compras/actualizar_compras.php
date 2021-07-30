 <?php
$servername = "localhost";
$username = "root";
$password = "fercen24";
$dbname = "myDB";

$i = $_POST['CodigoProducto'];
$n = $_POST['NombreCientifico'];
$a = $_POST['PrecioDeCompra'];
$e = $_POST['TotalCompra'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE compras SET NombreCientifico='$n', PrecioDeCompra='$a', TotalCompra='$e'  WHERE CodigoProducto='$i'";

if (mysqli_query($conn, $sql)) {
    echo "Información actualizada satisfactoriamente";
} else {
    echo "Error actualizando la información: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 