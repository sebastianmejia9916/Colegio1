<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$materia = $_POST['materia'];

$insertar = $conex -> query("INSERT INTO profesores (nombre,apellido,materia)VALUES
('$nombre','$apellido','$materia')");

if ($insertar) {
    echo "profesor agregado";
}else {
    echo "ERROR profesor no agregado";
}
?>