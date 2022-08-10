<?php 
    include("./conexion.php");

    $conexion = conectar();

    $sql = "SELECT * FROM `alumno`";
    $query = mysqli_query($conexion, $sql);

    // $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/alumnos.ico" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Registro y Visualización de Alumnos</title>
</head>
<body>

    <div class="container mt-3 p-3 text-center">
        <!-- <div class="row"> -->

                <div class="col-md-12 mb-5">
                    <h1 class="text-center mb-4 fst-italic text-decoration-underline"">Colegio de Bachillerato - Ciudad de Bucaramanga</h1>
                    <form action="insertar.php" method="POST">

                    <!-- Los 'name' de los input deben tener el MISMO nombre del campo en la BD -->
                        <input type="text" name="cod_estudiante" placeholder="Código del Estudiante" class="form-control mb-4" autocomplete="off">
                        <input type="text" name="documento" placeholder="Documento de Identidad" class="form-control mb-4" autocomplete="off">
                        <input type="text" name="nombres" placeholder="Nombres" class="form-control mb-4" autocomplete="off">
                        <input type="text" name="apellidos" placeholder="Apellidos" class="form-control mb-4" autocomplete="off">
                        <input type="text" name="edad" placeholder="Edad" class="form-control mb-4" autocomplete="off">

                        <input type="submit" value="Registrar Estudiante" class="btn btn-success w-100 fs-4">
                    </form>
                </div>

                <hr>

                <div class="col-md-12 mt-5 mb-5">
                    <table class="table">
                        <thead class="table-warning table-striped">
                            <tr>
                                <th>Código</th>
                                <th>Documento</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Edad</th>
                                <th>Acciones</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                while($row = mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['cod_estudiante']?></th>
                                    <th><?php echo $row['documento']?></th>    
                                    <th><?php echo $row['nombres']?></th>
                                    <th><?php echo $row['apellidos']?></th>
                                    <th><?php echo $row['edad']?></th>
                                    <th><a href="./actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="./delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php
                                }
                            ?>
                            
                        </tbody>
                    </table>                    
                </div>

                <hr>

                <footer class="footer_copyright mt-2">
                    <p class="fw-light fst-italic ">Sitio web desarrollado por &copy; Andres Felipe Galvis</p>
                </footer>
        <!-- </div> -->

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>