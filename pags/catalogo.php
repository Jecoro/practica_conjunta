
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

    echo "<div class='coche-catalogo'>";
    echo "<img class='foto-catalogo' src=".$columna['path_foto']."' alt="">";
    echo "<h3 class='marca-catalogo'>".$columna['marca']."</h3>";
    echo "<h4 class='modelo-catalogo'>".$columna['modelo']."</h4>";
    echo "<div class='info-catalogo'>"
    echo "<p>".$columna['precio']."</p>";
    echo "</div>";


    //echo $columna['id']." ".$columna['marca']." ".$columna['modelo'];
    //echo "</br>";
}

//



}else{
//no hay campo de busqueda escrito
//mostrar toda la bd

$sql="SELECT * FROM 'autos'";

$resultado = mysqli_query($conn,$sql)die ( "Algo ha ido mal en la consulta a la base de datos");
//una vez obtenida la busqueda, mostrarla
while ($columna = mysqli_fetch_array( $resultado )){

    echo "<div class='coche-catalogo'>";
    echo "<img class='foto-catalogo' src=".$columna['path_foto']."' alt="">";
    echo "<h3 class='marca-catalogo'>".$columna['marca']."</h3>";
    echo "<h4 class='modelo-catalogo'>".$columna['modelo']."</h4>";
    echo "<div class='info-catalogo'>"
    echo "<p>".$columna['precio']."</p>";
    echo "</div>";

    //echo $columna['id']." ".$columna['marca']." ".$columna['modelo'];
    //echo "</br>";
}




}

/* div a imprimir
<div class="coche-catalogo">
            <img class="foto-catalogo" src="../img/prueba.jpeg" alt="">
            <h3 class="marca-catalogo">Marca</h3>
            <h4 class="modelo-catalogo">Modelo</h4>
            <div class="info-catalogo">
                <p>Precio</p>
            </div>
            */

?>