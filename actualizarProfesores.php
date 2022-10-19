<?php include 'conexion.php';
$identificacion= $_REQUEST['identificacion'];

$seleccionar = $conex -> query("SELECT * FROM profesores where identificacion ='$identificacion' ");
if ($fila = $seleccionar -> fetch_assoc()){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>ACTUALIZAR PROFESOR</title>
</head>
<body>
    <form action="updateProfesores.php" method="post">
        <input type="hidden" name="identificacion"  value="<?php echo $identificacion ?>">
        <input type="text" name="nombre" placeholder="Nombre del profesor" value="<?php echo $fila['nombre'] ?>"><br>><br>
        <input type="text" name="apellido" placeholder="Apellido del profesor"  value="<?php echo $fila['apellido'] ?>"><br>><br>
        <input type="text" name="materia" placeholder="materia asignada"  value="<?php echo $fila['materia'] ?>"><br>><br>
        <input type="submit" value="actualizar profesor">
    </form>