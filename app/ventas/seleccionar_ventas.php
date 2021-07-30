 <?php
$servername = "localhost";
$username = "root";
$password = "fercen24";
$dbname = "myDB";
$id = $_POST['VentaNo'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT VentaNo, FechaDeVenta, TotalVenta FROM ventas WHERE VentaNo=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Venta No.: " . $row["VentaNo"]. " - Fecha de venta: " . $row["FechaDeVenta"]. " - Total Venta $ " . $row["TotalVenta"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 