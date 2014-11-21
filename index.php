<?php
include_once ('conexion.php');
$titulo = "ALUMNOS";
$alumnos = mysql_query("SELECT * FROM alumnos ");
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
	?>

<table>
	<tbody>
    	<tr>
        	<th>ID</th>
            <th>NOMBRE COMPLETO</th>
            <th>EDAD</th>
            <th>No. DE CUENTA</th>
            <th>DIRECCIÓN</th>
            <th>TELEFONO</th>
            <th>VER MAS</th>
        </tr>    
<?php
	
	while($row = mysql_fetch_array($alumnos)){
		echo "<tr>";
		echo "<td>".$row['id'] ."</td>";
		echo "<td>".$row['nombre'] . " " .$row['apellido_paterno'] . " ". $row['apellido_materno']."</td>";
		echo "<td>".$row['edad'] ."</td>";
		echo "<td>".$row['cuenta'] ."</td>";
		echo "<td>".$row['direccion'] ."</td>";
		echo "<td>".$row['telefono'] ."</td>";
		echo "<td> <a href='detalle_alumno.php?id=" . $row['id'] . "'> Ver Mas </a> </td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>