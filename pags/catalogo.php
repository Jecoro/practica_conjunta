<?php
//declaracion datos BD
$servername = "localhost";
$database = "directorio";
$username = "root";
$password = "";

//comprobar si hay un dato en el campo de busqueda

//conexion base de datos
$conn = mysqli_connect($servername, $username, $password, $database);

//comrpobar conexion correcta
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}


if(isset($_POST['marca'])){
    $marca = $_POST['marca'];
//hay campo de busqueda
//realizar busqueda con el campo de la marca

$sql="SELECT * FROM 'autos' WHERE 'marca'='".$marca."'";

$resultado = mysqli_query($conn,$sql)die ( "Algo ha ido mal en la consulta a la base de datos");
//una vez obtenida la busqueda, mostrarla
while ($columna = mysqli_fetch_array( $resultado )){
    echo $columna['id']." ".$columna['marca']." ".$columna['modelo'];
    echo "</br>";
}





}else{
//no hay campo de busqueda escrito
//mostrar toda la bd

$sql="SELECT * FROM 'autos'";

$resultado = mysqli_query($conn,$sql)die ( "Algo ha ido mal en la consulta a la base de datos");
//una vez obtenida la busqueda, mostrarla
while ($columna = mysqli_fetch_array( $resultado )){
    echo $columna['id']." ".$columna['marca']." ".$columna['modelo'];
    echo "</br>";
}




}


?>
