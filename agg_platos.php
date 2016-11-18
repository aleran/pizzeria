<?php
	if (isset($_POST["plato"])){
		include("connection/connection.php");
		$sql="INSERT INTO platos(plato,id_categoria,precio) VALUES('".$_POST["plato"]."','".$_POST["id_categoria"]."','".$_POST["precio"]."')";
		$rs=mysql_query($sql) or die(mysql_error());
		echo"<script>alert('Se creo el siguiente producto:".$_POST["plato"]."');window.location='platos.php';</script>";
	}

?>