<?php

// Incluyendo la conexión
include('./conexion.php');
$conexion = conectar();

// Capturando el id 
$cod_estudiantes = $_GET['id'];

// Realizando la consulta
$sql = "DELETE FROM alumno WHERE cod_estudiante = '$cod_estudiantes'";
$query = mysqli_query($conexion, $sql);

// Enviando en caso de que la consulta sea OK
if( $query ) {
    Header("Location: index.php");
}

?>