<?php
include_once ('conexion.php');
$titulo = "Detalles";
$URL = $_GET["id"];
$alumnos = mysql_query("SELECT * FROM alumnos WHERE id = $URL");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> <?php echo $titulo; ?> </title>
</head>

<body>

	<h1><?php echo $titulo; ?> </h1>
    
<table>
	<tbody>
    	<tr>
        	<th>ID</th>
            <th>NOMBRE COMPLETO</th>
            <th>EDAD</th>
            <th>No. DE CUENTA</th>
            <th>DIRECCIÓN</th>
            <th>TELEFONO</th>
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
		echo "</tr>";
	}
?>
</table>

</body>
</html>