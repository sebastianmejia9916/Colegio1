<?php include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>LISTA DE ALUMNOS</title>
</head>
<body>
    <form action="ingresarAlumno.php" method="post">
    <input type="text" name="identificacion" placeholder="codigo del Alumno"><br>
        <input type="text" name="nombre" placeholder="Nombre del Alumno"><br>
        <input type="text" name="apellido" placeholder="Apellido del Alumno"><br>
        <input type="text" name="grado" placeholder="Grado actual que cursa el Alumno"><br>
        <input type="submit" value="Ingresar Alumno">
    </form>
    

    <table>
        <th>identificacion</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>grado</th>
        <th></th>
        <?php
        $seleccionar = $conex -> query("SELECT * FROM estudiantes");
        while ($fila = $seleccionar -> fetch_assoc()) {
            ?>
        <tr>
            ><td><?php echo $fila['identificacion'] ?></td>
            ><td><?php echo $fila['nombre'] ?></td>
            ><td><?php echo $fila['apellido'] ?></td> 
            ><td><?php echo $fila['grado'] ?></td> 
            <td><a href="actualizarAlumnos.php?identificacion=<?php echo $fila['identificacion'] ?>">EDITAR</a></td>
            <td><a href="eliminarAlumnos.php?identificacion=<?php echo $fila['identificacion'] ?>">ELIMINAR</a></td>
        </tr>
        <?php } ?>
        </table>
</body>
</html>