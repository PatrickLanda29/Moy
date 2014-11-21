<?php
include_once ('variables2.php');
$titulo = "Paises";
$paises = mysql_query("SELECT * FROM paises");
?>
<!doctype html>
<html>

	<head<?php include_once ("head.php");?>

</head>

<body>

	<header>

	<h1><?php echo $titulo; ?> </h1>
    <?php include_once ('menu2.php');?>

	</header>
    <?php 
	
	$numero = 0;
	
	while($fila = mysql_fetch_array($paises)){
		echo $numero ++ . " - " .$fila['nombre']. " <br/>";
	}
	?>
   
    
</body>
</html>