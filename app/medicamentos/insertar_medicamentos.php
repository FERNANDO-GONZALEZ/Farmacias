 <?php
$servername = "localhost";
$username = "root";
$password = "fercen24";
$dbname = "myDB";

$i1 = $_POST['CodigoProducto'];
$i2 = $_POST['Detalle'];
$i3 = $_POST['NombreCientifico'];  
$i4 = $_POST['FormaFarmaceutica'];  
$i6 = $_POST['Precio'];  
$i7 = $_POST['Dosis'];  
$i8 = $_POST['FechaDeCaducidad'];  
$i9 = $_POST['LoteDeFabricación']; 
$i10 = $_POST['NombreLaboratorio']; 
$i11 = $_POST['DireccionLaboratorio']; 
$i12 = $_POST['NombreDirectorTecnico'];  
$i13 = $_POST['NotasMedicamentos'];  
 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO medicamentos (CodigoProducto,Detalle,NombreCientifico,FormaFarmaceutica,Precio,Dosis,FechaDeCaducidad,LoteDeFabricacion,NombreLaboratorio,DireccionLaboratorio,NombreDirectorTecnico,NotasMedicamentos)
VALUES ('$i1', '$i2','$i3','$i4','$i6','$i7','$i8','$i9','$i10','$i11','$i12','$i13')";

if (mysqli_query($conn, $sql)) {
    echo "Datos grabados satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 