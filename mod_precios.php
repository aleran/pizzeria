<?php 
	include("connection/connection.php");
			$sql="UPDATE platos SET precio='".$_POST["precio"]."' WHERE id_plato='".$_POST["id_plato"]."'";
			$rs=mysql_query($sql) or die(mysql_error());

		

	echo"<script>alert('Se Modifico el plato');window.location='platos.php';</script>"


?>