<?php
include_once('conexion3.php');
$URL_id= $_GET['id'];
mysql_query("DELETE FROM chef WHERE id = $URL_id");
header('Location:index_cocina.php');
?>