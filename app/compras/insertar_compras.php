 <?php
$servername = "localhost";
$username = "root";
$password = "fercen24";
$dbname = "myDB";

$i1 = $_POST['CodigoProducto'];
$i2 = $_POST['Detalle'];
$i3 = $_POST['NombreCientifico'];  
$i4 = $_POST['FormaFarmaceutica'];  
$i5 = $_POST['FechaDeCompra'];  
$i6 = $_POST['PrecioDeCompra'];  
$i7 = $_POST['CantidadSolicitada'];  
$i8 = $_POST['TotalCompra'];  
$i9 = $_POST['ProveedorNo']; 
$i10 = $_POST['NombreLaboratorio']; 
$i11 = $_POST['DireccionLaboratorio']; 
$i12 = $_POST['NombreContacto'];  
$i13 = $_POST['NotasCompras'];  
 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO compras (CodigoProducto,Detalle,NombreCientifico,FormaFarmaceutica,FechaDeCompra,PrecioDeCompra,CantidadSolicitada,TotalCompra,ProveedorNo,NombreLaboratorio,DireccionLaboratorio,NombreContacto,NotasCompras)
VALUES ('$i1', '$i2','$i3','$i4','$i5','$i6','$i7','$i8','$i9','$i10','$i11','$i12','$i13')";

if (mysqli_query($conn, $sql)) {
    echo "Datos grabados satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 