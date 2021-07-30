 <?php
$servername = "localhost";
$username = "root";
$password = "fercen24";
$dbname = "myDB";
$i2 = $_POST['VentaNo'];
$i3 = $_POST['VendedorNo'];  
$i4 = $_POST['NombreVendedor'];  
$i5 = $_POST['FechaDeVenta'];  
$i6 = $_POST['IdCliente'];  
$i7 = $_POST['NombreCliente'];  
$i8 = $_POST['Direccion'];  
$i9 = $_POST['Telefono']; 
$i10 = $_POST['Celular']; 
$i12 = $_POST['CodigoProducto'];  
$i13 = $_POST['Detalle'];  
$i14 = $_POST['Cantidad']; 
$i15 = $_POST['Subtotal']; 
$i16 = $_POST['TotalVenta']; 
$i17 = $_POST['Notas']; 


// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$link){
    die("Connection failed: " . mysqli_connect_error());

}

$sql = "INSERT INTO ventas(VentaNo,VendedorNo,NombreVendedor,FechaDeVenta,IdCliente,NombreCliente ,Direccion,Telefono,Celular,CodigoProducto,Detalle,Cantidad,Subtotal,TotalVenta,Notas)
VALUES ('$i2','$i3','$i4','$i5','$i6','$i7','$i8','$i9','$i10','$i12','$i13','$i14','$i15','$i16','$i17')";

if (mysqli_query($link, $sql)) {
    echo "Datos grabados satisfactoriamente";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?> 