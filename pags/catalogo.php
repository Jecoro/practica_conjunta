<!-- Test -->

if (!$conn) {
      die("Conexión fallida: " . mysqli_connect_error());
}


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
//hay campo de busqueda
//realizar busqueda con el campo de la marca



}else{
//no hay campo de busqueda escrito
//mostrar toda la bd



}


?>
