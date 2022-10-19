<?php include 'conexion.php';
$identificacion = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$grado = $_POST['grado'];

$actualizar = $conex -> query ("UPDATE estudiantes SET nombre='$nombre', apellido='$apellido', grado='$grado' where identificacion='$identificacion' "); 
if ($actualizar){
    echo "<script>
    location.href='formularioAlumnos.php';
     </script>";
}else{
    echo "<script>
    location.href='actualizarAlumnos.php?identificacion=".$identificacion."';
     </script>";
}
?>