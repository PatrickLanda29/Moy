<?php
include_once ('conexion.php');
$titulo = "alumnos";
$alumnos = mysql_query("SELECT * FROM alumnos");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> <?php echo $titulo; ?> </title>
</head>

<body>

	<h1><?php echo $titulo; ?> </h1>
    
    <?php 
	include_once ('menu.php');
	while($row = mysql_fetch_array($alumnos)){
		echo "<h3>" .$row['nombre'].  " " .$row['apellido_paterno']. " " .$row['apellido_materno']. " " .$row['telefono']. " " .$row['edad']. " " .$row['cuenta']. " " .$row['direccion']. "</h3>";
	}
	
	?>

</body>
</html>