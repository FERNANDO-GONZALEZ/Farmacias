 <?php
$servername = "localhost";
$username = "root";
$password = "fercen24";
$dbname = "myDB";
$id = $_POST['CodigoProducto'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT CodigoProducto, FormaFarmaceutica, Precio FROM medicamentos WHERE CodigoProducto=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Codigo del producto: " . $row["CodigoProducto"]. " - Forma farmaceúica: " . $row["FormaFarmaceutica"]. " - Precio $ " . $row["Precio"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 