<?php
include_once ('variable_personaje.php');
$titulo_pagina = "Inicio";
$personajes = mysql_query("SELECT * FROM personajes_influyente ");
?>
<!doctype html>
<html>
<head>

	<?php include_once ("head.php");?>

<body>

 	<header>
    	<h1> <?php echo $titulo_personaje ?> </h1>
         <?php include_once ("menu_personaje.php"); ?>
    </header>
    
    <table>
	<tbody>
    	<tr>
        	<th>ID</th>
            <th>NOMBRE </th>
            <th>FECHA NACIMIENTO</th>
            <th>LUGAR DE NACIMIENTO</th>
            <th>DESCRIPCION</th>
        </tr> 
        
        <?php
	
	while($row = mysql_fetch_array($personajes)){
		echo "<tr>";
		echo "<td>".$row['id'] ."</td>";
		echo "<td>".$row['nombre'] ."</td>";
		echo "<td>".$row['fecha nacimiento'] ."</td>";
		echo "<td>".$row['lugar nacimiento'] ."</td>";
		echo "<td>".$row['descripcion historica'] ."</td>";
		echo "</tr>";
	}
?>
</table>
 
</body>
</html>