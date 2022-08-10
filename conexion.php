<!-- Nuestro servidor se va a conectar a la base de datos -->
<!-- Requerimos información de nuestro servidor -->

<?php

function conectar() {
    $host="localhost";
    $user="root";
    $pass="";

    $bd = "jvh-crud-php";

    $conexion = mysqli_connect($host, $user, $pass);

    mysqli_select_db($conexion, $bd);

    return $conexion;

}

?>