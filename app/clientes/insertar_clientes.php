 <?php
$servername = "localhost";
$username = "root";
$password = "fercen24";
$dbname = "myDB";
$i2 = $_POST['NIT'];
$i4 = $_POST['NombreComercial'];  
$i5 = $_POST['Tipo'];  
$i6 = $_POST['Categoria'];  
$i7 = $_POST['DireccionCliente'];  
$i8 = $_POST['Barrio'];  
$i9 = $_POST['Ciudad']; 
$i10 = $_POST['Telefono']; 
$i12 = $_POST['Celular'];  
$i13 = $_POST['Email'];  
$i14 = $_POST['PaginaWeb']; 
$i16 = $_POST['NombreContacto']; 
$i17 = $_POST['NotasClientes']; 


// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$link){
    die("Connection failed: " . mysqli_connect_error());

}

$sql = "INSERT INTO clientes(NIT,NombreComercial,Tipo,Categoria,DireccionCliente,Barrio,Ciudad,Telefono,Celular,Email,PaginaWeb,NombreContacto,NotasClientes)
VALUES ('$i2','$i4','$i5','$i6','$i7','$i8','$i9','$i10','$i12','$i13','$i14','$i16','$i17')";

if (mysqli_query($link, $sql)) {
    echo "Datos grabados satisfactoriamente";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?> 