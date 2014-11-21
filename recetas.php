<?php
include_once ('variable_cocina.php');
$titulo_pagina = "RECETAS";
$recetas = mysql_query("SELECT * FROM receta ");
?>
<!doctype html>
<html>
<head>

	<?php include_once ("head.php");?>

</head>

<body>

 	<header>
    	<h1> <?php echo $titulo_pagina ?> </h1>
        <?php include_once ("menu_cocina.php"); ?>
    </header>
    
    <table>
	<tbody>
    	<tr>
        	<th>Nombre</th>
            <th>Fecha de creación </th>
            <th>Ingredientes</th>
            <th>Tiempo de preparación</th>
          
        </tr> 
        
        <?php
	
	while($row = mysql_fetch_array($recetas)){
		echo "<tr>";
		echo "<td>".$row['nombre'] ."</td>";
		echo "<td>".$row['fecha creacion'] ."</td>";
		echo "<td>".$row['ingredientes'] ."</td>";
		echo "<td>".$row['tiempo preparacion'] ."</td>";
		echo "<td><a href='eliminar_receta.php?id=" . $row['id'] . "'>Eliminar</a></td>";
		echo "</tr>";
	}
?>
</table>
 
</body>
</html>