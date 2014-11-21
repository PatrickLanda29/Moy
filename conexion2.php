<?php
//Conexión a la base de datos
$enlace = mysql_connect('localhost', 'root','root');

if(!$enlace){
	die('No se pudo conectar:' .mysql_error());
}
//Instrucciones de PHP con respecto a MySQL
//mysql_connect
//mysql_select_db
//mysql_set_charset

$bd = mysql_select_db('cine',$enlace);
mysql_set_charset('utf-8',$enlace);
?>