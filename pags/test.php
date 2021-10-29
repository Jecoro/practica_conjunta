<?php
//declaracion datos BD
$servername = '172.41.1.5:3306';
$database = 'prueba_conjunta';
$username = 'root';
$password = '';

//comprobar si hay un dato en el campo de busqueda

//conexion base de datos
$conn = mysqli_connect($servername, $username, $password, $database);

//comrpobar conexion correcta
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}else{
    echo "estas conectado";
}

?>