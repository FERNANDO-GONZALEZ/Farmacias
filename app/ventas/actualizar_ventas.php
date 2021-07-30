 <?php
$servername = "localhost";
$username = "root";
$password = "fercen24";
$dbname = "myDB";

$i = $_POST['VentaNo'];
$n = $_POST['NombreCliente'];
$a = $_POST['Telefono'];
$e = $_POST['Celular'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE ventas SET NombreCliente='$n', Telefono='$a', Celular='$e'  WHERE VentaNo='$i'";

if (mysqli_query($conn, $sql)) {
    echo "Información actualizada satisfactoriamente";
} else {
    echo "Error actualizando la información: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 