<?php 
	include("connection/connection.php");
	
		$sql1="INSERT into mesas(mesa,estado) VALUES('".$_POST["mesa"]."','1')";
		$rs1=mysql_query($sql1) or die(mysql_error());
		echo"<script>alert('Se agrego la mes: ".$_POST["mesa"]."');window.location='inicio.php';</script>"

		


?>