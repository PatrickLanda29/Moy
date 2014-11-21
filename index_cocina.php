<?php
include_once ('variable_cocina.php');
$titulo_pagina = "Inicio";
$chefs = mysql_query("SELECT * FROM chef ");
?>
<!doctype html>
<html>
<head>

	<?php include_once ("head.php");?>

<body>

 	<header>
    	<h1> <?php echo $titulo_cocina ?> </h1>
         <?php include_once ("menu_cocina.php"); ?>
    </header>
    
    <table>
	<tbody>
    	<tr>
        	<th>Nombre</th>
            <th>Apellido </th>
            <th>Lugar de Nacimiento</th>
            <th>Fecha de nacimiento</th>
          
        </tr> 
        
        <?php
	
	while($row = mysql_fetch_array($chefs)){
		echo "<tr>";
		echo "<td>".$row['nombre'] ."</td>";
		echo "<td>".$row['apellidos'] ."</td>";
		echo "<td>".$row['lugar nacimiento'] ."</td>";
		echo "<td>".$row['fecha nacimiento'] ."</td>";
		echo "<td><a href='eliminar_chef.php?id=" . $row['id'] . "'>Eliminar</a></td>";
		echo "</tr>";
	}
?>
</table>
 
</body>
</html>