<?php include 'conexion.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>LISTA DE PROFESORES</title>
</head>
<body>
    <form action="ingresarProfesor.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre del profesor"><br>
        <input type="text" name="apellido" placeholder="Apellido del profesor"><br>
        <input type="text" name="materia" placeholder="Materia asignada"><br>
        <input type="submit" value="Ingresar profesor">
    </form>
    

    <table>
    
    
        <th>identificacion</th>

        <th>nombre</th>

        <th>apellido</th>

        <th>materia</th>

        <th></th>
        <?php
        $seleccionar = $conex -> query("SELECT * FROM profesores");
        while ($fila = $seleccionar -> fetch_assoc()) {
            ?>
        <tr>
            ><td><?php echo $fila['identificacion']?></td>
            ><td><?php echo $fila['nombre'] ?></td>
            ><td><?php echo $fila['apellido'] ?></td> 
            ><td><?php echo $fila['materia'] ?></td>
            <td><a href="actualizarProfesores.php?identificacion=<?php echo $fila['identificacion'] ?>">EDITAR</a></td>
            <td><a href="eliminarProfesores.php?identificacion=<?php echo $fila['identificacion'] ?>">ELIMINAR</a></td>
        </tr>
        <?php } ?>
        </table>   
</body>
</html>