<?php
include 'conexion.php';

$identificacion =$_REQUEST['identificacion'];

$eliminar = $conex -> query("DELETE FROM estudiantes where identificacion='$identificacion' ");
if ($eliminar) {
    echo "<script>
    alert('Alumno eliminado correctamente');
    location.href='formularioAlumnos.php';
    </script>";
}else {
    echo "<script>
    alert(' ATENCION el alumno no fue eliminado');
    location.href='formularioAlumnos.php';
    </script>";
}






?>