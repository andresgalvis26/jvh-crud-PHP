<?php 

// Incluyendo y usando la función conectar
include("./conexion.php");
$conexion = conectar();

// Recibiendo las variables
$cod_estudiante = $_POST['cod_estudiante'];
$documento = $_POST['documento'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];

// Consulta y query
$sql = "INSERT INTO alumno VALUES('$cod_estudiante', '$documento', '$nombres', '$apellidos', '$edad')";
$query = mysqli_query($conexion, $sql);

// Si realiza el query, que me lleve a alumno
if ($query) {
    Header("Location: index.php");
} else {

}
?>