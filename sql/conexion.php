<?php
$server='localhost';
$user='id10212209_userbd';
$pass='jUuoIjAQ12';
$db='id10212209_parana';
$conexion=new mysqli($server,$user,$pass,$db);

if($conexion->connect_errno){
	die('error de conexion'.$conexion->connect_errno);
}
/*else{
	echo 'conectado '.$conexion->host_info;
}
*/

?>