<?php 
	include("connection/connection.php");
	$sql4="SELECT insumo FROM insumos WHERE id_insumo='".$_POST["id_insumo"]."'";
	$rs4=mysql_query($sql4) or die(mysql_error());
	$row4=mysql_fetch_array($rs4);

	$sql="SELECT existencia FROM existencias WHERE id_insumo='".$_POST["id_insumo"]."'";
	$rs=mysql_query($sql) or die(mysql_error());
	$num=mysql_num_rows($rs);
	$row=mysql_fetch_array($rs);
	if ($num==0) {
		echo"<script>alert('El Producto ".$row4["insumo"]." no posee existencias por lo tanto no puede retirarle');window.location='productos1.php';</script>";
	}

	

	elseif ($row["existencia"] < $_POST["cantidad"]) {
		echo"<script>alert('La cantidad de ".$row4["insumo"]."=".$row["existencia"]." es menor que la cantidad que desea retirar ".$_POST["cantidad"]."');window.location='productos1.php';</script>";
	}
	else{
		$total= $row["existencia"] - $_POST["cantidad"];

		$sql3="UPDATE existencias SET existencia='".$total."' WHERE id_insumo='".$_POST["id_insumo"]."'";
		$rs3=mysql_query($sql3) or die(mysql_error());

			
		$sql2="INSERT into inventario(id_insumo,id_movimiento,cantidad) VALUES('".$_POST["id_insumo"]."','2','".$_POST["cantidad"]."')";
		$rs2=mysql_query($sql2) or die(mysql_error());



		echo"<script>alert('Se reiraron ".$_POST["cantidad"]." unidades de ".$row4["insumo"]."');window.location='productos1.php';</script>";
	}

	


?>