<?php
	if (isset($_POST["insumo"])){
		include("connection/connection.php");
		$sql="INSERT INTO insumos(insumo,id_unidad,descripcion) VALUES('".$_POST["insumo"]."','".$_POST["id_unidad"]."','".$_POST["descripcion"]."')";
		$rs=mysql_query($sql) or die(mysql_error());
		echo"<script>alert('Se creo el siguiente producto:".$_POST["insumo"]."');window.location='productos1.php';</script>";
	}

?>