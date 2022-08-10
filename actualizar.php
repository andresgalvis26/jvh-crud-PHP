<?php 

    include("conexion.php");
    $conexion = conectar();

    // Capturando el id
    $id = $_GET['id'];

    // Seleccionar todos los registros iguales al id (solo uno)
    $sql = "SELECT * FROM alumno WHERE cod_estudiante = '$id'";

    // Creando la query
    $query = mysqli_query($conexion, $sql);

    // Ejecutando la query y guardando en row
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/alumnos.ico" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Actualizar Usuario</title>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4 danger">Actualizando datos del usuario</h1>
        <form action="update.php" method="post">

            <input type="hidden" name="cod_estudiante" class="form-control mb-4" value="<?php echo $row['cod_estudiante']?>">

            <label for="documentoUsuario" class="mb-2 fs-4">Documento del Usuario:</label>
            <input type="text" name="documento" id="documento" value="<?php echo $row['documento']?>" class="form-control mb-4">

            <label for="nombres" class="mb-2 fs-4">Nombres del Usuario:</label>
            <input type="text" name="nombres" value="<?php echo $row['nombres']?>" class="form-control mb-4">

            <label for="apellidos" class="mb-2 fs-4">Apellidos del Usuario:</label>
            <input type="text" name="apellidos" value="<?php echo $row['apellidos']?>" class="form-control mb-4">

            
            <label for="edad" class="mb-2 fs-4">Edad del Usuario:</label>
            <input type="text" name="edad" value="<?php echo $row['edad']?>" class="form-control mb-4">

            <input type="submit" value="Actualizar" class="btn btn-primary btn-block w-100 fs-5">


        </form>
    </div>



</body>

</html>