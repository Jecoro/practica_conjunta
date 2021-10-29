<?php
    error_reporting(0);
    $id=$_POST['id'];
    $marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $puertas=$_POST['puertas'];
    $combustible=$_POST['combustible'];
    $ordenador=$_POST['ordenador'];
    $cilindradas=$_POST['cilindradas'];
    $elevalunas=$_POST['elevalunas'];
    $cierre_centralizado=$_POST['cierre_centralizado'];
    $matriculacion=$_POST['matriculacion'];
    $pintura_metalizada=$_POST['pintura_metalizada'];
    $color=$_POST['color'];
    $automatico=$_POST['automatico'];
    $precio=$_POST['precio'];
    $km_cero=$_POST['km_cero'];
    $path_foto=$_POST['path_foto'];
    if($id=="" || $marca=="" || $modelo=="" || $puertas=="" || $combustible=="" || $ordenador=="" || $cilindradas=="" || $elevalunas=="" || $cierre_centralizado=="" || $matriculacion=="" || $pintura_metalizada=="" || $color=="" || $automatico=="" || $precio=="" || $km_cero=="" || $path_foto==""){
        echo "Debe rellenar todos los campos";
    }else{
        //cambiar con servidor cuando se nos de
        $conn=mysqli_connect("172.41.1.5","root","","prueba_conjunta");
        //Check connection
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: ".mysqli_connect_error();
            exit();
        }else{
            $sql = "INSERT INTO autos (id, marca, modelo, puertas, combustible, ordenador, cilindradas, elevalunas, cierre_centralizado, matriculacion, pintura_metalizada, color, automatico, precio, km_cero, path_foto) 
            VALUES ($id, '$marca', '$modelo', $puertas, $combustible, $ordenador, $cilindradas, $elevalunas, $cierre_centralizado, '$matriculacion', $pintura_metalizada, '$color', $automatico, $precio, $km_cero, '$path_foto')";
            if (mysqli_query($conn, $sql)) {
                echo "Registro guardado correctamente";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?>