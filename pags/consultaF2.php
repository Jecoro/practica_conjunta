<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-catalogo.css">
</head>
<body>
    <header>

    </header>
    <nav>
        <ul>
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="catalogo.html">Cat&aacute;logo</a></li>
            <li><a href="formulario_insertar.html">A&ntilde;adir</a></li>
        </ul>
    </nav>

    <section class="busqueda-catalogo">
        <form action="consultaF2.php" method="POST">
            <p>Buscar:</p>
            <input type="text" id="marca" name="busqueda">
            <input type="submit" id="buscar" value="Buscar">
        </form>
    </section>

    <section class="catalogo">

    <?php
//declaracion datos BD
// $servername = "172.41.1.5";
// $database = "prueba_conjunta";
// $username = "root";
// $password = "";
$servername = "localhost";
$database = "id17855766_prueba_conjunta";
$username = "id17855766_root";
$password = "hPj^r*Qvy_~0OdeP";
//comprobar si hay un dato en el campo de busqueda

//conexion base de datos
$conn = mysqli_connect($servername, $username, $password, $database);

//comrpobar conexion correcta
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}



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
    


?>


    </section>
</body>
</html>