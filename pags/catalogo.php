<?php
//declaracion datos BD
$servername = "172.41.1.5";
$database = "prueba_conjunta";
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

    $sql="SELECT * FROM autos WHERE 'marca'='".$marca."'";

    $resultado = mysqli_query($conn,$sql);
    //una vez obtenida la busqueda, mostrarla
    while ($columna = mysqli_fetch_assoc( $resultado )){
        echo "<section class='catalogo'>";
            echo "<div class='coche-catalogo'>";
            echo "<img class='foto-catalogo' src=".$columna['path_foto'].">";
            echo "<h3 class='marca-catalogo'>".$columna['marca']."</h3>";
            echo "<h4 class='modelo-catalogo'>".$columna['modelo']."</h4>";
            echo "<div class='info-catalogo'>";
            echo "<p>".$columna['precio']."</p>";
            echo "</div>";
        echo "</section>";
    }

}else{
    //no hay campo de busqueda escrito
    //mostrar toda la bd

    $sql="SELECT * FROM autos";

    $resultado = mysqli_query($conn,$sql);
    //una vez obtenida la busqueda, mostrarla
    while ($columna = mysqli_fetch_assoc( $resultado )){
        echo "<section class='catalogo'>";
            echo "<div class='coche-catalogo'>";
            echo "<img class='foto-catalogo' src=".$columna['path_foto'].">";
            echo "<h3 class='marca-catalogo'>".$columna['marca']."</h3>";
            echo "<h4 class='modelo-catalogo'>".$columna['modelo']."</h4>";
            echo "<div class='info-catalogo'>";
            echo "<p>".$columna['precio']."</p>";
            echo "</div>";
        echo "</section>";
    }
}
?>
