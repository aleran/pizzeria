<?php
	$h="localhost";
	$u="root";
	$p="infor1234";
	$conexion=mysql_connect($h,$u,$p) or die (mysql_error());
	mysql_select_db("pizzeria",$conexion) or die (mysql_error());
?>