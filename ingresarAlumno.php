<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
include 'conexion.php';
$identificacion = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$grado = $_POST['grado'];

$insertar = $conex -> query("INSERT INTO estudiantes (identificacion,nombre,apellido,grado)VALUES
('$identificacion','$nombre','$apellido','$grado')");

if ($insertar) {
    echo "alumno agregado";
}else {
    echo "ERROR alumno no agregado";
}
?>





