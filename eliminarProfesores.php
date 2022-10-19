<?php
include 'conexion.php';

$identificacion =$_REQUEST['identificacion'];

$eliminar = $conex -> query("DELETE FROM profesores where identificacion='$identificacion' ");
if ($eliminar) {
    echo "<script>
    alert('profesor eliminado correctamente');
    location.href='formularioProfesores.php';
    </script>";
}else {
    echo "<script>
    alert(' ATENCION el profesor no fue eliminado');
    location.href='formularioProfesores.php';
    </script>";
}






?>