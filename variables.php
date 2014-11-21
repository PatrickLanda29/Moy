<?php 
$titulo = "Crear Alumno";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
	<title> <?php echo $titulo; ?> </title>
</head>
<body>
	<h1> <?php echo $titulo;?> </h1>
    
    <?php include_once ('menu.php');?>
	
<form action="insertar_alumno.php" method="post">

	<label for="variable"> Nombre </label> <input type="text" name="nombre" value="" id="nombre"> <br><br>
    <label for="variable"> Apellido Paterno </label> <input type="text" name="apellido_paterno" value="" id="apellido_paterno"> <br><br>
    <label for="variable"> Apellido Materno </label> <input type="text" name="apellido_materno" value="" id="apellido_materno"> <br><br>
    <label for="variable"> Teléfono </label> <input type="text" name="telefono" value="" id="telefono"> <br><br>
    <label for="variable"> Edad </label> <input type="text" name="edad" value="" id="edad"> <br><br>
    <label for="variable"> Cuenta </label> <input type="text" name="cuenta" value="" id="cuenta"> <br><br>
    <label for="variable"> Dirección </label> <input type="text" name="direccion" value="" id="direccion"> <br><br>
    
    <p><input type="submit" value"Continuar"></p>
</form>

</body>
</html>