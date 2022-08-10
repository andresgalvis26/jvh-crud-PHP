<?php

// Realizando la inclusión de la conexión
include("conexion.php");
$conexion = conectar();

// Retomando la información 
$cod_estudiante = $_POST['cod_estudiante'];
$documento = $_POST['documento'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];


// Editando la información 
$sql = "UPDATE alumno SET documento = '$documento', nombres = '$nombres', apellidos = '$apellidos', edad = '$edad' WHERE cod_estudiante = '$cod_estudiante'";

// Ejecutando la consulta
$query = mysqli_query($conexion, $sql);

if ($query) {
    Header("Location: index.php");
}

?>