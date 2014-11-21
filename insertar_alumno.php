<?php
include_once('conexion.php');

 $n = $_POST['nombre'];
 $p = $_POST['apellido_paterno'];
 $m = $_POST['apellido_materno'];
 $t = $_POST['telefono'];
 $e = $_POST['edad'];
 $c = $_POST['cuenta'];
 $d = $_POST['direccion'];

	mysql_query("INSERT INTO alumnos (nombre,apellido_paterno,apellido_materno,edad,cuenta,telefono,direccion)
	VALUES ( '$n', '$p', '$m', '$t' , $e, '$c', '$d')"); 
	header('Location:alumnos.php');
?>



</body>
</html>