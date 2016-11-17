<?php 
	include("connection/connection.php");
	$sql="SELECT existencia FROM existencias WHERE id_insumo='".$_POST["id_insumo"]."'";
	$rs=mysql_query($sql) or die(mysql_error());
	$num=mysql_num_rows($rs);
	if ($num==0) {
		$sql1="INSERT INTO existencias (id_insumo,existencia) VALUES(".$_POST["id_insumo"].",".$_POST["cantidad"].")";
		$rs1=mysql_query($sql1) or die(mysql_error());
	}

		$row=mysql_fetch_array($rs);
		$total= $row["existencia"] + $_POST["cantidad"];

		$sql3="UPDATE existencias SET existencia='".$total."' WHERE id_insumo='".$_POST["id_insumo"]."'";
		$rs3=mysql_query($sql3) or die(mysql_error());

		
		$sql2="INSERT into inventario(id_insumo,id_movimiento,cantidad) VALUES('".$_POST["id_insumo"]."','1','".$_POST["cantidad"]."')";
		$rs2=mysql_query($sql2) or die(mysql_error());

		$sql4="SELECT insumo FROM insumos WHERE id_insumo='".$_POST["id_insumo"]."'";
		$rs4=mysql_query($sql4) or die(mysql_error());
		$row4=mysql_fetch_array($rs4);


	echo"<script>alert('Se agregaron ".$_POST["cantidad"]." unidades de ".$row4["insumo"]."');window.location='productos1.php';</script>"


?>