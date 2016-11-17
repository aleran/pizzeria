<?php 
	include("connection/connection.php");
	
		$sql1="INSERT into categorias(categoria,tipo) VALUES('".$_POST["categoria"]."','".$_POST["tipo"]."')";
		$rs1=mysql_query($sql1) or die(mysql_error());
		echo"<script>alert('Se agrego la categoria: ".$_POST["categoria"]."');window.location='inicio.php';</script>"

		


?>