<?php include 'conexion.php';
$identificacion = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$materia = $_POST['materia'];

$actualizar = $conex -> query ("UPDATE profesores SET nombre='$nombre', apellido='$apellido', materia='$materia' where identificacion='$identificacion' "); 
if ($actualizar){
    echo "<script>
    location.href='formularioProfesores.php';
     </script>";
}else{
    echo "<script>
    location.href='actualizarProfesores.php?identificacion=".$identificacion."';
     </script>";
}
?>