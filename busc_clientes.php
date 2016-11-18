<?php
	include("connection/connection.php");
	$sql="SELECT * FROM clientes JOIN personas ON clientes.id_persona=personas.id_persona WHERE numero='".$_POST["numero"]."'";
	$rs=mysql_query($sql) or die(mysql_error());
	$num=mysql_num_rows($rs);
	if ($num ==0) {
		echo "<script>window.location='registrar_clientes.php?persona=".$_POST["id_persona"]."&numero=".$_POST["numero"]."'</script>";
	}

	echo "<script>window.location='caja.php?persona=".$_POST["id_persona"]."&numero=".$_POST["numero"]."'</script>";
?>